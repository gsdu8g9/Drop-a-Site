<?php

	# define this for security reasons - do not touch!
	define('SITE_DROPPED', true);

	require_once('config.php');

?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo SITE_URL; ?>">

	<?php if ( $currentPage == 'index' ) : ?>
		<title>Drop a Site</title>
	<?php else : ?>
		<title><?php echo $pages[$currentPage]; ?> | Drop a Site</title>
	<?php endif; ?>

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="assets/css/app.css">

	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

	<?php include('inc/components/header.inc.php'); ?>

	<article>
		<?php include('inc/' . $currentPage . '.inc.php'); ?>
	</article>

	<?php include('inc/components/footer.inc.php'); ?>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/script.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>

</body>
</html>
