<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','Ecom')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/> --}}
        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"/> --}}
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
        <style type="text/css">
            .btton{
                border-radius: 5px;
                padding: 7px 5px;
                margin: 5px;
            }
            .padd{
                padding:0;
            }
        </style>
        @yield('link')
        @yield('style')


    </head>
    <body>
        <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="{{route('home')}}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       Shirt's Store<s></s>
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                        <a href="{{route('shirts')}}">
                            SHIRTS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            CONTACT
                        </a>
                    </li>
                    <li>
                        <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                            </i>
                            CART
                            <span class="badge badge-danger badge-secondary lead" >
                                <strong>{{Cart::count()}}</strong>
                            </span>
                        </a>
                    </li>
                    
                        @if (Auth::check())
                            <li><a class="padd" href="{{ url('/home') }}"><span class="button btton">Profile</span></a></li>
                            <li><a class="padd" href="{{ route('logout') }}"><span class="button btton">Logout</span></a></li>
                        @else
                            <li><a class="padd" href="{{ route('login') }}"><span class="button btton">Login</span></a></li>
                            <li><a class="padd" href="{{ route('register') }}"><span class="button btton">Signup</span></a></li>
                        @endif

                    
                </ol>
            </div>
        </div>

@yield('content')

<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
      <p>Coded by  Mustaque Ahemmed</p>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-html5"></i>
      <p>Ecommerce Demo project build with Laravel 5.5. This is a project for learning perpose.</p>
    </div>

    <div class="small-6 medium-4 large-4 columns">
      <h4>Follow Me</h4>
      <ul class="footer-links">
        <li><a href="https://github.com/hellomustaq">GitHub</a></li>
        <li><a href="https://fb.com/hellomustaq">Facebook</a></li>
        <li><a href="https://twitter.com/hellomustaq">Twitter</a></li>
      <ul>
    </div>
  </div>
</footer>

    <script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('dist/js/app.js')}}"></script>
    <script
      src="http://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
        
      </script>



    {{-- script for payment (stripe)  --}}
    <script src="https://js.stripe.com/v2/"></script>
    <script src="https://js.stripe.com/v3/"></script>




    </body>
</html>
