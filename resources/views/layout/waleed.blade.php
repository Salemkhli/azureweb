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
                        <li class="active"><a href="waleed.blade.php">Home</a></li>
                        <li class="dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="aboutus.html">About</a></li>
                                <li><a href="aboutus2.html">About 2</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="contact2.html">Contact us 2</a></li>
                                <li><a href="404.html">404 error</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>                    
                        <li class="dropdown"><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="blog.html">Blog Default</a></li>
                                <li><a href="blogtwo.html">Timeline Blog</a></li>
                                <li><a href="blogone.html">2 Columns + Right Sidebar</a></li>
                                <li><a href="blogthree.html">1 Column + Left Sidebar</a></li>
                                <li><a href="blogfour.html">Blog Masonary</a></li>
                                <li><a href="blogdetails.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="portfolio.html">Portfolio <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="portfolio.html">Portfolio Default</a></li>
                                <li><a href="portfoliofour.html">Isotope 3 Columns + Right Sidebar</a></li>
                                <li><a href="portfolioone.html">3 Columns + Right Sidebar</a></li>
                                <li><a href="portfoliotwo.html">3 Columns + Left Sidebar</a></li>
                                <li><a href="portfoliothree.html">2 Columns</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>
                        </li>                         
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
                                <i class="fa fa-thumbs-o-up fa-2x"></i>
                            </div>
                            <h2>Incredibly Responsive</h2>
                            <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine.</p>
                        </div>
                    </div>
                    <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-heart-o"></i>
                            </div>
                            <h2>Incredibly Responsive</h2>
                            <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine.</p>
                        </div>
                    </div>
                    <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-star-o"></i>
                            </div>
                            <h2>Incredibly Responsive</h2>
                            <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine.</p>
                        </div>
                    </div>
                    <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="1200ms">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-comments-o"></i>
                            </div>
                            <h2>Incredibly Responsive</h2>
                            <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine.</p>
                        </div>
                    </div>                        
                </div>
			</div>
        </div><!--/#feature-container-->

    <section id="action" class="responsive"></section>
    <!--/#action-->




    <footer id="footer">
        <div class="container">
            <h2>Send a message</h2>
            <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                 <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                 <div class="form-group">
					<input type="submit" name="submit" class="btn btn-submit" value="Submit">
                 </div>
            </form>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/lightbox.min.js"></script>
    <script type="text/javascript" src="/js/wow.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
