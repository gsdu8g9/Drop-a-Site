<?php

	# add your pages to the array (all except 404)
	$pages = array('index', 'about');
	$req = trim($_SERVER['REQUEST_URI'], '/');

	print_r($req);

	# if the request-string is empty, show the index-page
	if ( empty($req) ) {
		$req = 'index';
	}

	$currentPage = in_array($req, $pages)
		? $req
		: '404';

	# setting the correct header
	if ( $currentPage == '404' ) {
		header('HTTP/1.0 404 Not Found');
	}

?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="de"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="de"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="de"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
<head>

	<meta charset="utf-8">

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width">
	<title>Drop a Site</title>

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="assets/css/nomalize.css">
	<link rel="stylesheet" href="assets/css/app.css">

	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

	<p>&gt;&gt; Drop a Site</p>

	<hr>

	<nav>
		<ul>
			<li>
				<a href="/">Home</a>
			</li>
			<li>
				<a href="/about/">About</a>
			</li>
		</ul>
	</nav>

	<hr>

	<?php include('inc/' . $currentPage . '.inc.php'); ?>

	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.7.2.min.js"><\/script>')</script>
	<script src="assets/js/script.js"></script>

</body>
</html>
