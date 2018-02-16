@extends('admin.layout.admin')
@section('content')


    <div class="row">
      @forelse ($products as $product)
        <div class="small-3 columns pull-left" style="margin: 5px;border:2px solid green;" >
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="/images/{{$product->image}}" height="150" width="200" />
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

@endsection
