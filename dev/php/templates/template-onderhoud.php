<?php
/*
Template Name: ONDERHOUD
*/
?>

<?php get_header(); ?>


 	<div class="titelplaatje">
        <!--<img class="titel" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider3.png">-->
        <div class="Spacebar">
            <div class="u-gridContainer"> 
                <h2><?php the_title(); ?></h2>
            </div>      
        </div>  
    </div>
	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth" id="post-<?php the_ID(); ?>">
			<a href="/home">Home</a>&nbsp;>&nbsp;<a href="/diensten">Diensten</a>&nbsp;>&nbsp;Onderhoud
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div> 
		</article>
		<!-- Lightbox usage markup -->
			<!-- thumbnail image wrapped in a link -->
			<div class="u-gridCol4"> 
				<a href="#img1">
				  <img src="http://vanreegroenspecialisten.lijktmeduidelijk.nl/files/2015/04/Onderhoud-dienstenIMG_0917.png">
				</a>
				<!-- lightbox container hidden with CSS -->
				<a href="#_" class="lightbox" id="img1"> 
				  <img src="http://vanreegroenspecialisten.lijktmeduidelijk.nl/files/2015/04/Onderhoud-dienstenIMG_0917.png">
				</a>
			</div>
			<div class="u-gridCol4">
				<a href="#img2">
				  <img src="http://vanreegroenspecialisten.lijktmeduidelijk.nl/files/2015/04/Onderhoud-dienstenIMG_4769.png">
				</a>
				<!-- lightbox container hidden with CSS -->
				<a href="#_" class="lightbox" id="img2">
				  <img src="http://vanreegroenspecialisten.lijktmeduidelijk.nl/files/2015/04/Onderhoud-dienstenIMG_4769.png">
				</a>
			</div>
			<div class="u-gridCol4">
				<a href="#img3">
				  <img src="http://vanreegroenspecialisten.lijktmeduidelijk.nl/files/2015/04/Onderhoud-dienstenIMG_5550.png">
				</a>
				<!-- lightbox container hidden with CSS -->
				<a href="#_" class="lightbox" id="img3">
				  <img src="http://vanreegroenspecialisten.lijktmeduidelijk.nl/files/2015/04/Onderhoud-dienstenIMG_5550.png">
				</a>
			</div>
	<?php endwhile; endif; ?>
	</div> 

<?php get_footer(); ?>
