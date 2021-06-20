<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function complete_order($id, Request $request) {
        $cur = $request->input("cur", "USD");
        $order = Order::findOrFail($id);

        if($cur != "USD") {
            $conv_id = "{$cur}_USD";
            $string = Http::get("https://free.currencyconverterapi.com/api/v6/convert?q=$conv_id&compact=ultra&apiKey=10e51f9636615fbe228b");
            $curr_val = json_decode($string, true);
            $total_amount = round($order->total_amount * $curr_val[$conv_id], 2);
        } 

        else {
            $total_amount = $order->total_amount;
        }


       if($order->order_status != 'Complete')  {
            $order->order_status = 'Complete';
            $order->save();
            $order->rewards()->create([
                'points' => $total_amount,
                'user_id' => 1,
                'expires_on' => date('Y-m-d', strtotime('+1 year')) 
            ]);

            return "Order completed and points redeemed successfully go to <a href='/rewards'>View redeemed info</a> ";
       }
       else {
        return "Order is already completed  <a href='/rewards'>View redeemed info</a>";
       }

    }

    public function fetch_points() {
        $user = User::findOrFail(1);
        $rewards = $user->rewards()->get();
        return view('rewards.list')->with(["rewards" => $rewards, "user" => $user]);
    }
}
