@extends('layout.main')
@section('style')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    .mt{
      margin-top: 0px;
    }
    .levelexd{
      margin-right: 65px;
    }
    .StripeElement {
  background-color: white;
  height: 40px;
  padding: 10px 12px;
  border-radius: 4px;
  border: 1px solid transparent;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}

  </style>
@endsection
@section('content')<br><br><br><br><br><br><br><br>
  .<div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4">
      <form action="{{route('payment.store')}}" method="POST">
        {{csrf_field()}}
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_2vVOUySenJXmLYy8rY5Qp7Lo"
        data-amount="{{Cart::total()*100}}"
        data-name="Demo Site"
        data-description="Example charge"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto">
      </script>
    </form>
    </div>
    <div class="col-md-4"></div>
  </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection

{{-- @section('content')
  <br><br>
  <div class="container">
    <div class="row center">
      <form action="{{route('payment.store')}}" method="post" id="payment-form">
            {{csrf_field()}}
          <div class="col-md-6">

          </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Payment Details
                        </h3>
                        <div class="checkbox pull-right">
                            <label>
                                <input type="checkbox" />
                                Remember
                            </label>
                        </div>
                    </div>
                    <div class="panel-body">

                          <div class="card-errors"></div>
                        <div class="form-group">
                            <label for="cardNumber">
                                CARD NUMBER</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                    required autofocus data-stripe="number" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="expityMonth" class="levelexd">
                                        EXPIRY DATE </label>
                                    <div class="col-xs-6 col-lg-6 mt">
                                        <input type="text" class="form-control" id="expityMonth" data-stripe="exp_month" placeholder="MM" required />
                                    </div>
                                    <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control" id="expityYear" data-stripe="exp_year" placeholder="YY" required /></div>
                                </div>
                            </div>
                            <div class="col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cvCode">
                                        CV CODE</label>
                                    <input type="password" class="form-control" id="cvCode" data-stripe="cvc" placeholder="CVC" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a>
                    </li>
                </ul>
                <br/>
                <input type="submit" name="submit" value="Pay" class="btn btn-success btn-lg btn-block">
            </div>
            <div class="col-md-2">

            </div>
          </form>
    </div>
</div>
<br>
@endsection --}}
