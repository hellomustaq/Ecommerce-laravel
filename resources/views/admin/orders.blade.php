@extends('admin.layout.admin')
@section('style')
  <style>
  .margin{
    margin:20px 0px 20px 0px;
    border-radius: 5px;
  }
  .bg-success{
    background-color: #c9c9c9;
  }
  .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  background-color: #ede9e9;
}
  </style>

@endsection
@section('content')
    <h3>OrderS</h3>
    @foreach ($orders as $order)

      <table class="table table-hover bg-success margin">
        <thead style="background-color: #00dbff">
          <tr>
            <td><p style="font-size: 18px;" class=""><strong>Order by <span style="color: green">{{ $order->user->name }}</span></strong></p></td>
            <td><p style="font-size: 18px;" class=""><strong>Total  {{ $order->total }}</strong><small>(with vat)</small></p></td>
            <td class="pull-right">
              <form action="{{ route('toggle.delivered',$order->id) }}" method="POST" role="form">
                {{csrf_field()}}
                <div class="">
                  <input type="hidden" name="delivered" value="1">
                </div>
                <button type="submit" class="btn btn-danger" {{ $order->delivered==1?"disabled":"" }}>{{ $order->delivered==1?"Delivered":"Make Deliver" }}</button>
              </form>
            </td>
          </tr>
        </thead>
        <thead>
          <tr>
            <th style="text-align: center;">Product Name</th>
            <th style="text-align: center;">Product Qty</th>
            <th style="text-align: center;">Product Price</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($order->orderItems as $item)
            <tr>
              <td>{{ $item->name }}</td>
              <td>{{ $item->pivot->qty }}</td>
              <td>{{ $item->pivot->total }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{-- <div class="card pull-left margin bg-success rounded" style="width: 20rem;">
        <div class="card-block">
          <h4 class="card-title">{{$order->user->name}}</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-block">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div> --}}

    @endforeach
@endsection
