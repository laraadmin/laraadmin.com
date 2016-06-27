<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>LaraAdmin - Open source CRM with CRUD Generation and Workflows</title>
	<meta name="description" content="LaraAdmin is a Open source CRM for quick-start Admin based applications with features like Advanced CRUD Generation, Schema Manager and Workflows." />
	<meta name="keywords" content="open source crm, laravel admin, crud generation, laravel crm" />
	<meta name="author" content="Ganesh Bhosale, Dwij IT Solutions" />
	<!--
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicon/manifest.json">
	<link rel="shortcut icon" href="img/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#663fb5">
	<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="img/favicon/browserconfig.xml">
	-->
	<meta name="theme-color" content="#663fb5">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('css/landio.css') }}">
	<link rel="stylesheet" href="{{ asset('js/plugins/fancybox/jquery.fancybox.css') }}">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=505366739518931";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!-- Navigation
	================================================== -->

	<nav class="navbar @yield("nav") ">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				<span class="logo"><i class="fa fa-rocket"></i> LaraAdmin</span>
				<span class="sr-only">LaraAdmin</span>
			</a>
			<a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">&#9776;</a>
			<a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
				<span class="icon-user"></span>
			</a>
			<div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
				<ul class="nav navbar-nav pull-xs-right">
                    <li class="nav-item nav-item-toggable">
						<a class="nav-link" href="{{ url('/') }}">Home</a>
					</li>
					<li class="navbar-divider hidden-sm-down"></li>
					<li class="nav-item nav-item-toggable">
						<a class="nav-link" href="{{ url('/documentation') }}">Documentation</a>
					</li>
					<li class="navbar-divider hidden-sm-down"></li>
					<li class="nav-item nav-item-toggable"><a class="nav-link" href="{{ url('/devdoc-features') }}">Features</a></li>
					<li class="navbar-divider hidden-sm-down"></li>
					<li class="nav-item nav-item-toggable">
						<a class="nav-link" href="https://github.com/dwijitsolutions/laraadmin" target="_blank">GitHub</a>
					</li>
                    <li class="navbar-divider hidden-sm-down" style="margin-right:20px;"></li>
					<!--
					<li class="nav-item nav-item-toggable hidden-md-up">
						<form class="navbar-form">
							<input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
						</form>
					</li>
					<li class="navbar-divider hidden-sm-down"></li>
					<li class="nav-item dropdown nav-dropdown-search hidden-sm-down">
						<a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="icon-search"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenu1">
							<form class="navbar-form">
								<input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
							</form>
						</div>
					</li>-->
                    {{--
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                    --}}
					<li class="nav-item dropdown hidden-sm-down textselect-off">
						<a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="http://www.gravatar.com/avatar/b77d26180661c54e9aa85fec9e687aa0.jpg" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
							<div class="media">
								<div class="media-left">
									<img src="http://www.gravatar.com/avatar/b77d26180661c54e9aa85fec9e687aa0.jpg" height="60" width="60" alt="Avatar" class="img-circle">
								</div>
								<div class="media-body media-middle">
									<h5 class="media-heading">Ganesh Bhosale</h5>
									<h6><a class="cl-gray" href="http://dwijitsolutions.com">Dwij IT Solutions</a></h6>
                                    <h6><a class="cl-gray" href="mailto:ganesh@dwij.in">ganesh@dwij.in</a></h6>
                                    <h6><a class="cl-gray" href="tel:+917350558900">+91 7350558900</a></h6>
								</div>
							</div>
							<div class="findme">Find me on:</div>
							<div class="social-links">
								<a target="_blank" href="https://github.com/gdbhosale" class="github"><i class="fa fa-github"></i></a>
								<a target="_blank" href="http://ganeshbhosale.com" class="personel"><i class="fa fa-globe"></i></a>
								<a target="_blank" href="https://plus.google.com/+GaneshBhosale" class="google"><i class="fa fa-google"></i></a>
                                <a target="_blank" href="https://www.facebook.com/gbhosale" class="facebook"><i class="fa fa-facebook"></i></a>
								<a target="_blank" href="https://twitter.com/gdbhosale" class="twitter"><i class="fa fa-twitter"></i></a>
								<a target="_blank" href="https://www.linkedin.com/in/gdbhosale" class="linkedin"><i class="fa fa-linkedin"></i></a>
								<a target="_blank" href="http://instagram.com/gdbhosale" class="instagram"><i class="fa fa-instagram"></i></a>
								<a target="_blank" href="http://dwijitsolution.com" class="company"><i class="fa fa-building"></i></a>
								<a target="_blank" href="http://dwij.co.in" class="blog"><i class="fa fa-comments"></i></a>
							</div>
							<!--<a href="#" class="btn-circle has-gradient pull-xs-right"><span class="sr-only">Edit</span><span class="icon-edit"></span></a>-->
						</div>
					</li>
				</ul>
			</div>
			<div id="collapsingMobileUser" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUser">
				<div class="media m-t-1">
					<div class="media-left">
						<img src="img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
					</div>
					<div class="media-body media-middle">
						<h5 class="media-heading">Joel Fisher</h5>
						<h6>hey@joelfisher.com</h6>
					</div>
				</div>
				<a href="#" class="dropdown-item text-uppercase">View posts</a>
				<a href="#" class="dropdown-item text-uppercase">Manage groups</a>
				<a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
				<a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
				<a href="#" class="btn-circle has-gradient pull-xs-right m-b-1">
					<span class="sr-only">Edit</span>
					<span class="icon-edit"></span>
				</a>
			</div>
		</div>
	</nav>
    
    @yield('content')

