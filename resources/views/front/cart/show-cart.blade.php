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

    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Cart Info</h3>

            <table class="table table-bordered">
                <tr>
                    <th>SL No</th>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
                @php($i=1)
                @php($sum=0)
               @foreach($cartProducts as $cartProduct)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$cartProduct->id}}</td>
                    <td>{{$cartProduct->name}}</td>
                    <td><img src="{{asset($cartProduct->options->image)}}" alt="" height="50" width="40"></td>
                    <td>TK.{{$cartProduct->price}}</td>
                    <td>
                        <form action="{{url('/update-cart-product')}}" method="post">
                            @csrf
                            <input type="number" name="qty" value="{{$cartProduct->qty}}">
                            <input type="hidden" name="rowId" value="{{$cartProduct->rowId}}">
                            <input type="submit" name="btn" value="Update">
                        </form>


                    </td>
                    <td>TK.{{$total=$cartProduct->price*$cartProduct->qty}}</td>
                    <td>
                        <a href="{{url('/delete-cartInfo/'.$cartProduct->rowId)}}" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure Delete This ?');" >
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
                   @php($sum=$sum+$total)
                   @endforeach
            </table>
            <table class="table table-bordered">
                <tr>
                    <th>Sub Total</th>
                    <td>BDT:{{$sum}}</td>
                </tr>
                <tr>
                    <th>Discount</th>
                    <td>BDT :{{$discount=0}}</td>
                </tr>
                <tr>
                    <th>Tax</th>
                    <td>BDT :{{$tax=0}}</td>
                </tr>
                <tr>
                    <th>Grand Total</th>
                    <td>BDT :{{$grandTotal =($sum-$discount)+$tax}}</td>
                    {{ Session::put('grand_total', $grandTotal) }}
                </tr>
            </table>
            <a href="{{url('/')}}" class="btn btn-success ">Continue Shopping</a>

            @if(Session::get('customerId') && Session::get('shippingId'))
                <a href="{{ url('/payment-info') }}" class="btn btn-success">Checkout</a>
            @elseif(Session::get('customerId'))
                <a href="{{ url('/shipping-info') }}" class="btn btn-success">Checkout</a>
            @else
                &&        <a href="{{ url('/checkout') }}" class="btn btn-success">Checkout</a>
            @endif

        </div>
    </div>

@endsection