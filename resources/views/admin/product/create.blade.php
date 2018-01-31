@extends('admin.layout.admin')
@section('content')
    <h3>Add Product</h3>

    @include('errors.error')
    @include('errors.success')

      <form action="{{route('product.store')}}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4 lead text-right">Product Name :</div>
             <div class="col-md-8">
                <div class="form-group">
                  <input type="text" placeholder="Name:" name="p_name" class="form-control">
                </div>
             </div>
        </div>
        <div class="row">
            <div class="col-md-4 lead text-right">Product Description :</div>
             <div class="col-md-8">
                <div class="form-group">
                  <textarea name="p_description" placeholder="Write Here A Short Description..." class="form-control" rows="4" cols="80"></textarea>
                  {{-- <input type="text" placeholder="Description" name="p_description" class="form-control" > --}}
                </div>
             </div>
        </div>
        <div class="row">
            <div class="col-md-4 lead text-right">Product Size :</div>
             <div class="col-md-8">
               <div class="form-group">
                 <select class="form-control" name="p_size">
                   <option value="small">Small</option>
                   <option value="medium">Medium</option>
                   <option value="large">Large</option>
                 </select>
               </div>
             </div>
        </div>
        <div class="row">
            <div class="col-md-4 lead text-right">Product Price :</div>
             <div class="col-md-8">
                <div class="form-group">
                  <input type="text" placeholder="Price" name="p_price" class="form-control" >
                </div>
             </div>
        </div>
        <div class="row">
            <div class="col-md-4 lead text-right">Product Category :</div>
             <div class="col-md-8">
                <div class="form-group">
                  <select class="form-control" name="p_catagory" >
                    <option value="" selected disabled>--Please select--</option>
                    @forelse ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @empty
                      <option value="">Nothing to select</option>
                    @endforelse
                  </select>
                </div>
             </div>
        </div>
        <div class="row">
            <div class="col-md-4 lead text-right">Product Image :</div>
             <div class="col-md-8">
                <div class="form-group">
                  <input type="file" name="p_image" placeholder="First Name:" name="first_name" class="form-control">
                </div>
             </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
             <div class="col-md-8">
                  <input type="submit" class="btn btn-success" name="submit" value="Submit">
             </div>
        </div>
      </form>
@endsection
