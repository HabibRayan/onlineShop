@extends('front.master')
@section('title')
    payment info
    @endsection
@section('content')
    <div class="banner1">
        <div class="container">
            <p><a href="">Home</a> / <span>Cart</span></p>
        </div>
    </div>
    </br>
    <!--banner-->
    <!--content-->
    <div class="content">
        <div class="new-arrivals-w3agile">
            <div class="container">
                @if($message = Session::get('message'))
                    <div class="alert alert-info">
                        {{ $message }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="content">
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h4 style="color: #1725ff">You have to give us product payment information to complete your valuable order.</h4>
                </br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel-body">
                            <form action="{{ url('/new-order') }}" method="POST">
                                {{ csrf_field() }}
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Cash On Delivery</th>
                                        <td><input type="radio" name="payment_type" value="Cash On Delivery"></td>
                                    </tr>
                                    <tr>
                                        <th>BKash</th>
                                        <td><input type="radio" name="payment_type" value="Bkash"></td>
                                    </tr>
                                    <tr>
                                        <th>Paypal</th>
                                        <td><input type="radio" name="payment_type" value="Paypal"></td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td><input type="submit" class="btn btn-info" name="btn" value="Confirm Order"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--new-arrivals-->
    </div>
@endsection