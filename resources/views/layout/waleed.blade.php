<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('content')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head><!--/head-->

<body>
	<header id="header">      
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/">Home</a></li>
                        <li class="dropdown"><a href="/about">About us</a></li>
                        <li class="dropdown"><a href="/contact">Contact us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>let's convert your images</h1>

                        <!--name of the url trans.-->

                        <a href="/start" class="btn btn-common"> Convert Page </a>
                    </div>
                </div>
            </div>
        </div>1
    </section>
    <!--/#home-slider-->

    <div id="feature-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="feature-inner">
                        <div class="icon-wrapper">
                            <i class="fa fa-2x fa-cloud-upload"></i>
                        </div>
                        <h2>Convert in the cloud</h2>
                        <p>The image conversion happens in the cloud, so it will not drain any capacity from your own CPU</p>
                    </div>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="feature-inner">
                        <div class="icon-wrapper">
                            <i class="fa fa-2x fa-file-image-o"></i>
                        </div>
                        <h2>most image formats are supported</h2>
                        <p>JPG, GIF, JPEG, PNG and BMP are supported. So, feel free to convert them too with our tool.</p>
                    </div>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="feature-inner">
                        <div class="icon-wrapper">
                            <i class="fa fa-2x fa-apple"></i>
                        </div>
                        <h2>All platforms are supported</h2>
                        <p>The conversion app is browser-based and functions independently of your OS. If you use Mac, Windows or Linux, does not matter for our application.</p>
                    </div>
                </div>
                <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="feature-inner">
                        <div class="icon-wrapper">
                            <i class="fa fa-2x fa-thumbs-o-up"></i>
                        </div>
                        <h2>Whatever you want</h2>
                        <p>The conversion app is Designed to be able to deal with the huge number of images</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/#feature-container-->
    <section id="action" class="responsive"></section>
    <!--/#action-->




    <footer id="footer">
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/lightbox.min.js"></script>
    <script type="text/javascript" src="/js/wow.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
