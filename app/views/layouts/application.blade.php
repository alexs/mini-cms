<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/cssnormalize/cssnormalize-min.css">
	{{ HTML::style('css/style.css') }}
	<title>Inicio</title>
</head>
<body>
	<header>
		<div>{{ HTML::image("http://placehold.it/100x100", "Logo") }}</div>
		<div id="title">
			<h1>HERE IS THE PAGE TITLE</h1>
			<p>
				slogan page
			</p>
		</div>
		<div>{{ HTML::image("http://placehold.it/100x100", "Sec Logo") }}</div>
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
		</ul>
	</nav>
	<section id="main">
		@yield('content')
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
			<h2>SubSection</h2>
			{{ HTML::image("http://placehold.it/200x100", "Logo") }}
			<p>
				some message
			</p>
		</div>
		<div>
			<h2>SubSection</h2>
			{{ HTML::image("http://placehold.it/200x100", "Logo") }}
			<p>
			some message
			</p>
		</div>
		<div>
			<h2>SubSection</h2>
			{{ HTML::image("http://placehold.it/200x100", "Logo") }}
			<p>
				some message
			</p>

		</div>
	</footer>
</body>
</html>
