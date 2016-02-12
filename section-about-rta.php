<?php 

// WP_Query arguments
$args = array (
	'name'                   => 'sobre-o-metodo',
	'post_type'              => array( 'page' ),
);

// The Query
$query = new WP_Query( $args );

while ( $query->have_posts() ) : $query->the_post();  ?>

<section class="section-content section-about">
	<div class="row">
				

	<div class="small-12 columns">
			<?php edit_post_link('editar', '<small class="edit-content left">', '</small>'); ?>

						<header class="header-group">
							<h2 class="header-group__title">Sobre</br> O método</h2>
  							<p class="header-group__subtitle"> Conheça como o método foi desenvolvido </p>
						</header>
				</div><!-- //small-12  -->

 <?php the_content(); ?>

 
 	</div> <!-- //row -->
</section>

<?php endwhile; ?>

