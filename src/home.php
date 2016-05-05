<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>meltmedia | Digital Interactive Superheroes</title>

<!-- favicons -->
<link rel="icon" type="image/png" href="/img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/img/favicon-16x16.png" sizes="16x16" />

<!-- meta tags -->
<meta name="description" content="meltmedia - Heroic websites and apps for all viewports.">
<meta property="og:site_name" content="meltmedia"/>
<meta property="og:title" content="meltmedia | Digital Interactive Superheroes"/>
<meta property="og:url" content="http://www.meltmedia.com/"/>
<meta property="og:type" content="website"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- fonts -->
<script src="https://use.typekit.net/zwq2soy.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<!-- script files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.4.0.min.js"></script>
<script type="text/javascript" src="/js/form.js"></script>

<script type="text/javascript" src="/js/parallax.min.js"></script>
<script type="text/javascript" src="/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyARZ0tMvLnmZBse91jiGtamyCOy908WTGE"></script>
<script type="text/javascript" src="/js/gmaps.js"></script>

<script type="text/javascript" src="/js/TweenMax.min.js"></script>
<script type="text/javascript" src="/js/ScrollMagic.min.js"></script>
<script type="text/javascript" src="/js/animation.gsap.min.js"></script>
<script type="text/javascript" src="/js/debug.addIndicators.min.js"></script>

<!-- stylesheets -->
<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/desktop.css" />
</head>

<body id="index">
	<div id="page">
		<div class="header-scroll">
			<nav>
				<a class="logo-scroll" href="/"></a>
				<input class="menu-btn-scroll" type="checkbox" id="menu-btn-scroll" />
				<label class="menu-icon-scroll" for="menu-btn-scroll"><span class="navicon-scroll"></span></label>
				<ul class="pages-scroll">
                    	<li><a href="/">Home</a></li>
						<li><a href="/work">Work</a></li>
						<li><a href="/culture">Culture</a></li>
						<li><a href="/labs">Labs</a></li>
						<li><a href="/thoughts">Thoughts</a></li>
						<li><a href="/contact">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="header">
			<nav>
				<a class="logo" href="/"></a>
				<input class="menu-btn" type="checkbox" id="menu-btn" />
				<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
				<ul class="pages">
					<li><a href="/">Home</a></li>
					<li><a href="/work">Work</a></li>
					<li><a href="/culture">Culture</a></li>
					<li><a href="/labs">Labs</a></li>
					<li><a href="/thoughts">Thoughts</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</nav>
		</div> <!-- end header -->
		
		<div id="hero">
			<div class="parallax" id="hero-parallax" data-parallax="scroll" data-image-src="/img/hero_bg_new.png" data-natural-width="1280" data-natural-height="846"></div>
			<div class="overlay"></div>
			<div id="hero-content">
				<h1>Heroic websites and apps <b>for all viewports.</b></h1>
				<p>We’re meltmedia and we’re on a mission. Quite simply, it’s to make our clients’ lives easier. We create an environment where business, technology, and design experts join forces to deliver innovative and sustainable digital solutions. And we have plenty of geeky fun along the way.</p>
				<button type="button" class="button">See Our Work</button>
			</div>
			<div id="hero-image">
				<img id="ipad" src="/img/ipad.png" alt="devices" />
				<img id="iphone" src="/img/iphone.png" alt="devices" />
			</div>
		</div> <!-- end hero -->
		
		<section class="what-we-do">
			<div class="content">
				<h1>What We <b>Do.</b></h1>
				<p> We create experiences that transform business for your brand and your users across all devices for the digital economy.</p>
				<div id="trigger1" class="spacer"></div>
				<div id="icons">
					<img class="icon" id="first" src="/img/one.png" />
					<img class="icon" id="second" src="/img/two.png" />
					<img class="icon" src="/img/three.png" />
					<img class="icon" src="/img/four.png" />
					<img class="icon" src="/img/five.png" />
				</div>
				<div id="trigger2" class="spacer"></div>
			</div>
		</section><!-- end section -->
		
		<section class="call">
			<div class="parallax" id="call-parallax" data-parallax="scroll" data-image-src="/img/call_bg.png" data-natural-width="1280" data-natural-height="284"></div>
			<div class="overlay"></div>
			<div class="content">
				<h1>Call for <b>Superheroes</b></h1>
				<button type="button" class="button">See Our Openings</button>
			</div>
		</section> <!-- end section -->
		
		<section class="video">
			<div class="embed">
				<iframe src="https://player.vimeo.com/video/94892527?title=0&byline=0" width="1280" height="720" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        	</div>
		</section>
		
		<section class="location">
			<div id="map"></div>
			<div id="map-mobile"></div>
			<div class="overlay"></div>
			<div id="info">
				<h1>Get in <b>touch</b></h1>
				<p id="title">Address</p>
				<p>1255 W. Rio Salado Pkwy</p>
				<p>Suite 209</p>
				<p>Tempe, AZ 85281</p>
				<p id="title">Phone</p>
				<p>(602) 340-9440</p>
				<p id="title">Let's be friends</p>
				<div id="social">
					<a href="https://www.facebook.commediausa/" id="fb" target="_blank"></a>
					<a href="https://twitter.commedia" id="twitter" target="_blank"></a>
					<a href="https://www.linkedin.com/company/118686" id="linkedin" target="_blank"></a>
					<a href="https://www.instagram.commedia/" id="insta" target="_blank"></a>
				</div>
			</div>
		</section>
		
		<section class="contact">
			<div class="content">
				<h1>Contact <b>Us</b></h1>
				<p>Fill out the form below and someone will get back to you faster than a speeding bullet.</p>
				<div id="form-messages"></div>
				<form id="ajax-contact" method="post" action="mailer.php">
					<input class="name" name="name" placeholder="What is your name?" required>
					<input class="email" name="email" type="email" placeholder="What is your email?" required>
					<input class="power" name="power" type="power" placeholder="What is your superpower?" required>
					<textarea class="message" name="message" placeholder="What is your mission?" required></textarea>
					<input id="submit" name="submit" type="submit" value="Send Message">
				</form>
			</div>
		</section>
		
		<section class="footer">
			<div class="content">
				<p>meltmedia © copyright 2016 - Interactive <b>Superheroes</b></p>
			</div>
		</section>
	</div> <!-- end page -->
	
	<script>
		// init controller
		var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter"}});
			
		var fadeTween = new TweenMax.to(".header-scroll", 0.5, {y: "0%"});				
		var scene2 = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 80})
						.setTween(fadeTween)
						.addTo(controller);		
	
		var tween = TweenMax.staggerFromTo(".icon", 1.2, {y: "-100%", opacity: 0}, {y: "0%", opacity: 1}, 0.25);
		var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 300})
						.setTween(tween)
						.addTo(controller);

	</script>
	
	<script>
	  $(document).ready(function(){
		  
	    $(".embed").fitVids();
	    
	    var map = new GMaps({
		  div: '#map',
		  lat: 33.430760,
		  lng: -111.956892,
		  zoom: 16,
		  disableDefaultUI: true
		});
		
		map.addMarker({
		  lat: 33.430760,
		  lng: -111.956892,
		  title: 'meltmedia'
		});
		
		url = GMaps.staticMapURL({
		  size: [520, 520],
		  lat: 33.433359,
		  lng: -111.957087,
		  scale: 1,
		  zoom: 16,
		    markers: [
		    {lat: 33.430760, lng: -111.956892}
		  ]
		}); 
		
		$('<img/>').attr('src', url)
		  .appendTo('#map-mobile');
		  
	  });
	</script>
	
</body>

</html>
