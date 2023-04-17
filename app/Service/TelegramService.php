<?php

namespace App\Service;

use GuzzleHttp\Client;

class TelegramService
{
    public function __construct()
    {

    }

    public static function sendMessage($text)
    {
        $_url = config('infor.telegram_url');
        $_token = config('infor.telegram_token');
        $_chat_id = config('infor.telegram_chat_id');
        $uri = $_url . $_token . '/sendMessage?parse_mode=html';
        $params = [
            'chat_id' => $_chat_id,
            'parse_mode'=>'HTML',
            'text' => $text,
        ];
        $option['verify'] = false;
        $option['form_params'] = $params;
        $option['http_errors'] = false;
        $client = new Client();
        $response = $client->request("POST", $uri, $option);
        return json_decode($response->getBody(), true);
    }
}
