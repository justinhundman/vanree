<?php get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div class="titelplaatje">
		<!--<img class="titel" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider3.png">-->
	<div class="Spacebar">
		<div class="u-gridContainer mobileweg">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="u-gridContainer mobiletitle">
			<h5><?php the_title(); ?></h5>
		</div>
				
	</div>
	</div>
	<div class="u-gridContainer">
		<a href="/home">Home</a>&nbsp;>&nbsp;<a href="/nieuws">Nieuws</a>&nbsp;>&nbsp;Bericht
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div>
				<?php the_content(); ?>
				<div class="fb-share-button" data-href="<?php echo   "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-layout="button"></div>
				<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			</div>
		</article>
		
		<nav>
			<div><?php previous_post_link('&laquo; %link') ?></div>
			<div><?php next_post_link('%link &raquo;') ?></div>
		</nav>

		<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif; ?>
</div>
<?php get_footer(); ?>
