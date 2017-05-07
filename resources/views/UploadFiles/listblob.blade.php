
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Big Converter</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/lightbox.css" rel="stylesheet">
    <link href="/css/main1.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
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


<ul>
   <a href="/start/type/uploadazure/imagetypeform/downloadzip" download><h2>Download All Files As Zip</h2></a>
    <br>
    @foreach($u=$return['blobs'] as $value)
        <p><a href="{{print_r($value['url'])}}" download>{{print_r(basename($value['url']))}}</a></p>
        <br>

        <br>
    @endforeach


</ul>



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
<script type="text/javascript" src="/js/main1.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>










