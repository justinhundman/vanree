<?php
/*
Template Name: Homepage-2
*/
?>

<?php get_header(); ?> 
                <div class="sliderwrap">
                    <div class="u-gridContainer">
                    <div class="u-gridCol6 titel_tekst">
                                                <p class="header-onderkant-slider-text1" style="text-decoration: none" href="#">"ONTDEK EN BELEEF"</p>   
                                                <p class="header-onderkant-slider-text2" style="text-decoration: none" href="#">BEZOEK ONZE SFEERTUINEN EN GROENCENTRUM</p><br><br><br>
                                                <a class="header-onderkant-slider-text3" style="text-decoration: none" href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/envelope.png">&nbsp;&nbsp;NEEM CONTACT OP</a>
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
                                    <iframe class="youtubescherm" width="464.766" height="350" src="https://www.youtube.com/embed/XGl61pA_IsU" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </article>
                                <div class="u-gridCol3">
                                    <div class="content-box">
                                        <div class="green-header-text">
                                            <p>OVER ONS</p>
                                        </div>
                                        <div class="black-header-text">
                                            <p>WIJ BESTAAN 25 JAAR!</p>
                                        </div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hovenier.png" style="width: 100%">
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
                                            <div class="black-header-text">
                                                <p>BLIJF OP DE HOOGTE</p>
                                            </div> 
                                            <?php if (have_posts()) : ?>

                                                <?php while (have_posts()) : the_post(); ?>

                                                    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                                                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                                        <span><?php the_time( get_option( 'date_format' ) ); ?></span>
                                                        <div><?php the_content('Read the rest of this entry &raquo;'); ?></div>
                                                        <p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
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
                                        </div>
                                </div>
                        </article>
                        <div class="u-gridRow">
                            <div class="u-gridCol6">
                                <h2 class="titels">WIE ZIJN WIJ</h2>
                                    <p class="tekst_home">U wilt een duurzame, groene en stijlvolle tuin van hoge kwaliteit, die voldoet aan uw persoonlijke
                                    tuinwensen? Dan moet u bij Van Ree Groenspecialisten zijn.
                                    </p>
                                </div>
                            <div class="u-gridCol6 keurmerk">
                                    <a href="http://www.groenkeur.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/groenkeur.png"></a>
                                    <a href="http://www.exclusiefgeselecteerd.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/exclusief.png"></a>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tuingeluk.png">
                            </div>
                        </div>
                	</div>
<?php get_footer(); ?>