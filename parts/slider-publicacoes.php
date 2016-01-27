

<section class="section-content section-gallery">

   <div class="row">
      <div class="small-12 columns">
         <header class="header-group">
            <h2 class="header-group__title">Publicações</h2>
            <p class="header-group__subtitle"> Artigos, Pesquisa e Desenvolvimento do Método </p>
         </header>
      </div>  <!-- //small-12  -->
   </div>  <!-- //row  -->


   <div class="row">
  


      <div class="small-12 columns">
             

		<div class="slider-publicacoes-main">
    
                <?php
                  //$num_posts = ( is_front_page() ) ? 4 : -1;
                  $args = array('post_type' => 'publicacoes', 'posts_per_page' => -1);
                  $query = new WP_Query($args);
                  ?>
                <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                
  					<div class="item"> 
 
 <span class="slider-publicacoes-title">
 <?php   // Get terms for post
 $terms = get_the_terms( $post->ID , 'categoria-publicacoes' );
 // Loop over each item since it's an array
 if ( $terms != null ){
 foreach( $terms as $term ) {
 // Print the name method from $term which is an OBJECT
 print $term->name;
 // Get rid of the other data stored in the object, since it's not needed
 unset($term);
} } ?>

<i class="fa _fa-long-arrow-down fa fa-file-text"></i>

</span>

  						<?php edit_post_link('editar', '<small class="edit-content">', '</small> | '); ?>
  						 <?php if( get_field('acf_publicacoes_carregar_publicacao') ): ?>
 								<a  class="botao-publicacoes"  href="<?php the_field('acf_publicacoes_carregar_publicacao'); ?>"  target="_blank" > <?php the_title(); ?> </a>
 						<?php endif; ?>
 </div>
 




                <?php endwhile; endif; wp_reset_postdata(); ?>
         </div>  <!-- //slider-publicacoes --> 



			</div>  <!-- //columns --> 
	   </div> <!-- //row -->
</section>


