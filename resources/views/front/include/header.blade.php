<div class="header-most-top">
    <p>Grocery Offer Zone Top Deals & Discounts</p>
</div>
<!-- //top-header -->
<!-- header-bot-->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <!-- header-bot-->
        <div class="col-md-4 logo_agile">
            <h1>
                <a href="index.html">
                    <span>G</span>rocery
                    <span>S</span>hoppy
                    <img src="{{asset('/front/')}}/images/logo2.png" alt=" ">
                </a>
            </h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-8 header">
            <!-- header lists -->
            <ul style="text-align: right">
                @if(Session::get('customerId'))
                    <li class="fa fa-pencil-square-o" aria-hidden="true">
                        <a href="#" onclick="event.preventDefault(); document.getElementById('customerLogoutForm').submit(); "><strong style="color:rgba(0,15,250,0.78)">Logout</strong></a>
                    </li>

                    <form action="{{ url('/customer-logout') }}" method="POST" id="customerLogoutForm">
                        {{ csrf_field() }}
                    </form>

                @else
                    <li class="fa fa-pencil-square-o" aria-hidden="true"><a href="{{url('/checkout')}}"><strong style="color:rgba(0,15,250,0.78) ">Sign In</strong></a></li>
                    <li class="fa fa-pencil-square-o" aria-hidden="true"><a href="{{url('/checkout')}}"> <strong style="color:rgba(0,15,250,0.78)">Sign Up</strong> </a></li>
                @endif
            </ul>
            <!-- //header lists -->
            <!-- search -->
            <div class="agileits_search">
                <form action="#" method="post">
                    <input name="Search" type="search" placeholder="How can we help you today?" required="">
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <span class="fa fa-search" aria-hidden="true"> </span>
                    </button>
                </form>
            </div>
            <!-- //search -->
            <!-- cart details -->
            <div class="header-right2">
                <div class="cart box_1">

                    <a href="{{ url('/show-cart') }}">
                        <h4> <div class="total">
                                TK. {{ Session::get('grand_total') }} ({{ Cart::count() }} items)</div>
                            <img width="30" height="30" src="{{ asset('/front/') }}/images/logo.png" alt="" />
                        </h4>
                    </a>
                    @if(Cart::count() == 0)
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    @endif
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //cart details -->
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- shop locator (popup) -->
<!-- Button trigger modal(shop-locator) -->

<!-- //shop locator (popup) -->
<!-- signin Model -->
<!-- Modal1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In </h3>
                    <p>
                        Sign In now, Let's start your Grocery Shopping. Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            Sign Up Now</a>
                    </p>
                    <form action="#" method="post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" placeholder="User Name" name="Name" required="">
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Password" name="password" required="">
                        </div>
                        <input type="submit" value="Sign In">
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->
<!-- //signin Model -->
<!-- signup Model -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign Up</h3>
                    <p>
                        Come join the Grocery Shoppy! Let's set up your Account.
                    </p>
                    <form action="#" method="post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" placeholder="Name" name="Name" required="">
                        </div>
                        <div class="styled-input">
                            <input type="email" placeholder="E-mail" name="Email" required="">
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Password" name="password" id="password1" required="">
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
                        </div>
                        <input type="submit" value="Sign Up">
                    </form>
                    <p>
                        <a href="#">By clicking register, I agree to your terms</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>

<!-- //Modal2 -->
<!-- //signup Model -->
<!-- //header-bot -->
<!-- navigation -->
<div class="ban-top">
    <div class="container">
        <div class="agileits-navi_search">
          <ul class="nav navbar-nav menu__list">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Category
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu multi-column columns-3">
                    <div class="agile_inner_drop_nav_info">

                            <ul class="multi-column-dropdown">
                                @foreach($publishedCategories as $publishedCategory)
                                <li>
                                    <a href="{{url('/product-category/'.$publishedCategory->id)}}">{{ $publishedCategory->category_name }}</a>
                                </li>

                                    @endforeach
                            </ul>

                    </div>
                </ul>
            </li>
          </ul>




            </form>
        </div>
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active">
                                <a class="nav-stylehead" href="{{url('/')}}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="nav-stylehead" href="{{url('/about-us')}}">About Us</a>
                            </li>

                            <li class="">
                                <a class="nav-stylehead" href="{{url('/faqs')}}">Faqs</a>
                            </li>
                            <li class="">
                                <a class="nav-stylehead" href="{{url('/contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>