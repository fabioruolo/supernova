<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="it" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="it" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="it" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php bloginfo('language'); ?>" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title></title>

	<meta name="description" content="Christmas Gifs is a festive showcase of animated gifs created by an international group of illustrators, animators and directors; a project curated by Ryan Todd and built by Enjoythis.">
	<meta name="author" content="Ryan Todd &amp; Enjoythis">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	
	<meta property="og:title" content="<?php print htmlentities(strip_tags(get_field('artist', $post->ID))); ?> - Christmas Gifs">
	<meta property="og:description" content="Check out this gif by <?php print htmlentities(get_field('artist', $post->ID)); ?> on Christmas Gifs.">
	<meta property="og:image" content="<?php the_field('thumb', $post->ID); ?>">
	<meta property="og:url" content="<?php print get_permalink($post->ID); ?>">
	<meta property="og:type" content="website">
	<meta property="fb:app_id" content="497929996896353">

	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">

	<?php
	$metas = array(
		'description' => '',
		'author'      => '',
		'viewport'    => '',
		'ogtitle'     => '',
		'ogimage'     => '',
		'ogurl'       => '',
		'ogtype'      => '',
		'fbappid'     => ''
	);
	sn_meta_tags( $metas );
	sn_google_analytics( 'UA-3628409-9' );

    wp_head();
    sn_google_cdn_check();
    ?>
</head>

<body>
<?php if (is_page()) : ?>
<div id="awwwards" class="left white">
<a href="http://www.awwwards.com" target="_blank">best websites of the world</a>
</div>
<?php endif; ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=497929996896353";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper">
	<header id="header">
		<div id="logo">
			<h1><a href="<?php print get_home_url(); //print (is_front_page()) ? get_home_url() : '/'.$post->post_name; ?>" title="Home"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.gif" height="38" width="314" alt="Christmas Gifs"></a></h1>
		</div>
		<nav>
			<ul>
				<li><a href="#about">About project</a></li>	
			</ul>
		</nav>
		<?php if (is_page()) : ?>
		<ul class="social">
			<li><div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div></li>
			<li><a href="https://twitter.com/share" class="twitter-share-button" data-text="Christmas Gifs
			 is a festive showcase of animated gifs; a project curated by @mrryantodd and built by @enjoythis">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</li>
			<li><div class="g-plusone" data-size="medium"></div><script type="text/javascript">
				(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script>
			</li>
		</ul>
		<?php endif; ?>
	</header>
	<div id="main">
		<section id="content">
		<?php
			$about_id = 2;
			$about = get_page($about_id);
			print apply_filters('the_content', $about->post_content);
		?>
		</section>