<?php
/*
Template Name: Sfeer
*/
?>

<?php get_header(); ?>
    <div class="titelplaatje">
        <img class="titel" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider3.png">
        <div class="Spacebar">
		<div class="u-gridContainer">
			<h2><?php the_title(); ?></h2>
		</div>		
	</div> 
    </div>
	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content-entry contactspace" id="post-<?php the_ID(); ?>">
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
