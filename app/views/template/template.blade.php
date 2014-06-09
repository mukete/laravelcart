<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
    laravelcart | 
    @section('title') 
    @show 
    </title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="{{URL::to('assets')}}/css/heroic-features.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{URL::to('/')}}">laravelcart</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{URL::to('/cart')}}">cart</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/cart')}}"> you have {{Cart::count()}} product(s) in cart</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        <p>
            <h3>laravelcart</h3>
        </p>
        <hr>
        <!-- /.row -->
        <!-- site content -->
        @yield('content')
        <!-- end site content -->
        <!-- /.row -->

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>copyright &copy; laravelcart {{date('Y')}} </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <!-- <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script> -->

</body>

</html>
