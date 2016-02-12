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




<section class="section-social-medias-facebook">
	<div class="row">
		<div class="small-12 columns">

			<div class="fb-like" data-href="http://rtaonline.com.br/" 
  data-layout="standard" data-action="like" data-show-faces="true" data-share="true" data-colorscheme="dark">
</div>



		</div><!-- //small-12  -->
	</div> <!-- //row -->
</section>


 


	<section class="section-contact-footer">
		<div class="row">
						<div class="small-12 medium-4 columns">
							<h3><i class="material-icons">&#xE0CD;</i> Telefone</h3>
							<ul class="inline-list footer-telefones">
 								<li>48 3879.1474</li>
								<li>48 3233.4233</li>
							</ul>
						</div><!-- //small-12 large-4 -->

						<div class="small-12 medium-4 columns">
							<h3><i class="material-icons">&#xE0C8;</i> Endereço</h3>
							<p> Rua João Mathias Cordeiro, número 33 </br>
								Córrego Grande / Florianópolis
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
									<li class="facebook">	<a target="_blank" href="https://www.facebook.com/rta.metodo"> <i class="fa fa-facebook-official"></i></a> </li>
									<li class="youtube">	<a target="_blank" href="https://www.youtube.com/user/MetodoRTA">  <i class="fa fa-youtube-play"></i> </a></li>
									<li class="gplus">		<a target="_blank" href="https://plus.google.com/+MétodoRTA/">  <i class="fa fa-google-plus"></i></a></li>
                  					<li class="twitter">	<a target="_blank" href="#"> <i class="fa fa-twitter"></i></a></li>
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








<div id="modal-popup" class="reveal-modal modal__popup" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
		 <header class="modal__header">
 		 	<h3 class="modal__header--title">Feedback</h3>
		 </header>
		 <div class="modal__conteudo ">
		 	<h3 class="modal__conteudo--title">Olá Visitante ;)</h3>
		        <p>Nosso site está de cara nova. </p>
		     	<p>Estamos trabalhando para garantir que o site esteja 100% amigável e por isso o seu feedback é muito importante para nós.</p>
		      <p> Caso você tenha alguma dúvida ou sugestão entre em contato conosco por chat ou diretamente pelo e-mail <a href="mailto:rtaonline@gmail.com">rtaonline@gmail.com </a></p>		  		 		
		 </div>

		  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div> <!-- // modal -->

<a href="#" data-reveal-id="modal-popup" class="modal-feedback-button"><i class="fa fa-question-circle"></i> Feedback</a>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/headroom/headroom.js"></script>
     <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/owl-carousel/owl.carousel.min.js"></script>
     <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom/owl.js"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-22530543-1', 'auto');
  ga('send', 'pageview');

</script>



<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3fHQMi2jPhbMZ6ce9iGkaMKg5r4h2g4p";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->





<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/vendor/jquery.cookie.js"></script>

<script> 
	$(document).ready(function() {
       // grab an element
		var myElement = document.querySelector(".main-header");
		// construct an instance of Headroom, passing the element
		var headroom  = new Headroom(myElement);
		// initialise
		headroom.init(); 
    });




//modal com cookie
 $(document).ready(function() {
  if ($.cookie('modal_shown') == null) {
      $.cookie('modal_shown', 'yes', { expires: 7, path: '/' });
      setTimeout(function(){
         $("#modal-popup").foundation('reveal', 'open');
      }, 3000);
   }
});
  // $("#modal-popup").foundation('reveal', 'open');


</script>


<div id="fb-root"></div> 
 

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>



</body>
</html>
