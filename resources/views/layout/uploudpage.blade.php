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
                        <li class="dropdown"><a href="/about">About us</a></li>
                        <li class="dropdown"><a href="/contact">Contact us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="action" class="responsive"></section>

	 <div class="container">
		<div class="row">
			<section>
			<div class="wizard">
				@yield('uploadicon')


					<div class="tab-content">

						<div class="tab-pane active" role="tabpanel" id="step1">

						@yield('upload')
						</div>
						<div class="tab-pane " role="tabpanel" id="step2">
						@yield('format')
						</div>

						<div class="tab-pane" role="tabpanel" id="step3">

						@yield('progress')
						</div>




						<div class="tab-pane" role="tabpanel" id="complete">
                            @yield('download')

						</div>
						<div class="clearfix"></div>
					</div>
			  </div>
		</section>
	   </div>
	</div>



    <footer id="footer">

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
