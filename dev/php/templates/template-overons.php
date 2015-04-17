 <?php
/*
Template Name: Over ons
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
						<div class="Content-entry contactspace">
				<div class="u-gridRow">
					<div class="u-gridCol12 hetteam">		
						    <h3>HET TEAM</h3>
						<div class="accContent">
						    <p>	Het team Van Ree Groenspecialisten bestaat uit Gerard en Bert van Ree en 15 medewerkers. Een goed op elkaar ingespeeld team dat precies weet hoe zij u Tuingeluk kunnen laten beleven.
							</p>
							<img class="team" src="<?php echo get_stylesheet_directory_uri(); ?>/img/teamfoto.png">
						</div>
					</div>
					<div class="u-gridCol6">
						<h3>WIE ZIJN WIJ</h3>
						    <p>	Vanaf 1989 zijn wij uitgegroeid tot een duurzaam, full service bedrijf met 15 enthousiaste medewerkers. Vanuit het groene buitengebied tussen Nootdorp en Pijnacker bedienen wij zowel particuliere als zakelijke  opdrachtgevers in de gehele Randstad.
						    	<br><br>
								Het groen zit ons in het hart en maken daarom graag een Groene tuin waarin u zich Gelukkig voelt!  Beleving van kleur, geur en de seizoenen zijn hierbij de voornaamste elementen, welke u kan beleven in onze sfeertuin.
								<br><br>
								Creativiteit, kwaliteit en professionaliteit worden gewaarborgd door Groenkeur en de verbondenheid als Geselecteerd Hovenier met de Tuinen van Appeltern.  
							</p>
					</div>
					<div class="u-gridCol6">
					    <h3>WIJ GARANDEREN TUINGELUK! </h3>
					    <p>	<a href="http://www.tuingeluk.nl/" target="_blank"><img class="tuingeluk" style="max-width: 35%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tuingeluk.gif"></a> 
							Door volgen van het concept Tuingeluk en de planmatige aanpak  heeft u een helder inzicht hoe wij te werk gaan en weet u precies waar u aan toe bent. Wij kiezen voor deze filosofie omdat Uw Tuingeluk ons aan het hart gaat  en u graag een rijker leven gunnen. Wij zien graag dat u ontdekt en beleeft hoe fraai alles groeit en bloeit in uw tuin.<br><br> 
							Uw Tuingeluk wordt voornamelijk bepaald door vier basisvoorwaarden. De verhoudingen, het volume, de privacy en de energiebalans zijn geluksbepalend. Als uw tuin aan deze voorwaarden voldoet  is de basis voor uw Tuingeluk gelegd. Met het lijnenspel, de gekozen producten en de uitstraling van uw accessoires kan het alleen nog maar mooier worden.<br><br> 
							Tuingeluk is een initiatief van De Tuinen van Appeltern en het netwerk van Exclusief Geselecteerde hoveniers.
							<br><br>		
					</div>
				</div>
				</div>
				<!-- content-text -->	
			</div>
		</article>
				
					
	
	<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>

