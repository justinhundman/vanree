<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>

 				<div class="Slider"> <!-- Dit is de slider in de onderkant header -->
                   <?php

                                $args = array(
                                    'post_type' => 'slides',
                                    'posts_per_page'=>999
                                );
                                $slides = new WP_Query( $args );
                                $num = count($slides); 
                                $counter = 0;
                                if( $slides->have_posts() ) {
                                    while( $slides->have_posts() ) {
                                        $slides->the_post();
                                        $counter++;
                                        ?>
                                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                              $image_url = $image[0];
                                        ?>
                                        <div class="slide" style="">
                                            <img class="border-img" src="<?php echo $image_url; ?>" />
                                            <div class="slider-txt-back"><h4><?php the_title(); ?></h4></div>
                                        </div>
                                        <?php
                                    }
                                }
                            ?>
                </div>  

	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div> 

<?php get_footer(); ?>
