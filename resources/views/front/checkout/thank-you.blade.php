@section('title')
    Thank you
@endsection

    <html >
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <script src="https://bootstrapcreative.com/wp-bc/wp-content/themes/wp-bootstrap/codepen/bootstrapcreative.js?v=1"></script>

        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css'>

        <link href="{{asset('/front/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('/front/')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('/front/')}}/css/font-awesome.css" rel="stylesheet">
        <!--pop-up-box-->
        <link href="{{asset('/front/')}}/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <!--//pop-up-box-->
        <!-- price range -->
        <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/css/jquery-ui1.css">

        <style>
            .new_icon{
                align-items: center;
            }
        </style>
        <!-- fonts -->

    </head>

    <body>
    <div class="jumbotron text-xs-center">
        <div class="speioffer-agile">
            <a href="">
                <img style="height: 200px; width: 150px; border-radius: 100%;" src="{{asset('/front/')}}/images/habib.jpg" alt="">
            </a>

        <h1 class="display-3">Thank You!</h1>
        <h2>Now Your Order Completed </h2>
        <hr>
        <p>
            Having trouble? <a href="{{url('/contact')}}">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="{{url('/')}}" role="button">Continue to homepage</a>
        </p>
            <hr>

            <div class="speioffer-agile footer-grids  w3l-socialmk ">
                <h3 >Follow Us on</h3>
                <div class="social " >
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
            </div>
    </div>



    </div>


    </body>
    </html>