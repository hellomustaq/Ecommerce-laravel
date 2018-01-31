@extends('admin.layout.admin')
@section('content')

  <ul>
    @forelse ($products as $product )
      <li>{{$product->name}}</li>
    @empty
      <p>product not found</p>
    @endforelse

  </ul>

@endsection
