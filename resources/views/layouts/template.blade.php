<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="construction html5 template">
    <link href="assets/images/favicon/favicon.ico" rel="icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts
    ============================================= -->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CUbuntu:300,300i,400,400i,500,500i,700,700i'
        rel='stylesheet' type='text/css'>

    <!-- Stylesheets
    ============================================= -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/jquery-confirm.min.css" rel="stylesheet">
    <style>
        .carousel-item>img {
            width: 100%;
        }

        .carousel-caption {
            font-size: 40px;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->


    <title>Luxary Parts Car</title>
</head>

<body>

    <div id="wrapper" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5">
                            <ul class="list-inline top-contact">
                                <li><span>Phone :</span> +213 553 65 46 52</li>
                                <li><span>Email :</span> contact@luxaryParts.com</li>
                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-7">
                            <ul class="list-inline pull-right top-links">
                                @guest
                                <li style="cursor:pointer">
                                    <a data-toggle="modal" data-target=".login-modal-lg">Connexion</a>
                                </li>
                                @else
                                <li>
                                    <a href="admin">Administration</a>
                                    /
                                    <a href="{{ route('logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Deconexion</a>
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                                @endguest
                            </ul>
                        </div>

                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
            <!-- .top-bar end -->
            <nav id="primary-menu" class="navbar navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#header-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="/">
                            <img src="assets/images/logo/logo-light.png" alt="Autoshop">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-right" id="header-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">

                            <li>
                                <a href="/">Accueil</a>
                            </li>

                            <li>
                                <a href="commander">Commander</a>
                            </li>

                            <li>
                                <a href="marque">Marque</a>
                            </li>

                            <li>
                                <a href="apropos">A Propos</a>
                            </li>

                            <li>
                                <a href="contact">Contact</a>
                            </li>

                        </ul>


                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>

        @yield('content')

        @extends('layouts.dialogue')

        <footer id="footer" class="footer footer-2">
            <div class="footer-info">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel-info">
                                <div class="info-icon">
                                    <i class="icon icon-Truck"></i>
                                </div>
                                <div class="info-content">
                                    <h4>DISPONIBILITE DE PIECES</h4>
                                    <p>La disponibilité de tout pieces sur le marché</p>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel-info">
                                <div class="info-icon">
                                    <i class="icon icon-Dollars"></i>
                                </div>
                                <div class="info-content">
                                    <h4>PRIX ​​ÉQUITABLES</h4>
                                    <p>Des pieces a prix equitables et raisonable</p>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel-info">
                                <div class="info-icon">
                                    <i class="icon icon-Shield"></i>
                                </div>
                                <div class="info-content">
                                    <h4>ACHAT SÉCURISÉ</h4>
                                    <p>Passer votre commande on toute securité</p>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel-info">
                                <div class="info-icon">
                                    <i class="icon icon-Headset"></i>
                                </div>
                                <div class="info-content">
                                    <h4>SERVICE CLIENT</h4>
                                    <p>Service client disponible a tout moment pour votre demande</p>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->
                    </div>
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-info end -->

            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 footer-widget-about">
                            <div class="footer-widget-title">
                                <h5>À propos de nous</h5>
                            </div>
                            <div class="footer-widget-content">
                                <p>Luxary Auto Shop Algeria, Est une societé d'importation de toute pieces disponible sur le marché mondial en algerie.</p>
                                <div class="footer-social">
                                    <a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-4 end -->

                        <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
                            <div class="footer-widget-title">
                                <h5>My Account</h5>
                            </div>
                            <div class="footer-widget-content">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">My Account</a>
                                    </li>
                                    <li>
                                        <a href="#">Order History</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish List</a>
                                    </li>
                                    <li>
                                        <a href="#">Newsletter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->

                        <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
                            <div class="footer-widget-title">
                                <h5>Information</h5>
                            </div>
                            <div class="footer-widget-content">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Delivery Information</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->

                        <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
                            <div class="footer-widget-title">
                                <h5>Customer Service</h5>
                            </div>
                            <div class="footer-widget-content">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Returns</a>
                                    </li>
                                    <li>
                                        <a href="#">Site Map</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->

                        <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
                            <div class="footer-widget-title">
                                <h5>Extras</h5>
                            </div>
                            <div class="footer-widget-content">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Brands</a>
                                    </li>
                                    <li>
                                        <a href="#">Gift Vouchers</a>
                                    </li>
                                    <li>
                                        <a href="#">Affiliates</a>
                                    </li>
                                    <li>
                                        <a href="#">Specials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->
                    </div>
                </div>
                <!-- .container end -->
            </div>

            <div class="footer-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="powered">
                                <p>Car Shop &copy; All Rights Reserved.
                                </p>
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms of Use</a>
                                    </li>
                                    <li>
                                        <a href="#">Stores</a>
                                    </li>
                                    <li>
                                        <a href="about">About Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="payment-methods text-right">
                                <ul class="list-inline mb-0">
                                    <li><img src="assets/images/footer/visa.png" alt="payment"></li>
                                    <li><img src="assets/images/footer/mastercard.png" alt="payment"></li>
                                    <li><img src="assets/images/footer/paypal.png" alt="payment"></li>
                                    <li><img src="assets/images/footer/ccp.png" alt="payment"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-copyright end -->
        </footer>
    </div>

    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/jquery-confirm.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>


</body>

</html>