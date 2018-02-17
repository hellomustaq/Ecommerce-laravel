@extends('layout.main')
@section('link')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@endsection
@section('content')
	<div class="container">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="row">
	        <div class="col-xs-12 col-sm-6 col-md-12">
	            <div class="well well-sm">
	                <div class="row">
	                    <div class="col-sm-6 col-md-4">
	                        <img src="http://placehold.it/380x500"	 alt="" class="img-rounded img-responsive" />
	                    </div>
	                    <div class="col-sm-6 col-md-8">
	                        <h3>{{$user->name}}</h3>
	                        <h4>{{$user->email}}</h4>
	                        <!-- Split button -->
	                        <div class="btn-group">
	                            <button type="button" class="btn btn-primary">
	                                Social</button>
	                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
	                                <span class="caret"></span><span class="sr-only">Social</span>
	                            </button>
	                            <ul class="dropdown-menu" role="menu">
	                                <li><a href="#">Twitter</a></li>
	                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
	                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
	                                <li class="divider"></li>
	                                <li><a href="#">Github</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
		<div class="col-md-2"></div>
	    
    	</div>
    	<div class="clearfix"></div>

    	@if ($user->orders)
    	@foreach ($orders as $order)
    		<div class="" style="width: 100%;">
	    		<div class="col-md-1"></div>
	    		<div class="col-md-10">
	    			<table class="table table-hover">
	    				<thead>
	    					<tr>
	    						<th>order id</th>
	    						<th>Qty</th>
	    						<th>total</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    					@foreach ($order->orderItems as $item)
		    					<tr>
		    						<td>{{$item->name}}</td>
		    						<td>{{$item->pivot->qty}}</td>
		    						<td>{{$item->pivot->total}}</td>
		    					</tr>
	    					@endforeach
	    					
	    				</tbody>
	    			</table>
	    		</div>
	    		<div class="col-md-1"></div>
	    	</div>
    	
    	@endforeach
    		
    	@else
    		<h3>You Have not ordered yet</h3>
    	@endif

    	
</div>

@endsection