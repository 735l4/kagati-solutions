<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function complete_order($id) {

       $order = Order::findOrFail($id);
       if($order->order_status != 'Complete')  {
            $order->order_status = 'Complete';
            $order->save();
            $order->rewards()->create([
                'points' => $order->total_amount,
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
