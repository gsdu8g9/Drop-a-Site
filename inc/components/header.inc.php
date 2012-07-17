<?php 

	# Don't show anything, when the site is called directly.
	if ( !defined('SITE_DROPPED') ) die();

	# Now write all your stuff.
?>

<header>

		<p>&gt;&gt; Drop a Site</p>

		<hr>

		<nav>
			<ul>
				<li>
					<a href="/Drop-a-Site/">Home</a>
				</li>
				<li>
					<a href="/Drop-a-Site/about/">About</a>
					<ul>
						<li>
							<a href="/Drop-a-Site/about/sub-page-1/">Sub-Page-1</a>
						</li>
						<li>
							<a href="/Drop-a-Site/about/sub-page-2/">Sub-Page-2</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>

		<hr>
		
	</header>