<section class="section-intro bg-faded" style="padding:30px 0px;">
	<div class="social-links">
		<a target="_blank" href="https://github.com/dwijitsolutions/laraadmin" class="github"><i class="fa fa-github"></i></a>
		<a target="_blank" href="https://plus.google.com/108907847575938465850" class="google"><i class="fa fa-google"></i></a>
		<a target="_blank" href="https://www.facebook.com/laraadmin" class="facebook"><i class="fa fa-facebook"></i></a>
		<a target="_blank" href="https://twitter.com/laraadmn" class="twitter"><i class="fa fa-twitter"></i></a>
		<a target="_blank" href="https://www.linkedin.com/in/gdbhosale" class="linkedin"><i class="fa fa-linkedin"></i></a>
		<a target="_blank" href="https://www.linkedin.com/company/dwij-it-solutions" class="linkedin"><i class="fa fa-linkedin"></i></a>
		<a target="_blank" href="http://instagram.com/gdbhosale" class="instagram"><i class="fa fa-instagram"></i></a>
	</div>
	
	<div class="text-center">
		<div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>&nbsp;&nbsp;
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://laraadmin.com" data-text="LaraAdmin - Laravel based open-source CRUD Generator" data-via="laraadmn">Tweet</a>&nbsp;&nbsp;
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/109008605229791628934" data-rel="publisher"></div>&nbsp;&nbsp;
		<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="50"></div>
	</div>
</section>

	<footer class="section-footer bg-inverse" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-5">
					<div class="media">
						<div class="media-left">
							<span class="media-object  display-1"></span>
						</div>
						<small class="media-body media-bottom">&copy; <a href="http://dwijitsolutions.com">Dwij IT Solutions</a> 2016</small>
					</div>
				</div>
				<div class="col-md-6 col-lg-7">
					<ul class="nav nav-inline" style="padding:0px;">
						<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/documentation') }}">Documentation</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/devdoc-features') }}">Features</a></li>
						<li class="nav-item"><a class="nav-link" href="https://github.com/dwijitsolutions/laraadmin" target="_blank">GitHub</a></li>
						<li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap/util.js"></script>
	<script src="js/bootstrap/carousel.js"></script>
	<script src="js/bootstrap/collapse.js"></script>
	<script src="js/bootstrap/dropdown.js"></script>
	<script src="js/bootstrap/modal.js"></script>
	<script src="js/plugins/jquery.waypoints.js"></script>
	<script src="js/plugins/jquery.placeholder.js"></script>
	<script src="js/plugins/fancybox/jquery.fancybox.pack.js"></script>
		
	<script src="js/bootstrap/util.js"></script>
	<script src="js/landio.js"></script>
@stack('scripts')
</body>
</html>
