<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Service\TelegramService;
use App\Services\GoogleSheetsService;
use Faker\Core\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class OrderController extends Controller
{
    public function postOrder(Request $request)
    {

        try {

            $validator = Validator::make($request->all(), [
                'place_start' => 'required',
                'place_end' => 'required',
                'customer_name' => 'required',
                'number_phone' => 'required',
            ]);

            if ($validator->passes()) {

                $lstExistCustomer = Customer::where('number_phone', $request->input('number_phone'))->get();
                $customer = null;
                if (count($lstExistCustomer) === 0) {
                    $customer = Customer::create([
                        'name' => $request->input('customer_name'),
                        'number_phone' => $request->input('number_phone')
                    ]);
                }else{
                    $customer = $lstExistCustomer[0];
                }

                $data = $request->all();

                $order = Order::create([
                    'order_type' => $data['type'],
                    'transaction_type' => 1,
                    'place_start' => $data['place_start'],
                    'place_end' => $data['place_end'],
                    'customer_name' => $data['customer_name'],
                    'number_phone' => $data['number_phone'],
                    'customer_id' => $customer->id,
                    'status' => 0,
                    'time' => Carbon::now(),
                    'note' => $data['note'],
                ]);

                $googleSheet = new GoogleSheetsService();

                $lstOderToday = Order::where('time', '>=', Carbon::now()->startOfDay())->get();
                $sheetNameToday = Carbon::now()->format('d-m-Y');
                if (count($lstOderToday) === 1){
                    $googleSheet->addSheetTab($sheetNameToday);
                }
                $finalData = collect();
                    $finalData->push([
                        count($lstOderToday),
                        $order->place_start,
                        $order->place_end,
                        $order->customer_name,
                        $order->number_phone,
                    ]);

                $googleSheet->saveDataToSheet($finalData->toArray(), $sheetNameToday);

                $message = $this->getMessage($data);
                TelegramService::sendMessage($message);
                return response()->json(['code' => 200, 'message' => 'done']);
            } else {
                return response()->json(['error' => "fail"]);
            }

        } catch (Exception $e) {
            return response()->json(['error' => $e]);

        }

    }

    public function getMessage($data)
    {
        $message = "Cuốc xe mới \n";
        $message .= "Tên khách hàng: <i><b>" . $data['customer_name'] . " </b></i>\n";
        $message .= "Số đện thoại:  <i><b>" . $data['number_phone'] . "  </b></i>\n";
        $message .= "Đi từ :  <i><b>" . $data['place_start'] . "  </b></i>\n";
        $message .= "Đến :  <i><b>" . $data['place_end'] . "  </b></i>\n";
        if ($data['note'] && strlen($data['note']) > 0) {
            $message .= "Ghi chú :  <i><b>" . $data['note'] . " </b></i>";
        }
        return $message;
    }
}
