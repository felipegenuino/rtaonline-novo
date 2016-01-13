<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0.0
 */

?>

</section>
<footer role="footer">
	<?php do_action( 'foundationpress_before_footer' ); ?>

	<!-- <section class="section-contact">
		<div class="row">
					<div class="small-12 columns">
							<header class="header-title-center">
								<h2>Contato</h2>
	  							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero. </p>
							</header>
							<hr>
					</div>
		</div>
	</section> -->

	<section class="section-contact-footer">
		<div class="row">
						<div class="small-12 medium-4 columns">
							<h3><i class="material-icons">&#xE0CD;</i> Telefone</h3>
							<ul class="inline-list footer-telefones">
								<li>48 9916.4520</li>
								<li>48 3233.4233</li>
								<li>48 3234.9919</li>
							</ul>
						</div><!-- //small-12 large-4 -->

						<div class="small-12 medium-4 columns">
							<h3><i class="material-icons">&#xE0C8;</i> Endereço</h3>
							<p> Rua Escola do Corpo e </br>
								Rua João Mathias Cordeiro, nº 33 </br> Córrego Grande - Florianópolis - SC
							</p>

 	 					</div><!-- //small-12 large-4 -->

						<div class="small-12 medium-4 columns">
							<h3><i class="material-icons">&#xE158;</i> e-Mail</h3>
							<p> <a href="mailto:rtaonline@gmail.com">rtaonline@gmail.com</a></p>
 	 					</div><!-- //small-12 large-4 -->
			</div> <!-- //row -->
 	</section>

	<section class="section-social-medias">
		<div class="row">
					<div class="small-12 columns">
							<header class="header-title-center">
								<h3>Redes Sociais</h3>
								<ul class="lista-midias-sociais">
									<li class="facebook"><a href="https://www.facebook.com/rta.metodo"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/social/facebook.png" alt="Facebook" /></a> </li>
									<li class="youtube"><a href="https://www.youtube.com/user/MetodoRTA"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/social/youtube.png" alt="Youtube" /></a></li>
									<li class="gplus"><a href="https://www.youtube.com/user/MetodoRTA"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/social/gplus.png" alt="gPlus" /></a></li>
								</ul>
 							</header>
					</div><!-- //small-12  -->
		</div> <!-- //row -->
	</section>

	<?php //dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/headroom/headroom.js"></script>
     <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/owl-carousel/owl.carousel.min.js"></script>
     <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom/owl.js"></script>


<script> 






	$(document).ready(function() {



       // grab an element
		var myElement = document.querySelector(".main-header");
		// construct an instance of Headroom, passing the element
		var headroom  = new Headroom(myElement);
		// initialise
		headroom.init(); 
    });


 



</script>
</body>
</html>
