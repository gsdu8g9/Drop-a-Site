<?php

	# define this for security reasons
	define('SITE_DROPPED', true);

	# define the URL of your site
	define('SITE_URL', 'http://www.example.com/');

	# add your pages and titles to the array
	$pages = array(
		'index' => 'Home',
		'about' => 'About',
		'about/sub-page-1' => 'Sub-Page 1',
		'about/sub-page-2' => 'Sub-Page 2',
		'404' => 'Nothing found'
	);

	# extracting the request string
	$req = trim($_SERVER['REQUEST_URI'], '/');

	# if the request string is empty, show the index-page
	if ( empty($req) ) {
		$req = 'index';
	}

	# if the request is invalid, show the 404-page
	$currentPage = array_key_exists($req, $pages)
		? $req
		: '404';

	# setting the correct header
	if ( $currentPage == '404' ) {
		header('HTTP/1.0 404 Not Found');
	}