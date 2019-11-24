<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>National | Alliance | Movement</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

            <!-- Facebook and Twitter integration -->
            <meta property="og:title" content=""/>
            <meta property="og:image" content=""/>
            <meta property="og:url" content=""/>
            <meta property="og:site_name" content=""/>
            <meta property="og:description" content=""/>
            <meta name="twitter:title" content="" />
            <meta name="twitter:image" content="" />
            <meta name="twitter:url" content="" />
            <meta name="twitter:card" content="" />

            <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

            <!-- Animate.css -->
            <!--<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}c">-->
            <!-- Icomoon Icon Fonts-->
            <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
            <!-- Bootstrap  -->
            <link rel="stylesheet" href="{{ URL::asset('style.css') }}">

            <!-- Owl Carousel  -->
            <link rel="stylesheet" href="{{ URL::asset('css/versions.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">

            <!-- Theme style  -->
            <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">



            <!-- Modernizr JS -->
            <!--<script src="{{ URL::asset('js/modernizr-2.6.2.min.js') }}"></script>-->
            <!-- FOR IE9 below -->
            <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
            <![endif]-->

    

<body class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
            <div id="loader"></div>  
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div class="topbar text-center hidden-xs">
        <p>This site uses cookies. By continuing to browse NAM, you are agreeing to use our site cookies. <a href="#">Find out more here ></a></p>
    </div>

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-scroll-nav="0" href="#main-banner" class="active">Home</a></li>
                        <li><a data-scroll-nav="1" href="#about">About Us</a></li>
                        <li><a data-scroll-nav="2" href="#issues">Issues</a></li>
                        <li><a data-scroll-nav="3" href="#event">Event</a></li>
                        <li><a data-scroll-nav="4" href="#gallery">Gallery</a></li>
                        <li><a data-scroll-nav="5" href="#media">Multimedia</a></li>
                        <li><a data-scroll-nav="6" href="#blog">Blog</a></li>
                        <li><a data-scroll-nav="7" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

            

            
            
            @yield('content')


     
          <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                 <p>
                      &copy; 2017-<?php echo date("Y"); ?> All Rights Reserved.
                  </p>
                </div>

                <div class="footer-right">
                    <form method="get" action="#">
                        <input placeholder="Subscribe our newsletter.." name="search">
                        <i class="fa fa-envelope-o"></i>
                    </form>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

        <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

        <!-- jQuery -->
        <script src="js/all.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.mobile.customized.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Waypoints -->
        <script src="js/camera.min.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/scrollIt.min.js"></script>
        <!-- Carousel -->
        <script src="js/custom.js"></script>
        <!-- Main -->
        <script src="js/jquery.vide.js"></script>

    </body>
</html>