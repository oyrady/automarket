<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Automarket - Home</title>
	<meta name="description" content="Automarket">

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/uniform.default.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="js/vendor/jquery-1.8.2.min.js"></script>
	<script src="js/vendor/selectivizr.js"></script>
	<script src="js/vendor/PIE.js"></script>
	<script src="js/plugins/jquery.placeholder.min.js"></script>
	<script src="js/plugins/jquery.uniform.min.js"></script>
	<script src="js/plugins/jquery.flexslider-min.js"></script>
	<script src="js/plugins/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="js/plugins/jquery.prettyPhoto.js"></script>
	<script src="js/plugins/jquery.countdown.js"></script>
	
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<style>
	.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:4rem}.alert-dismissible .close{position:absolute;top:0;right:0;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#004085;background-color:#cce5ff;border-color:#b8daff}.alert-primary hr{border-top-color:#9fcdff}.alert-primary .alert-link{color:#002752}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb}.alert-success hr{border-top-color:#b1dfbb}.alert-success .alert-link{color:#0b2e13}.alert-info{color:#0c5460;background-color:#d1ecf1;border-color:#bee5eb}.alert-info hr{border-top-color:#abdde5}.alert-info .alert-link{color:#062c33}.alert-warning{color:#856404;background-color:#fff3cd;border-color:#ffeeba}.alert-warning hr{border-top-color:#ffe8a1}.alert-warning .alert-link{color:#533f03}.alert-danger{color:#721c24;background-color:#f8d7da;border-color:#f5c6cb}.alert-danger hr{border-top-color:#f1b0b7}.alert-danger .alert-link{color:#491217}.alert-light{color:#818182;background-color:#fefefe;border-color:#fdfdfe}.alert-light hr{border-top-color:#ececf6}.alert-light .alert-link{color:#686868}.alert-dark{color:#1b1e21;background-color:#d6d8d9;border-color:#c6c8ca}.alert-dark hr{border-top-color:#b9bbbe}.alert-dark .alert-link{color:#040505}
	</style>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<header>
	<div class="content-holder">
		<div class="layer-one">
			<div class="page-titles">
				<h1><a href="index.php">Automarket</a></h1>
				<p class="sub-title">This is a title</p>
			</div>
				
			<div class="dealer-login">
				<a href="dealer-details.html" class="dealer-name">Dealer Name</a>
				<a href="#" class="sign-out">Sign Out</a>
			</div>
				
			<div class="header-buttons">
				<a href="add-vehicle.php" class="add-an-offer rounded-link-box"><span class="box-content"><strong class="plus-sign">+</strong>&nbsp;Add An Offer</span></a>
				<div class="pages-top rounded-link-box">
					<a href="#" class="box-content">Pages</a>
					<ul>
						
                        <li><a href="index.php">Home page</a></li>
                        
                        <li><a href="add-vehicle.html">Add an offer</a></li>
                        
                        <li><a href="log-in.html">Log in page</a></li>
                        
                        <li><a href="car-list.php">Car list</a>
							<ul>
								<li><a href="car-details.html">Car details</a><li>														
							</ul>
						</li>
						
                        <li><a href="blog-overview.html">Blog</a>
							<ul>
								<li><a href="blog-post.html">Blog post</a><li>														
							</ul>
						</li>
						<li><a href="dealer-list.html">Dealer list</a>
                        <ul>
								<li><a href="dealer-details.html">Dealer details</a><li>														
							</ul>
						</li>
                        
						<li><a href="insurance.html">Insurance</a></li>
						
                        <li><a href="under-construction.html">Under construction</a></li>
                        
                        <li><a href="contact-us.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</div><!--.layer-one-->
			
		<div class="layer-two">
			<nav>
				<ul>
					<li class="nav-cars current-item"><a href="car-list.php">Cars</a></li>
					<li class="nav-bike"><a href="#">Bikes</a></li>
					<li class="nav-truck"><a href="#">Trucks</a></li>
					<li class="nav-parts"><a href="#">Parts</a></li>
				</ul>
			</nav>
				
			<form id="header-search" action="http://clapat.ro/themes/automarket/orange/car-list.php" method="post">
            	<input type="text" name="quick_search" onfocus="if(this.value == 'Quick Search, Ex: Mercedes-Benz E220') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Quick Search, Ex: Mercedes-Benz E220'; }" value="Quick Search, Ex: Mercedes-Benz E220" class="quick-search" >
				<select name="type-option">
					<option value="cars" selected="selected">Cars</option>
					<option value="bikes">Bikes</option>
					<option value="trucks">Trucks</option>
					<option value="Parts">Parts</option>
				</select>
				<div class="search-submit">
					<input type="submit" value="Search"/>
				</div>
			</form>
		</div><!--.layer-two-->
	</div>
</header>