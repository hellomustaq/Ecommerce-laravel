<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //
    public function step1(){
      // if (Auth::check()) {
      //   return view('front.shipping-info');
      // }
      // return redirect()->route('login');
      return view('front.shipping-info');
    }


    public function payment(){
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
        "amount" => 99999999999,
        "currency" => "usd",
        "description" => "Example charge",
        "source" => $token,
      ));

    }

}
