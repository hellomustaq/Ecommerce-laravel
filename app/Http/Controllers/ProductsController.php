<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Category;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::all();
        return view('admin.product.index')->with('products', $products);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();
        return view('admin.product.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $productName=$request->input('p_name');
        $productDescription=$request->input('p_description');
        $productSize=$request->input('p_size');
        $productPrice=$request->input('p_price');
        $productCategory=$request->input('p_catagory');
        $productImage=$request->file('p_image');
        //validate
        $validatedData = $request->validate([
        'p_name' => 'required',
        'p_size' => 'required',
        'p_price' => 'required',
        'p_catagory' => 'required',
        'p_image' => 'image | mimes:jpg,jpeg,png | max:10000',
      ],
      [
          'p_name.required' => 'Name is required',
          'p_size.required' => 'Size is required',
          'p_price.required' => 'Please give product price',
          'p_catagory.required' => 'Please select a catagory',
        ]);

      //error massage return if validate false
      // if($validatedData->fails()) {
      //     return Redirect::back()->withErrors($validatedData);
      //   }


        if ($request->hasFile('p_image')) {
          $imageExtention=$request->file('p_image')->getClientOriginalExtension();
          $randomString=substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)), 0, 10);
          $modifiedImageName=$randomString.'.'.$imageExtention;
          $productImage->move(public_path('images'),$modifiedImageName);
          //$addProductInput['image']=$modifiedImageName;
        }
        if (empty($modifiedImageName)) {
          $modifiedImageName=NULL;
        }
        Product::create([
          'name'=>$productName,
          'description'=>$productDescription,
          'size'=>$productSize,
          'price'=>$productPrice,
          'catagory_id'=>$productCategory,
          'image'=>$modifiedImageName
        ]);
        //return redirect()->back()->withSuccess('IT WORKS!');
        return redirect()->route('product.create')->withSuccess('Product added successfully!');

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
