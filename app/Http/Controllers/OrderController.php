<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function orders($type=''){
      if ($type=='delivered') {
        $order=Order::where('delivered', '1')->get();
      }elseif ($type=='pending') {
        $order=Order::where('delivered', '0')->get();
      }else {
        $order=Order::all();
      }
      return view('admin.orders')->with('orders', $order);
    }



    public function delivered(Request $request,$orderId){
      $order=Order::find($orderId);
      $order->delivered=$request->delivered;
      $order->save();
      return back();
    }
}
