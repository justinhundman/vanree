<?php
  //import the default gravityform contact forms
define("GF_THEME_IMPORT_FILE", "includes/gravityforms-contactform.xml");

// Register the sitemap menu
add_action( 'init', 'register_menu_sitemap' );

function register_menu_sitemap(){
	register_nav_menus( array( 
		'sitemap' => 'Sitemap'
    ));
}

$initialized = get_option('slate_initialized');
if($initialized == null){
	$initialized = false;
}

if(is_admin() && !$initialized){
	  include_once('includes/initialize_pages.php');
	
	  $siteIniter = new SiteInitializer(
		  "van-ree-groenspecialisten", 
		  "Nieuwkoopseweg 19A 2641 PA Pijnacker", 
		  "015 – 361 09 78", 
		  "info@groenspecialisten.nl");
	  $siteIniter->initializeAll();
	  add_option('slate_initialized', true);
}


include_once('includes/antispam.php');
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
      'name' => 'Homepage',
      'description'   => 'Dit is het rechter blokje op de homepage',      
      	'id'=>'homepage',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
}


