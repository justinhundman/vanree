<?php
/*
Template Name: Homepage-2
*/
?>

<?php get_header(); ?> 
                <div class="sliderwrap">
                    <div class="u-gridContainer">
                        <div class="u-gridRow">
                            <div class="u-gridCol6 titel_tekst">
                                <p class="header-onderkant-slider-text1" style="text-decoration: none" href="#">"ONTDEK EN BELEEF"</p>   
                                <p class="header-onderkant-slider-text2" style="text-decoration: none" href="#">BEZOEK ONZE SFEERTUINEN EN GROENCENTRUM</p>
                                <div class="klanten">
                                    <iframe frameborder="0" allowtransparency="true" src="http://klantenvertellen.nl/widget/v1/van_ree_groenspecialisten/" width="97" height="139"></iframe>
                                </div>
                            </div>
                        </div>    
                    </div>
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
                 </div>
                
                <div class="u-gridContainer">
                    <div class="u-gridRow ">
                                
                    </div>
                </div>
                	<div class="u-gridContainer">
                        <article class="u-gridRow youtube" id="post-<?php the_ID(); ?>">
                                <article class="u-gridCol6" >
                                    <div class="green-header-text">
                                            <p>WELKOM BIJ VAN REE GROENSPECIALISTEN</p>
                                        </div>
                                    <div class="video-container">
                                    <iframe class="youtubescherm" width="464.766" height="350" src="http://www.youtube.com/v/XGl61pA_IsU?version=3&loop=1&playlist=XGl61pA_IsU" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </article>
                                <div class="u-gridCol3">
                                    <div class="content-box">
                                        <div class="green-header-text">
                                            <p>OVER ONS</p>
                                        </div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gerard.png" style="width: 100%">
                                        <div class="white-content">
                                            <p>Het team Van Ree Groenspecialisten bestaat uit Gerard en Bert van Ree 
                                                en 15 medewerkers. Een goed op elkaar ingespeeld team dat precies weet wat
                                                ze van elkaar mogen verwachten... 
                                            </p>
                                        </div> 
                                    </div>
                                </div>
                                 <div class="u-gridCol3">
                                        <div class="content-box"> 
                                            <div class="green-header-text">
                                                <p>LAATSTE NIEUWS</p>
                                            </div>
                                            <div class="white-content2">
                                            <ul class="latest-news">
                                                 <?php dynamic_sidebar('homepage'); ?>
                                                </ul>
                                        </div>
                                        </div>
                                </div>
                        </article>
                        <div class="u-gridRow">
                            <div class="u-gridCol6">
                                <h2 class="titels">WIE ZIJN WIJ</h2>
                                    <p class="tekst_home">U wilt Gelukkig zijn in een duurzame, stijlvolle maar vooral GROENE tuin van hoge kwaliteit, die voldoet aan uw persoonlijke tuinwensen? Dan moet u bij Van Ree Groenspecialisten zijn! 
                                    </p>
                                </div>
                            <div class="u-gridCol2 keurmerk">
                                    <a href="http://www.tuingeluk.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tuingeluk.gif"></a>  
                            </div>
                             <div class="u-gridCol1 keurmerk appel">
                                    <a href="http://www.groenkeur.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/groenkeur.png"></a> 
                            </div>
                            <div class="u-gridCol1 keurmerk">
                                    <a href="http://www.appeltern.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-site.png"></a>  
                            </div>
                            <div class="u-gridCol2 keurmerk">
                                     <a href="http://www.exclusiefgeselecteerd.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/exclusief.png"></a>  
                            </div>
                        </div>
                	</div>
<?php get_footer(); ?>