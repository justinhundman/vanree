<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>
	<div class="titelplaatje">
        <!--<img class="titel" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider3.png"> -->
        <div class="Spacebar">
            <div class="u-gridContainer"> 
                <h2><?php the_title(); ?></h2>
            </div>      
        </div>
    </div>
	<div class="u-gridContainer">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
						<a href="/home">Home</a>&nbsp;>&nbsp;Contact
						<div class="Content-entry contactspace">
							
							<div class="Content-text">

								<div class="u-gridRow">								
									<div class="adress-map u-gridCol12">
										<div id="map_canvas"></div>
									</div>

								</div> <!-- /gridRow -->
 
								<div class="hr-style super-margin">
									<hr>
								</div>
								<div class="u-gridRow">						
									<div class=" u-gridCol8">
										<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
										<?php the_content(); ?>
									</div>
									<div class="adress u-gridCol4">
										<div class="adress-info">
											<img class="logocontact" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logocontact.png"> 
											<p>Nieuwkoopseweg 19A</p>
											<p>2641 PA Pijnacker-Nootdorp</p>
											<p>Email: info@groenspecialisten.nl</p>
											<p>Tel: 015 – 361 09 78</p>
											<br>
											<p><b>Openingstijden:</b></p>
											<p>8u00 - 17u00 (maandag t/m vrijdag)</p>
											<p>sfeertuin is dan vrij toegankelijk</p>
										</div>
				
									</div>	
								</div>


							</div> <!-- content-text -->
						</div>
					</article>
				<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>

