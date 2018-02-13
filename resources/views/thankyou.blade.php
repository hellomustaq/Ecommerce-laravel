@extends('layout.main')
@section('style')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@endsection
@section('content')

  <div class="jumbotron text-xs-center">
    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-6">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead">Your Item will be delivered soon and we will notify when it reach to you! Keep shopping with us.</p>
        <hr>

        <p class="lead">
          <a class="btn btn-primary btn-sm" href="{{route('/')}}" role="button">Continue to homepage</a>
        </p>
      </div>
      <div class="col-md-3">

      </div>

    </div>

  </div>

@endsection
