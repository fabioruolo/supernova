<?php get_header(); ?>

	<section id="artist-section">
		<a id="go-back" href="#back"></a>
		<article id="artist" class="clearfix">
			<div class="info-wrapper">
				<header>
					<hgroup>
						<h1><?php the_field('gif_title'); ?></h1>
					    <h2>by <?php print strip_tags(get_field('artist')); ?></h2>
					</hgroup>
				<?php if (get_field('links')): ?>
					<?php while(has_sub_field('links')): ?>
					<a href="<?php the_sub_field('link'); ?>" title="<?php the_field('artist'); ?>'s website" target="_blank">
						<?php print str_replace("http://", "", get_sub_field('link')); ?>
					</a>
					<?php endwhile; ?>
				<?php endif; ?>
				</header>
				<div id="share-gif">
					<div class="first clearfix">
						<p>Share</p>
						<ul class="social">
							<li><div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div></li>
							<li><a href="https://twitter.com/share" class="twitter-share-button" data-text="Check out this gif by <?php the_field('artist'); ?> on Christmas Gifs http://www.christmasgifs.org">Tweet</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
													<li><div class="g-plusone" data-size="medium"></div><script type="text/javascript">
							  (function() {
							    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
							    po.src = 'https://apis.google.com/js/plusone.js';
							    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
							  })();
							</script></li>
						</ul>
					</div>
					<div class="last">
						<a href="#send-this-gif">Send this gif</a>
					</div>	
				</div>
				<aside>
					<form id="send-this-gif" class="clearfix" autocomplete="on">
						<input id="title" name="title" type="text" value="">
						<!-- <input id="from" name="from" type="email" value="" placeholder="Type here your email"><br> -->
						<input id="from" name="from" type="text" value="" placeholder="Type your name here"><br>
						<input id="recipient" name="email" type="email" value="" placeholder="Type recipient emails here (comma separated)" multiple><br>
						<input name="name" type="hidden" value="<?php print htmlentities(get_field('artist')); ?>">

						<input name="gif" type="hidden" value="<?php the_field('full_gif'); ?>">

						<textarea name="body" placeholder="Type here your message"></textarea><br>
						<span id="text-count">500</span>
						<input type="submit" value="Send this Gif">
					</form>
				</aside>
			</div>
			<div id="gif" class="loading" data-src="<?php the_field('full_gif'); ?>" data-alt="<?php the_field('artist'); ?>'s gif"></div>
		</article>
	</section>

<?php get_footer(); ?>