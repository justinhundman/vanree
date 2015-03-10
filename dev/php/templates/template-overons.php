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
						<h3>WIE ZIJN WIJ</h3>
						    <p>	U wilt een stijlvolle tuin van hoge kwaliteit, die voldoet aan uw persoonlijke tuinwensen? Dan moet u bij Van Ree Groenspecialisten zijn. 
								Wij zijn een full-service bedrijf dat sinds 1989 toelegt op alles wat met tuinen en groenvoorzieningen te maken heeft: van een compleet ontwerp en beplantingsplan (inclusief beregening en verlichting) tot het onderhouden van uw tuin of groenvoorziening en het verzorgen van bomen.
								<br><br>
								Deze werkzaamheden voeren wij planmatig uit met oprechte liefde voor het vak en vanuit een uiterst persoonlijke benadering. Door deze manier van werken zijn wij altijd weer instaat met veel plezier kwaliteit te leveren van het hoogste niveau. Al het werk voeren wij uit in eigen beheer, dus vrijwel zonder onderaannemers, waardoor er één aanspreekpunt is.
								<br><br>
								Door de planmatige manier van werken heeft u een helder inzicht hoe wij te werk gaan en weet u precies waar u aan toe bent.
							</p>
					</div>
					<div class="u-gridCol6">
					    <h3>CREATIVITEIT EN KWALITEIT</h3>
					    <p>	De officiële erkenning van de Stichting Groenkeur, is niet zozeer een verdienste als wel een logisch uitvloeisel van de hoge kwaliteitsnormen die wij ons zelf opleggen. Deze erkenning betekent voor u een waarborg voor vakbekwaamheid, betrouwbaarheid en kwaliteit.
 							<br><br>
							Dat creativiteit in onze tuinontwerpen en tuinen centraal staat, blijkt uit de toekenning van het predicaat "Exclusief Geselecteerd Hovenier" door het tuinideeënpark "de Tuinen van Appeltern".
							Een predicaat wat vooral garant staat voor creativiteit, maar ook voor professionaliteit en kwaliteit.</p>
							<br><br>
							<a href="http://www.groenkeur.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/groenkeur.png"></a>
                            <a href="http://www.exclusiefgeselecteerd.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/exclusief.png"></a>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tuingeluk.png">
					</div>
				</div>
					<div class="accordion">
					    <h3>HET TEAM</h3>
					</div>
					<div class="accContent">
					    <p>	Het team Van Ree Groenspecialisten bestaat uit Gerard en Bert van Ree en 
							15 medewerkers. Een goed op elkaar ingespeeld team dat precies weet wat ze van elkaar mogen verwachten
						</p>
						<img class="team" src="<?php echo get_stylesheet_directory_uri(); ?>/img/teamfull.png">
					</div>
				</div>
				<!-- content-text -->	
			</div>
		</article>
				
					
	
	<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>

