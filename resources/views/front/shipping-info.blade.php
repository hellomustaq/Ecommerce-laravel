@extends('layout.main')
@section('style')
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@endsection
@section('content')
  <br><br>
  <h3 class="text-center">Shipping Details</h3>
  <hr>
    @include('errors.error')
  <form action="{{route('address.store')}}" method="post">
    {{csrf_field()}}
  <div class="row">
    <div class="col-md-4">

    </div>

    <div class="col-md-6">

      <div class="row">
          <div class="col-md-4 lead text-right">address :</div>
           <div class="col-md-8">
              <div class="form-group">
                <textarea name="address" placeholder="Write Your Address" class="form-control" rows="4" cols="80"></textarea>
                {{-- <input type="text" placeholder="Description" name="p_description" class="form-control" > --}}
              </div>
           </div>
      </div>
      <div class="row">
          <div class="col-md-4 lead text-right">Country :</div>
           <div class="col-md-8">
              <div class="form-group">
                <input type="text" placeholder="Country:" name="country" class="form-control">
              </div>
           </div>
      </div>
      <div class="row">
          <div class="col-md-4 lead text-right">City :</div>
           <div class="col-md-8">
             <div class="form-group">
               <input type="text" pQMobile Humlaceholder="City :" name="city" class="form-control">
             </div>
           </div>
      </div>
      <div class="row">
          <div class="col-md-4 lead text-right">State :</div>
           <div class="col-md-8">
              <div class="form-group">
                <input type="text" placeholder="State" name="state" class="form-control" >
              </div>
           </div>
      </div>
      <div class="row">
          <div class="col-md-4 lead text-right">Zip Code :</div>
           <div class="col-md-8">
              <div class="form-group">
                <input type="text" placeholder="Zip Code :" name="zip" class="form-control">
              </div>
           </div>
      </div>
      <div class="row">
          <div class="col-md-4 lead text-right">Phone :</div>
           <div class="col-md-8">
              <div class="form-group">
                <input type="text" placeholder="Phone with country code :" name="phone" class="form-control">
              </div>
           </div>
      </div>

      <div class="row">
          <div class="col-md-4"></div>
           <div class="col-md-8">
                <input type="submit" class="btn btn-success" name="submit" value="proceed For Payment">
           </div>
      </div>

    </div>
    <div class="col-md-2">

    </div>
  </div>
  </form>

  <br><br>

@endsection
