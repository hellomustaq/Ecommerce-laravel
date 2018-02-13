<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\AddressController;

class CheckoutController extends Controller
{
    public function step1(){
      // if (Auth::check()) {
      //   return view('front.shipping-info');
      // }
      // return redirect()->route('login');
      if (Cart::count()<1) {
        return redirect()->back();
      }

      return view('front.shipping-info');
    }


    public function payment(){
      //dd('$isShippingdone');
      if (Cart::count()<1 or session()->get('isShippingdone')!==1) {
        return redirect()->back();
      }
      return view('front.payment');
    }


    public function storePayment(Request $request){
      // Set your secret key: remember to change this to your live secret key in production
      // See your keys here: https://dashboard.stripe.com/account/apikeys
      \Stripe\Stripe::setApiKey("sk_test_payvojzSOcn2HQXM7u1cwR4Z");

      // Token is created using Checkout or Elements!
      // Get the payment token ID submitted by the form:
      $token = $_POST['stripeToken'];

      // Charge the user's card:
      $charge = \Stripe\Charge::create(array(
        "amount" => Cart::total()*100,
        "currency" => "usd",
        "description" => "Example charge",
        "source" => $token,
      ));

      //create order

      $user=Auth::user();
      $order=$user->orders()->create([
        'total'=>Cart::total(),
        'delivered'=>0
      ]);

      $cartItems=Cart::content();
      foreach ($cartItems as $cartItem) {
        $order->orderItems()->attach($cartItem->id,[
          'qty'=>$cartItem->qty,
          'total'=>$cartItem->qty*$cartItem->price
        ]);
      }
      return view('thankyou');

    }

}
