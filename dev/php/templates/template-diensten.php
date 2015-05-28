<?php
/*
Template Name: Diensten
*/
?>
<?php get_header(); ?>
	<?php get_header(); ?>
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="titelplaatje">
		<!--<img class="titel" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider3.png">-->
		<div class="Spacebar">
			<div class="u-gridContainer"> 
				<h2><?php the_title(); ?></h2>
			</div>		
		</div>
	</div>

		<article class="Content Content--fullwidth u-gridContainer titelklein" id="post-<?php the_ID(); ?>">
				<a href="/home">Home</a>&nbsp;>&nbsp;Diensten
				<div class="Content-entry contactspace">
					<div class="u-gridRow">
						<div class="u-gridCol4">
								
								<div class="responsivediensten">
									<a href="/ontwerp"><h3>ONTWERP</h3></a>
								</div>

								<div class="container">
								  <div class="keynote">
								    <img src="http://vanreegroenspecialisten.lijktmeduidelijk.nl/files/2015/04/landelijk.jpg" />
								    <div class="keynote-desc keynote-descdiensten">
									      <p class="keynote-name">ONTWERP</p>
									      <a href="/ontwerp" class="more">Meer weten</a>
								    </div>
								  </div>
								</div>
								<p>
								De eerste stap naar ultiem Tuingeluk! Dit gaat u samen met onze eigen deskundige en creatieve ontwerpers bereiken. 
								</p>

						</div>	
						<div class="u-gridCol4">

								<div class="responsivediensten">
									<a href="/aanleg"><h3>AANLEG</h3></a>
								</div>

								<div class="container">
								  <div class="keynote">
								    <img src="http://vanreegroenspecialisten.lijktmeduidelijk.nl/files/2015/04/aanlegbutton.png" />
								    <div class="keynote-desc keynote-descdiensten">
									     <p class="keynote-name">AANLEG</p>
									     <a href="/aanleg" class="more">Meer weten</a>
								    </div>
								  </div>
								</div>
								<p>
								De werkelijke realisatie van uw Tuingeluk kan beginnen door  onze professionele en creatieve hoveniers.
								</p>
						</div>
						<div class="u-gridCol4">

								<div class="responsivediensten">
									<a href="/onderhoud"><h3>ONDERHOUD</h3></a>
								</div>

								<div class="container">
								  <div class="keynote">
								    <img src="http://vanreegroenspecialisten.lijktmeduidelijk.nl/files/2015/04/onderhoudbutton.png" />
								    <div class="keynote-desc keynote-descdiensten">
									     <p class="keynote-name">ONDERHOUD</p>
									     <a href="/onderhoud" class="more">Meer weten</a>
								    </div>
								  </div>
								</div>
								<p>
								Houdt uw tuin of groenvoorziening in conditie! Tuinonderhoud is vakwerk! Wij adviseren en voeren het tuinwerk geheel op maat uit. 
								</p>
						</div>
					</div>
				</div>
		</article>

				
	<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>

