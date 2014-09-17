<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/cssnormalize/cssnormalize-min.css">
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/flexslider.css') }}
	

	<title>Inicio</title>
</head>
<body>
	<header>
		<div>
			 {{ HTML::image("images/global/logo.png", "Logo") }}
		</div>
		<div id="title">
			<h1>{{Setting::orderBy('id','DESC')->first()->site_name;}}</h1>
			<p>
				{{Setting::orderBy('id','DESC')->first()->slogan;}}
			</p>
		</div>
		<div>{{ HTML::image("images/global/logo_sec.png", "Logo") }}</div>
	</header>

	<nav>
		<ul>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 1</a></li>
		</ul>
	</nav>
	<section id="main">
		@yield('main')
	</section>
	<div id="links">
		<ul>
			<li><a href="#">link 1</a></li>
			<li><a href="#">link 1</a></li>
			<li><a href="#">link 1</a></li>
			<li><a href="#">link 1</a></li>
		</ul>
	</div>
	<footer>
		<div>
			<div class="subsection">
				<h2>{{Setting::orderBy('id','DESC')->first()->subsection1_title;}}</h2>
				{{ HTML::image("images/global/subsection1.jpg", "Text") }}
				<p>
					{{Setting::orderBy('id','DESC')->first()->subsection1_desc;}}
				</p>
			</div>
			<div class="subsection">
				<h2>{{Setting::orderBy('id','DESC')->first()->subsection2_title;}}</h2>
				{{ HTML::image("images/global/subsection2.png", "Text") }}
				<p>
					{{Setting::orderBy('id','DESC')->first()->subsection2_desc;}}
				</p>
			</div>
			<div class="subsection">
				<h2>{{Setting::orderBy('id','DESC')->first()->subsection3_title;}}</h2>
				{{ HTML::image("images/global/subsection3.jpg", "Text") }}
				<p>
					{{Setting::orderBy('id','DESC')->first()->subsection3_desc;}}
				</p>
			</div>
		</div>

		<div>
			<hr />
			<p class="address">
				Address
				<br />Phone
				<br />Mail contact
				<br />copyright
			</p>
		</div>
	</footer>
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

		<!-- FlexSlider -->
		{{ HTML::script('js/flexslider/jquery.flexslider-min.js') }}


		<script type="text/javascript">

		    $(window).load(function(){
		    	$captions = $('.captions')

				$('.flexslider').flexslider({
					animation: "fade",
					useCSS: true,
					touch: true,
					start: function(slider){
					  	$('body').removeClass('loading');
					  	$activecaption = $('.flex-active-slide .flex-caption');
						$captions.html($activecaption.html());
					},
					after: function() {
					    $activecaption = $('.flex-active-slide .flex-caption');
					    $captions.html($activecaption.html());
					}
				});
		    });

		</script>

		<!-- Optional FlexSlider Additions -->
		{{ HTML::script('js/flexslider/jquery.easing.js') }}
		{{ HTML::script('js/flexslider/jquery.mousewheel.js') }}
</body>
</html>
