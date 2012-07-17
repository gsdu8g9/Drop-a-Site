<?php require_once('config.php'); ?>
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
	<base href="<?php echo SITE_URL; ?>">

	<?php if ( $currentPage == 'index' ) : ?>
		<title>Drop a Site</title>
	<?php else : ?>
		<title><?php echo $pages[$currentPage]; ?> | Drop a Site</title>
	<?php endif; ?>

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="assets/css/app.css">

	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js"></script>

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

	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.7.2.min.js"><\/script>')</script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/script.js"></script>

</body>
</html>
