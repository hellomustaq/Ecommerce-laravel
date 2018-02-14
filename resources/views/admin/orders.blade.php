@extends('admin.layout.admin')
@section('style')
  <style>
  .margin{
    margin:30px 42px 15px 42px;
    border-radius: 5px;
  }
  .bg-success{
    background-color: #8fda82;
  }
  </style>

@endsection
@section('content')
    <h3>OrderS</h3>
    @foreach ($orders as $order)

      <div class="card pull-left margin bg-success rounded" style="width: 20rem;">
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
      </div>

    @endforeach
@endsection
