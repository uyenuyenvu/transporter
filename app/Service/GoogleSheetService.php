<?php

namespace App\Services;

use Google\Service\Sheets\BatchUpdateSpreadsheetRequest;
use Google\Service\Sheets\BatchUpdateSpreadsheetResponse;
use Google\Service\Sheets\UpdateValuesResponse;
use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;

class GoogleSheetsService
{
    private $spreadSheetId;


    private $client;

    private $googleSheetService;

    public function __construct()
    {
        $this->spreadSheetId = config('google-sheet.google_spread_sheet_id','1bDpo2Giz8MeSxDuVX3Jb_px2S_jVzu6Zk3OIWcqXfhw');
        $this->client = new Google_Client();
        $this->client->setAuthConfig(config('google-sheet.google_credentials_path', ''));
        $this->client->addScope(config('google-sheet.google_scope', ''));
        $this->googleSheetService = new Google_Service_Sheets($this->client);
    }


    public function readGoogleSheet($nameTab): array
    {
        $dimensions = $this->getDimensions($this->spreadSheetId, $nameTab);
        $range = "{$nameTab}!A1:" . $dimensions['colCount'];

        $data = $this->googleSheetService
            ->spreadsheets_values
            ->batchGet($this->spreadSheetId, ['ranges' => $range]);

        return $data->getValueRanges()[0]->values;
    }

    public function saveDataToSheet(array $data, $nameTab): UpdateValuesResponse
    {
        $dimensions = $this->getDimensions($this->spreadSheetId, $nameTab);

        $body = new Google_Service_Sheets_ValueRange([
            'values' => $data
        ]);

        $params = [
            'valueInputOption' => 'USER_ENTERED',
        ];

        $range = "{$nameTab}!A" . ($dimensions['rowCount'] + 1);

        return $this->googleSheetService
            ->spreadsheets_values
            ->update($this->spreadSheetId, $range, $body, $params);
    }

    private function getDimensions($spreadSheetId, $nameTab): array
    {
        $rowDimensions = $this->googleSheetService->spreadsheets_values->batchGet(
            $spreadSheetId,
            ['ranges' => "{$nameTab}!A:A", 'majorDimension' => 'COLUMNS']
        );

        //if data is present at nth row, it will return array till nth row
        //if all column values are empty, it returns null
        $rowMeta = $rowDimensions->getValueRanges()[0]->values;
        if (!$rowMeta) {
            return [
                'error' => true,
                'message' => 'missing row data'
            ];
        }

        $colDimensions = $this->googleSheetService->spreadsheets_values->batchGet(
            $spreadSheetId,
            ['ranges' => "{$nameTab}!1:1", 'majorDimension' => 'ROWS']
        );

        $colMeta = $colDimensions->getValueRanges()[0]->values;
        if (!$colMeta) {
            return [
                'error' => true,
                'message' => 'missing row data'
            ];
        }

        return [
            'error' => false,
            'rowCount' => count($rowMeta[0]),
            'colCount' => $this->colLengthToColumnAddress(count($colMeta[0]))
        ];
    }

    public function addSheetTab($title): BatchUpdateSpreadsheetResponse
    {
        $body = new BatchUpdateSpreadsheetRequest (array(
            'requests' => array(
                'addSheet' => array(
                    'properties' => array(
                        'title' => $title
                    )
                )
            )
        ));

        $sheets = $this->googleSheetService->spreadsheets->batchUpdate($this->spreadSheetId, $body);

        $body = new Google_Service_Sheets_ValueRange([
            'values' => [
                [
                    'STT',
                    'Điểm đón',
                    'Điểm đến',
                    'Tên',
                    'SĐT'
                ]
            ]
        ]);

        $params = [
            'valueInputOption' => 'USER_ENTERED',
        ];

        $range = "{$title}!A1";
        $this->googleSheetService
            ->spreadsheets_values
            ->update($this->spreadSheetId, $range, $body, $params);

        return $sheets;
    }

    private function colLengthToColumnAddress($number): ?string
    {
        if ($number <= 0) return null;

        $letter = '';
        while ($number > 0) {
            $temp = ($number - 1) % 26;
            $letter = chr($temp + 65) . $letter;
            $number = ($number - $temp - 1) / 26;
        }
        return $letter;
    }
}
