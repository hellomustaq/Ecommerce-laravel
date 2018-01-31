@extends('admin.layout.admin')
@section('content')
  <div class="panel panel-heading ">
    <div class="panel-body bg-success"><h2>Category</h2></div>
  </div><br>
  <nav class="navbar bg-secondary">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      @forelse ($categories as $category)
        <li class="btn-success navbar-btn "><a href="{{route('category.show',$category->id)}}">{{$category->name}}</a></li>
      @empty
        <li>No Category</li>
      @endforelse
    </ul>
    {{-- <button class="btn btn-info navbar-btn pull-right">Add Category</button> --}}

    <button type="button" class="btn btn-info navbar-btn pull-right" data-toggle="modal" data-target="#exampleModal">
      Add Category
    </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <form class="" action="{{route('category.store')}}" method="post">
      {{ csrf_field() }}
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row">
              <div class="col-md-4 lead">Category Name:</div>
               <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" placeholder="Category Name:" name="c_name" class="form-control">
                  </div>
               </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </div>
    </form>

  </div>
</div>
  </div>
</nav><br><br><br>
@if (!empty($products))
  <section>
    <table class="table">
    <tbody>
      <tr>
        <td><strong>Product name</strong></td>
        <td><strong>Product Description</strong></td>
        <td><strong>Product Size</strong></td>
        <td><strong>Product Price</strong></td>
      </tr>
      @forelse ($products as $product)
        <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->size}}</td>
          <td>{{$product->price}}</td>
        </tr>
      @empty
        <h2>No Product</h2>
      @endforelse


    </tbody>
  </table>
  </section>
@endif


@endsection
