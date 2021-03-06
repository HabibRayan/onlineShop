@extends('front.master')
@section('title')
   product-details
@endsection




@section('content')

<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="{{url('/')}}">Home</a>
                    <i>|</i>
                </li>
                <li>Single Page</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- Single Page -->


<div class="banner-bootom-w3-agileits">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Single Page
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="col-md-5 single-right-left ">
            <div class=" images_3_of_2">
                <div class="flexslider">

                    <ul class="slides">
                        <li data-thumb="">
                            <div class="thumb-image">
                                <img height="400" width="350" src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        </li>
                        <li data-thumb="">
                            <div class="thumb-image">
                                <img height="400" width="350" src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        </li>
                        <li data-thumb="">
                            <div class="thumb-image">
                                <img height="400" width="350" src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-md-7 single-right-left simpleCart_shelfItem">
            <h3>{{($product->product_name)}}</h3>
            <div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
            </div>
            <p>
                <span class="item_price">Tk.{{($product->product_price)}}</span>
                <del></del>
                <label>Free delivery</label>
            </p>
            <div class="single-infoagile">
                <ul>
                    <li>
                        Cash on Delivery Eligible.
                    </li>
                    <li>
                        Shipping Speed to Delivery.
                    </li>
                    <li>

                        <span class="item_price"></span>
                    </li>
                </ul>
            </div>
            <div class="product-single-w3l">

               <b>Product Info:</b>
                <?php echo $product->long_description;?>




            </div>
            <div class="occasion-cart">
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="#" method="post">
                        <fieldset>
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" />
                            <input type="hidden" name="business" value=" " />
                            <input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG" />
                            <input type="hidden" name="amount" value="950.00" />
                            <input type="hidden" name="discount_amount" value="1.00" />
                            <input type="hidden" name="currency_code" value="USD" />
                            <input type="hidden" name="return" value=" " />
                            <input type="hidden" name="cancel_return" value=" " />


                        </fieldset>
                    </form>


                    <form action="{{url('/add-to-cart')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="qty" value="1" class="button" min="1"/>
                            <input type="hidden" name="product_id" value="{{$product->id}}" class="button" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" value="Add To Cart" class="button" >

                        </div>
                    </form>

                </div>

            </div>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>


<div class="featured-section" id="projects">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Add More
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">

            <ul id="flexiselDemo1">
                @foreach($relatedProducts as $relatedProduct)
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="#">
                                <img src="{{asset($relatedProduct->product_image)}}" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="#">{{($relatedProduct->product_name)}}</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>Tk.{{($relatedProduct->product_price)}}</h6>

                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="{{url('/add-to-cart')}}" method="post">
                                    @csrf
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Aashirvaad, 5g" />
                                        <input type="hidden" name="amount" value="220.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                    </fieldset>
                                </form>
                                <div>
                                    <form action="{{url('/add-to-cart')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" name="qty" value="1" class="button" min="1"/>
                                            <input type="hidden" name="product_id" value="{{$product->id}}" class="button" />
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="btn" value="Add To Cart" class="button" >

                                        </div>
                                    </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>



    @endsection