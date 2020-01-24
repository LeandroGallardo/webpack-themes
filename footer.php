<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package novaguas
 */

?>


	<footer id="footer" class="site-footer">
		<div class="container">
			<div class="row py-5">
				<div class="col-md-4 py-3">
					<a class="navbar-brand" href="<?php echo get_site_url(); ?>" style=" float: left;">
		                <img id="logo1" class="" src="<?php echo get_stylesheet_directory_uri(); ?>/sources/img/logo_novaguas.png" alt="logo novaguas">      
		            </a>
		            <a class="navbar-brand" href="<?php echo get_site_url(); ?>" style=" float: left;">
		                <img id="logo2" class="" src="<?php echo get_stylesheet_directory_uri(); ?>/sources/img/logo_bbc.png" alt="logo bcc">      
		            </a>
				</div>
				<div class="col-md-4 py-3">
					<a href="#" class="d-block"><p class="mb-0">Medios y lugares de pago</p></a>
					<a href="#" class="d-block"><p class="mb-0">Conoce tu boleta.</p></a>
					<a href="#" class="d-block"><p class="mb-0">Solicitud de reposición de servicios</p></a>
				</div>
				<div class="col-md-4 py-3">
					<a href="#" class="d-block"><p class="mb-0">Certificados en Línea.</p></a>
					<a href="#" class="d-block"><p class="mb-0">Preguntas Frecuentes</p></a>
				</div>

			</div>

			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<footer class="">
		<div class="container">
			<div class="row py-3">
				<div class="col-md-4">
					<span>Derechos reservados NOVAGUAS - BCC</span>
				</div>


			</div>

			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	


<?php wp_footer(); ?>
<script type="text/javascript" src="http://localhost/novaguas/wp-content/themes/novaguas/sources/js/index.js"></script>
</body>
</html>
