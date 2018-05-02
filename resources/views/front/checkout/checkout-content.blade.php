@extends('front.master')
@section('title')
    Show-cart
@endsection




@section('content')

    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{url('/')}}">home</a>/<span>Cart</span>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- Single Page -->

    <h2 style="color: rgba(255,33,119,0.78);text-align: center;" >{{ Session::get('message') }}</h2><br>
<div class="content">
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- tittle heading -->
            <h2 class="tittle-w3l">You have to login to complete your valuable order.If you are not registered then please register first  </h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel-body">
                        <h1 class="text-success text-center">Login Form</h1>
                        <hr/>
                        <form class="form-horizontal" action="{{url('/customer-login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-3">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control"/>
                                    {{ $errors->has('email') ? $errors->first('email') : ' ' }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control"/>
                                    {{ $errors->has('password') ? $errors->first('password') : ' ' }}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Login"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel-body">
                        <h1 class="text-success text-center">Registration Form</h1>
                        <hr/>
                        <form class="form-horizontal" action="{{ url('/new-customer') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-3">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="first_name" class="form-control"/>
                                    {{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="last_name" class="form-control"/>
                                    {{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control"/>
                                    {{ $errors->has('email') ? $errors->first('email') : ' ' }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control"/>
                                    {{ $errors->has('password') ? $errors->first('password') : ' ' }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Phone</label>
                                <div class="col-sm-9">
                                    <input type="number" name="phone_number" class="form-control"/>
                                    {{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Address</label>
                                <div class="col-sm-9">
                                    <textarea name="address" class="form-control" style="resize: vertical"></textarea>
                                    {{ $errors->has('address') ? $errors->first('address') : ' ' }}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Registration"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection