<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $isShippingdone=0;
    $request->validate([
      'address'=>'required',
      'country'=>'required',
      'city'=>'required',
      'state'=>'required',
      'zip'=>'required',
      'phone'=>'required',
    ],[
      'address.required'=>'Please fill up your address field',
      'country.required'=>'Please fill up country field',
      'city.required'=>'Please fill up city field',
      'state.required'=>'Please fill up state field',
      'zip.required'=>'Please fill up zip field',
      'phone.required'=>'Please fill up Phone field',
    ]);
    Auth::user()->address()->create($request->all());
    $isShippingdone=1;
    $data['isShippingdone']=$isShippingdone;
    session(['isShippingdone' => 1]);
    return redirect()->route('payment');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
