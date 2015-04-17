	<div class="Footer">
		<div class="static-hoog-knop">
			<a href="#" class="back-to-top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/v.svg"></a>
		</div>
		<div class="footer-wrapper u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol3 footer-contact">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" ></a>
				</div>
				<div class="u-gridCol3 footer-adres">
					<p>ADRES</p>
					<ul>
						<li>Nieuwkoopseweg 19a</li>
						<li>2641 PA Pijnacker-Nootdorp</li>
						<li>Nederland</li>
					</ul>
				</div>
				<div class="u-gridCol3 footer-contact">
					<p>CONTACT</p>
					<ul>
						<a href="tel:01536110979"><li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png">&nbsp;&nbsp;015 - 361 10 979</li></a>
						<a href="mailto:info@groenspecialisten.nl" target="_top"><li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/envelope.png">&nbsp;&nbsp;info@groenspecialisten.nl</li></a>
					</ul>
				</div>
				<div class="u-gridCol2" style="margin-right: 0px;">
						<p>SITEMAP</p>
						<?php dynamic_sidebar( 'footer-widgets' ); ?>	 
					</div>
			</div>
	</div>
</div>

	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scroll.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slider2.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
