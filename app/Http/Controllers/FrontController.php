<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    //

    public function index(){
      $products=Product::all()->take(4);
      //$products=$products->take(4);

      return view('front.home')->with('products', $products);
    }
    public function shirts(){
      $products=Product::all();
      return view('front.shirts')->with('products', $products);
    }
    public function shirt(){
      return view('front.shirt');
    }
}
