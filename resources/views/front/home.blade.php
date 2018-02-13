@extends('layout.main')
@section('content')

  <section class="hero text-center">


      <h2 >
          <strong>
              Hey! Welcome to Mustaque's Store
          </strong>
      </h2>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <a href="{{route('shirts')}}"><button class="button large">Check out My Shirts</button></a>
  </section>
  <br/>
  <div class="subheader text-center">
       <h2>
      Mustaq&rsquo;s Latest Shirts
  </h2>
  </div>

    <div class="row">
  @forelse ($products as $product)
      <div class="small-3 columns">
          <div class="item-wrapper">
              <div class="img-wrapper">
                  <a href="{{route('cart.edit',$product->id)}}" class="button expanded add-to-cart">
                      Add to Cart
                  </a>
                  <a href="#">
                      <img src="images/{{$product->image}}"/>
                  </a>
              </div>
              <a href="{{route('shirt')}}">
                  <h3>
                      {{$product->name}}
                  </h3>
              </a>
              <h5>
                  ${{$product->price}}
              </h5>
              <p>
                  {{$product->description}}
              </p>
          </div>
      </div>


  @empty
    <div class="container">
      <div class="row" style="height:700px;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h2>There is No Product</h2>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  @endforelse
</div>

  <!-- Latest SHirts -->

  <!-- Footer -->
  <br>

@endsection
