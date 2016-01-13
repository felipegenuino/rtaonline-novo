<?php
/*
Template Name: developer
*/
get_header(); ?>




<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        disableDoubleClickZoom: true,
	    draggable: false,
	    scrollwheel: false,
	    panControl: false

	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
</script>






<header class="hero home">


<?php
 
// The Query
 // WP_Query arguments
$args = array( 'post_type' => 'banner', 'posts_per_page' => 0 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();  ?>
	 
			



	 	  <div id="post-<?php the_ID(); ?>"  >  
	 	  	<?php edit_post_link('editar', '<small class="edit-content">', '</small>'); ?>

	 	  	<ul>
	 	  		<li>
	 	  		 <strong>Title: </strong> <?php the_title();?> </li>
	 	  		<li> 
	 	  			<?php if ( the_field('acf_banner_cor_de_fundo') ): ?>
	 	  				<strong>Cor de fundo: </strong> <?php the_field('acf_banner_cor_de_fundo'); ?> 
	 	  			<?php endif ?>	
	 	  		</li>
	 	  		 
	 	  		<li> 
	 	  			<?php if ( the_field('acf_banner_texto') ): ?>
	 	  				<strong>texto: </strong> <?php the_field('acf_banner_texto'); ?> 		
	 	  			<?php endif ?>
	 	  		</li>
	 	  		<li> 
	 	  			<?php if ( the_field('acf_banner_texto_do_botao') ): ?>
	 	  				<strong>Texto botão: </strong> <?php the_field('acf_banner_texto_do_botao'); ?> 		
	 	  			<?php endif ?>
	 	  		</li>
	 	  		<li>
					<?php
						if(get_field('acf_banner_pagina_externa')) {
							echo ' <strong> Pagina_externa: </strong>' . get_field('acf_banner_pagina_externa') ;
						}

						if(get_field('acf_banner_pagina_interna')) {
							echo '<strong> Pagina_interna: </strong>' . get_field('acf_banner_pagina_interna') ;
						}
						else{
							echo "Cadastrar um endereço";
						}
					?>
	 	  		</li>
 
 	 	  		 
	 	  		<li> <strong>link imagem: </strong>
								<?php $image = get_field('acf_banner_imagem'); 
									if (!empty($image) ) { ?>
											<img src="<?php echo  $image['url'];  ?> " alt="<?php echo  $image['title'];  ?>">
								 <?php } else { ?>
											 <?php the_field('acf_banner_cor_de_fundo'); ?>
								 <?php  } ?>
				</li>

	 	  	</ul>

   		 
        </div> <!-- // -->


		 <hr>
	  
<?php endwhile; ?>



	
</header>


<section>
	<div class="row">
				<header>
					<h2>Sobre</br> O método</h2>
					<span> Perferendis, ad libero rem aliquid quisquam hic reprehenderit. </span>
				</header>

					<div class="small-12 large-6 columns">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ab qui, doloribus illo possimus assumenda libero dignissimos delectus deleniti magnam natus, quisquam quam laborum ad accusamus quidem ipsa, recusandae modi.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ab qui, doloribus illo possimus assumenda libero dignissimos delectus deleniti magnam natus, quisquam quam laborum ad accusamus quidem ipsa, recusandae modi.</p>
					</div>	

					<div class="small-12 large-6 columns">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ab qui, doloribus illo possimus assumenda libero dignissimos delectus deleniti magnam natus, quisquam quam laborum ad accusamus quidem ipsa, recusandae modi.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ab qui, doloribus illo possimus assumenda libero dignissimos delectus deleniti magnam natus, quisquam quam laborum ad accusamus quidem ipsa, recusandae modi.</p>
		 				<a href="#" class="button"> Saiba mais</a>
					</div>	
 	</div> <!-- //row -->
</section>


<section>

	<header>
		<h2>Agenda </br> de cursos</h2>
		<span> Perferendis, ad libero rem aliquid quisquam hic reprehenderit. </span>
	</header>


<?php
 
// The Query
 // WP_Query arguments
$args = array( 'post_type' => 'curso', 'posts_per_page' => 6 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();  ?>
	
			<article id="post-<?php the_ID(); ?>">
	 	  	<?php edit_post_link('editar curso', '<small class="edit-content">', '</small>'); ?>
 
 

<ul>

<?php  $acf_curso_nivel = get_field('acf_curso_nivel'); if( !empty($acf_curso_nivel) ): ?>
 	<li>  <?php the_field('acf_curso_nivel'); ?> 	</li>	
<?php endif; ?>

<?php  $acf_curso_status = get_field('acf_curso_status'); if( !empty($acf_curso_status) ): ?>
 	<li>  <?php the_field('acf_curso_status'); ?> 	</li>	
<?php endif; ?>

<?php  $acf_curso_numero_de_vagas = get_field('acf_curso_numero_de_vagas'); if( !empty($acf_curso_numero_de_vagas) ): ?>
 	<li>  <?php the_field('acf_curso_numero_de_vagas'); ?> vagas disponíveis	</li>	
<?php endif; ?>
 

<?php  $acf_curso_capa_do_curso = get_field('acf_curso_capa_do_curso'); if( !empty($acf_curso_capa_do_curso) ): ?>
 	<li>  <?php the_field('acf_curso_capa_do_curso'); ?> 	</li>	
<?php endif; ?>
 

<?php  $acf_curso_cor_da_capa = get_field('acf_curso_cor_da_capa'); if( !empty($acf_curso_cor_da_capa) ): ?>
 	<li>  <?php the_field('acf_curso_cor_da_capa'); ?> 	</li>	
<?php endif; ?>
  
<?php  $acf_curso_estado = get_field('acf_curso_estado'); if( !empty($acf_curso_estado) ): ?>
 	<li>  <?php the_field('acf_curso_estado'); ?> 	</li>	
<?php endif; ?>

<?php  $acf_curso_data_fim = get_field('acf_curso_data_fim'); if( !empty($acf_curso_data_fim) ): ?>
 	<li>  <?php the_field('acf_curso_data_fim'); ?> 	</li>	
<?php endif; ?>

<?php  $acf_curso_data_inicio = get_field('acf_curso_data_inicio'); if( !empty($acf_curso_data_inicio) ): ?>
 	<li>  <?php the_field('acf_curso_data_inicio'); ?> 	</li>	
<?php endif; ?>		

<?php  $acf_curso_carga_horaria = get_field('acf_curso_carga_horaria'); if( !empty($acf_curso_carga_horaria) ): ?>
 	<li>  <?php the_field('acf_curso_carga_horaria'); ?> 	</li>	
<?php endif; ?>		

<?php  $acf_curso_endereco_mapa = get_field('acf_curso_endereco_mapa'); if( !empty($acf_curso_endereco_mapa) ): ?>
 	<li>  <?php the_field('acf_curso_endereco_mapa'); ?> 	</li>	
<?php endif; ?>	

<?php  $acf_curso_endereco_descritivo = get_field('acf_curso_endereco_descritivo'); if( !empty($acf_curso_endereco_descritivo) ): ?>
 	<li>  <?php the_field('acf_curso_endereco_descritivo'); ?> 	</li>	
<?php endif; ?>	

	 
		<?php  $location = get_field('acf_curso_endereco_mapa');
			if( !empty($location) ):
		?>
			<li>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			</li>
			<?php endif; ?>

			
	

 
		 
 


</ul>



 		 				<header>
							<h3><?php the_title();?> </h3>
							


								<?php if ( the_field('acf_curso_estado') ): ?>
				 	  				<h4> <?php the_field('acf_curso_estado'); ?> </h4>		
				 	  			<?php endif ?>



							
						</header>

						<ul>
							<li> 
								<span class="container-icon"> <i class="material-icons">&#xE55F;</i> </span> <p> <strong>Data: </strong> 24 a 31 de agosto 2015 </p> 
							</li>
							<li> 
								<span class="container-icon"> <i class="material-icons">&#xE878;</i> </span> 
								<p> <strong>Local: </strong> Centro de estudos physioscience</p>  
								<p> Av. Nossa Senhora de copacabana no 928 sala 1202 - Rio de Janeiro - RJ</p>
							</li>
							<li>
								<span class="container-icon"> <i class="material-icons">&#xE86C;</i> </span> 
								<p><strong>Carga horária: </strong> 67 horas/aula</p>
								<p>Horário: 08:30 - 12:00 e 13:30 - 17:30 (ultimo dia até às 12:00h)</p>
							</li>
						</ul>
		 
		 			<a href="#" class="button"> Inscreva-se</a> 
 		 	</article>	
 		 	<hr>
 	<?php endwhile; ?>

		 
 </section>


<?php /* ?>

<div class="row">
	<div class="small-12 large-8 columns" role="main">

	<?php if ( have_posts() ) : ?>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'foundationpress_before_pagination' ); ?>

	<?php endif;?>



	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>

<?php */ ?>



<?php get_footer(); ?>


