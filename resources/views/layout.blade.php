
<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portfolio &mdash; DevIndex</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="Portfolio" />
	<meta name="author" content="kka.saito.devnull@gmail.com" />

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


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.html">Portfolio</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
     				<li class="{{ isset($home) ? 'fh5co-active' : ''}}"><a href="{{ route('home') }} ">Home</a></li>
					<li class="{{ isset($service) ? 'fh5co-active' : ''}}"><a href="{{ route('service') }} ">Service</a></li>
					<li class="{{ isset($blog) ? 'fh5co-active' : ''}}"><a href="{{ route('blog') }}">Blog</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2016 Blend Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
				<ul>
					<li><a href="https://twitter.com/mizinko_note" target="_blank"><i class="icon-twitter2"></i></a></li>
					<li><a href="https://github.com/saito-r" target="_blank"><i class="icon-github"></i></a></li>
				</ul>
			</div>

        </aside>
        <!-- ページコンテンツ出力 -->
        @yield('pageContents');
	</div>

	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>


	<!-- MAIN JS -->
	<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>
