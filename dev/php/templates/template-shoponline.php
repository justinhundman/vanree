<?php
/*
Template Name: Shop online
*/
?>
<?php get_header(); ?>
	<?php get_header(); ?>
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="titelplaatje">
		<img class="titel" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider3.png">
		<div class="Spacebar">
		<div class="u-gridContainer">
			<h2><?php the_title(); ?></h2>
		</div>		 
	</div>
	</div>
		<article class="Content Content--fullwidth u-gridContainer titelklein" id="post-<?php the_ID(); ?>">
						<div class="Content-entry contactspace">
								<div class="u-gridRow">
										<div class="u-gridCol6">
											    <h3>VERKOOP BEPLANTING</h3> 
											    <p>	In ons Groencentrum is het uitgebreide en beproefde sortiment uit onze sfeertuin verkrijgbaar. 
											    	<br><br>
													U bent elke werkdag van harte welkom om zelf uw beplanting uit te zoeken en van deskundig advies te voorzien.
												</p>
										</div>
										<div class="u-gridCol6 maandaanbieding">
											    <h3>MAANDAANBIEDING</h3>
											    <p>	
											    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sem ex, cursus aliquam rutrum quis, scelerisque sed tortor. Nam pellentesque mi at pretium fermentum.
												</p>
												<div class="bestel">
													<button class="buttondemo">
													<p>BESTEL HIER DE AANBIEDING</p>
													</button>
												</div>
										</div>
								</div>
								<div class="u-gridRow">
										<div class="u-gridCol3 shopimage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/SVerlichting002_resize.jpg">
										</div>
										<div class="u-gridCol3 shopimage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/SVerlichting004_resize.jpg">
										</div>
										<div class="u-gridCol6 verlichting">
											    <h3>VERLICHTING</h3>

											    <p>	Professionele verlichting voor tuin en groenvoorziening passend bij diverse tuinstijlen. Uiteraard geleverd, geplaatst en aangesloten door onze vakbekwame groenspecialisten.
													De installatie is uit te breiden met contact dozen voor bijvoorbeeld het aansluiten van vijverpompen of elektrische tuinonderhoud machines.
												</p>
										</div>	  
								</div>
								<div class="u-gridRow">
									<div class="u-gridCol6">
											 	<h3>MAAIROBOT/ AUTOMOWER</h3>

											    <p>	De door onze vakbekwame specialisten geplaatste automowers van Husqvarna maaien 7 dagen per week uw gazon. De weinige grasresten die blijven liggen zorgen voor een uitstekende bemesting van uw gazon. Dit gecombineerd met een willekeruig maaipatroon maken uw droomgazon zonder zelf te maaien tot werkelijkheid.
												</p>   
									</div>
									<div class="u-gridCol3 robot shopimage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Zhusqvarna_logo_1_resize_resize.jpg">
										</div>
										<div class="u-gridCol3 robot shopimage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/IMG_3481_resize_resize.JPG">
										</div>
								</div>
								<div class="u-gridRow">
										<div class="u-gridCol12">
											 	<h3>SPEELTOESTELLEN</h3>

											    <p>	Van Ree Groenspecialisten is Holzhof erkend partner van Speeltoestellen. Erkend Holzhof partner geeft aan dat wij in onze regio voor Holzhof de levering en plaatsing van de speeltoestellen verzorgen. Holzhof is toonaangevend in de markt van speeltoestellen en heeft een kwalitatief hoogwaardige brede productlijn welke aan de wettelijke eisen voldoet. Alle speeltoestellen voor openbaar gebruik voldoen aan de veiligheidsnorm EN 1176. De toestellen zijn o.a. te plaatsen in speeltuinen, (school) pleinen, ruimten voor kinderopvang en tuinen.
													Neem contact met ons op voor een vrijblijvend adviesgesprek op locatie.
												</p>
										</div>		  
								</div>
								<div class="u-gridRow">
										<div class="u-gridCol4 shopimage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Holzhof erkend partner logo resize_resize (1).jpg">
										</div>
										<div class="u-gridCol4 shopimage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Holzhof_resize.jpg">
										</div>
										<div class="u-gridCol4 shopimage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Schommelwelles_resize_resize.JPG">
										</div>
									</div>

								<div class="u-gridRow">
									<div class="u-gridCol3 shopimage">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/speelboot_resize_resize.jpg">
									</div>
									<div class="u-gridCol3 shopimage">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Speelelementoxi_resize.jpg">
									</div>
									<div class="u-gridCol3 shopimage">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Speelhuisje_resize.jpg">
									</div>
									<div class="u-gridCol3 shopimage">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sport_resize.jpg">
									</div>
								</div>
											<button class="buttondemo">
												<p>VRAAG OM EEN DEMONSTRATIE IN ONZE SFEERTUIN</p>
											</button>
								<div class="u-gridRow">
										<div class="u-gridCol12">
											    <h3>BEREGENING</h3>

											    <p>	Gemak dient de mens. Zelfs wanneer u op vakantie gaat, waakt de automatische beregeningsinstallatie over het onderhoud van uw tuin. U bespaart veel tijd en werk overdag en kunt daardoor meer van uw tuin genieten. 's-Nachts vindt door de geringe nachtelijke verdamping een efficiënte besproeiing plaats. De automatische beregening wordt flexibeler en nauwkeuriger uitgevoerd dan bij handmatige besproeiing mogelijk is.
													Van Ree Groenspecialisten is Erkend Dealer van TORO beregeningsmaterialen en installaties en realiseert uw professionele beregeningsinstallatie voor tuin en groenvoorziening, voor elke plantensoort, gazon en voor ieder budget!!! Wij leggen Complete Beregeningsinstallaties aan en leveren Doe Het Zelf pakketten. 
												</p>
										</div>	
								</div>
									<div class="u-gridRow">
										<div class="u-gridCol4 shopimage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/IMG_0362_resize.JPG">
										</div>
										<div class="u-gridCol4 shopimage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Popup multi-streamsproeier_resize.jpg">
										</div>
										<div class="u-gridCol4 shopimage">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/IMG_0358_resize.JPG">
										</div>
									</div>

								<div class="u-gridRow">
									<div class="u-gridCol3 shopimage">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Heestersproeier_resize.jpg">
									</div>
									<div class="u-gridCol3 shopimage">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Heestersproeier01_resize.jpg">
									</div>
									<div class="u-gridCol3 shopimage">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pupup_resize.jpg">
									</div>
									<div class="u-gridCol3 shopimage">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Gazonsproeier02_resize.jpg">
									</div>
								</div>
											<button class="buttondemo">
												<p>VRAAG OM EEN DEMONSTRATIE IN ONZE SFEERTUIN</p>
											</button>
							</div>

  

												

				<!-- content-text -->	
			</div>
		</article>
				<div class="u-gridRow">
					<div class="u-gridCol4">

					</div>
				</div>
	<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>

