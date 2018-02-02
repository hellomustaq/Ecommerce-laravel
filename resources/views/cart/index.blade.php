@extends('layout.main')
@section('style')

  <style type="text/css">
  .img-cart {
  display: block;
  max-width: 50px;
  height: auto;
  margin-left: auto;
  margin-right: auto;
}
table tr td{
  border:1px solid #FFFFFF;
}

table tr th {
  background:#eee;
}

.panel-shadow {
  box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
}
.action-checkout{
  padding: 8px 105px;
  background-color: #7dd461;
  color: black;
  border-radius: 5px;
  box-shadow: 1px 2px 19px 0px;
  margin: -7px;
  font-size: larger;
}
.action-back{
  padding: 11px 65px;
  background-color: #4ed6e4;
  color: black;
  border-radius: 5px;
  box-shadow: 1px 2px 19px 0px;
  font-size: larger;
}
.spacer1{
  margin: 1px 0px 0px 4px;
  background-color: #07d190;
  padding: 10px 4px;
  color: white;
  border-radius: 5px;
  box-shadow: 1px 3px 9px 0px lightseagreen;
}
.btn{
  display: inline-block;
padding: 6px 12px;
margin-bottom: 0;
font-size: 14px;
font-weight: 400;
line-height: 1.42857143;
text-align: center;
white-space: nowrap;
vertical-align: middle;
-ms-touch-action: manipulation;
touch-action: manipulation;
cursor: pointer;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
background-image: none;
border: 1px solid transparent;
border-radius: 4px;
}
.btn-danger{
  color: #fff;
      background-color: #d9534f;
      border-color: #d43f3a;
}
.btn-success{
  color: #fff;
      background-color: #449d44;
      border-color: #398439;;
}
a:hover{
  color:white;
}
  </style>

@endsection
@section('content')
  <br>
  <div class="row">
    <center><h2>Shopping Cart</h2></center>
  </div><hr><br><br>
  <div class="container bootstrap snippet">
      @if (Cart::count()>0)


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
                    <div class="panel-body">
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @forelse ($cartItems as $cartItem)
                                <tr>
                                    <td><strong>{{$cartItem->name}}</strong>
                                      {{-- <p>{{$cartItem->options->has('size')?$cartItem->options->size :''}}</p> --}}
                                    </td>
                                    <td>
                                      <form method="post" action="{{route('cart.update',$cartItem->rowId)}}">
                                        {{ method_field('PUT')}}
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                          <input name="qty" autofocus style="width:100px;border-redius:4px;" type="text" class="pull-left form-control" id="exampleInputEmail1" value="{{$cartItem->qty}}">
                                          <button type="submit" class="spacer1 btn btn-success pull-center"><i class="fa fa-check" aria-hidden="true"></i></button>
                                        </div>

                                      </form>
                                    </td>
                                    <td>{{$cartItem->price}}</td>
                                    <td>{{$cartItem->qty*$cartItem->price}}</td>
                                    <form class="" action="{{route('cart.destroy',$cartItem->rowId)}}" method="post">
                                      {{method_field('DELETE')}}
                                      {{csrf_field()}}
                                      <td><input type="submit" value="Remove" class="btn btn-danger"></td>
                                    </form>

                                </tr>

                              @empty
                                <center>No Item in Cart!</center>
                                {{-- <div class="row">
                                  <div class="col-md-4"></div>
                                  <div class="col-md-4"><p>No Item in Cart!</p></div>
                                  <div class="col-md-4"></div>
                                </div> --}}
                              @endforelse
                              <tr>
                                  <td colspan="6">&nbsp;</td>
                              </tr>
                              <tr>
                                  <td colspan="3" class="text-right">Sub Total : </td>
                                  <td>{{Cart::subtotal()}}</td>
                              </tr>
                              <tr>
                                  <td colspan="3" class="text-right">Tax (15%) :</td>
                                  <td>{{Cart::tax()}}</td>
                              </tr>
                              <tr>
                                  <td colspan="3" class="text-right"><strong>Total :</strong></td>
                                  <td>{{Cart::total()}}</td>
                              </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <a class="action-back"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Continue Shopping</a>
                <a href="{{route('checkout')}}" class="action-checkout pull-right" role="button">Check Out <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
      @else
        <h2 style="text-align:center;">You have no Item In cart!</h2>
      @endif

    </div>
</div>

<br><br><br><br><br><br><br>
@endsection
