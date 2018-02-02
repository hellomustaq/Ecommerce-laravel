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

}
