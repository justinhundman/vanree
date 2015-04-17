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
		<div class="u-gridContainer">
			<h2>Nieuws</h2>
		</div>
				
	</div>
	</div>
	<div class="u-gridContainer">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<span class="italic"><?php the_time( get_option( 'date_format' ) ); ?></span>
				<div><?php the_content('Read the rest of this entry &raquo;'); ?></div>
				<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				<div class="fb-share-button" data-href="<?php echo   "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-layout="button"></div>
			</article>

		<?php endwhile; ?>

		<nav>
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</nav>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>