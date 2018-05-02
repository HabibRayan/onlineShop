<div class="footer-top">
    <div class="container-fluid">
        <div class="col-xs-8 agile-leftmk">
            <h2>Get your Groceries delivered from local stores</h2>
            <p>Free Delivery on your first order!</p>
            <form action="#" method="post">
                <input type="email" placeholder="E-mail" name="email" required="">
                <input type="submit" value="Subscribe">
            </form>
            <div class="newsform-w3l">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
            </div>
        </div>
        <div class="col-xs-4 w3l-rightmk">
            <img src="{{asset('/front/')}}/images/tab3.png" alt=" ">
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //newsletter -->
<!-- footer -->
<footer>
    <div class="container">
        <!-- footer first section -->
        <p class="footer-main">
            <span>"Grocery Shoppy"</span> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
            magni dolores eos qui ratione voluptatem sequi nesciunt.Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
            beatae vitae dicta sunt explicabo.</p>
        <!-- //footer first section -->
        <!-- footer second section -->
        <div class="w3l-grids-footer">
            <div class="col-xs-4 offer-footer">
                <div class="col-xs-4 icon-fot">
                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                </div>
                <div class="col-xs-8 text-form-footer">
                    <h3>Track Your Order</h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-4 offer-footer">
                <div class="col-xs-4 icon-fot">
                    <span class="fa fa-refresh" aria-hidden="true"></span>
                </div>
                <div class="col-xs-8 text-form-footer">
                    <h3>Free & Easy Returns</h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-4 offer-footer">
                <div class="col-xs-4 icon-fot">
                    <span class="fa fa-times" aria-hidden="true"></span>
                </div>
                <div class="col-xs-8 text-form-footer">
                    <h3>Online cancellation </h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //footer second section -->
        <!-- footer third section -->
        <div class="footer-info w3-agileits-info">
            <!-- footer categories -->
            <div class="col-sm-5 address-right">
                <div class="col-xs-6 footer-grids">
                    <h3>Categories</h3>

                        <ul class="">
                            @foreach($publishedCategories as $publishedCategory)
                                <li>
                                    <a href="{{url('/product-category/'.$publishedCategory->id)}}">{{ $publishedCategory->category_name }}</a>
                                </li>

                            @endforeach
                        </ul>
                </div>

                <div class="clearfix"></div>
            </div>
            <!-- //footer categories -->
            <!-- quick links -->
            <div class="col-sm-5 address-right">
                <div class="col-xs-6 footer-grids">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{url('/about-us')}}">About Us</a>
                        </li>


                        <li>
                            <a href="{{url('/faqs')}}">Faqs</a>
                        </li>
                        <li>
                            <a href="{{url('/contact')}}">Contact Us</a>
                        </li>

                    </ul>
                </div>
                <div class="col-xs-6 footer-grids">
                    <h3>Get in Touch</h3>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>Mirpur-1,Dhaka 1216</li>
                        <li>
                            <i class="fa fa-mobile"></i>+8801914766971 </li>
                        <li>
                            <i class="fa fa-phone"></i>+222 11 4444 </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <a href="mailto:example@mail.com">habibrayan71@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //quick links -->
            <!-- social icons -->
            <div class="col-sm-2 footer-grids  w3l-socialmk">
                <h3>Follow Us on</h3>
                <div class="social">
                    <ul>
                        <li>
                            <a class="icon fb" href="https://www.facebook.com/habib.hm.165">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a class="icon tw" href="https://twitter.com/HMHabib14">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="icon gp" href="https://plus.google.com/u/3/">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="agileits_app-devices">
                    <h5>Download the App</h5>
                    <a href="#">
                        <img src="{{asset('/front/')}}/images/1.png" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('/front/')}}/images/2.png" alt="">
                    </a>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //social icons -->
            <div class="clearfix"></div>
        </div>
        <!-- //footer third section -->
        <!-- footer fourth section (text) -->
        <div class="agile-sometext">

            <!-- brands -->
            <div class="sub-some">
                <h5>Popular Brands</h5>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Aashirvaad</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Amul</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Bingo</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Boost</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Durex</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}"> Maggi</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Glucon-D</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Horlicks</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Head & Shoulders</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Dove</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Dettol</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Dabur</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Colgate</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Coca-Cola</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Closeup</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}"> Cinthol</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Cadbury</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Bru</a>
                    </li>

                </ul>
            </div>
            <!-- //brands -->
            <!-- payment -->
            <div class="sub-some child-momu">
                <h5>Payment Method</h5>
                <ul>
                    <li>
                        <img src="{{asset('/front/')}}/images/pay2.png" alt="">
                    </li>
                    <li>
                        <img src="{{asset('/front/')}}/images/pay5.png" alt="">
                    </li>
                    <li>
                        <img src="{{asset('/front/')}}/images/pay1.png" alt="">
                    </li>
                    <li>
                        <img src="{{asset('/front/')}}/images/pay4.png" alt="">
                    </li>
                    <li>
                        <img src="{{asset('/front/')}}/images/pay6.png" alt="">
                    </li>
                    <li>
                        <img src="{{asset('/front/')}}/images/pay3.png" alt="">
                    </li>
                    <li>
                        <img src="{{asset('/front/')}}/images/pay7.png" alt="">
                    </li>
                    <li>
                        <img src="{{asset('/front/')}}/images/pay8.png" alt="">
                    </li>
                    <li>
                        <img src="{{asset('/front/')}}/images/pay9.png" alt="">
                    </li>
                </ul>
            </div>
            <!-- //payment -->
        </div>
        <!-- //footer fourth section (text) -->
    </div>
</footer>
<!-- //footer -->
<!-- copyright -->
<div class="copy-right">
    <div class="container">
        <p>© 2017 Grocery Shoppy. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
</div>