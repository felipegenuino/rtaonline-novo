

<section class="section-content section-gallery">

   <div class="row">
      <div class="small-12 columns">
         <header class="header-group">
            <h2 class="header-group__title">Publicações</h2>
            <p class="header-group__subtitle"> Perferendis, ad libero rem aliquid quisquam hic reprehenderit. </p>
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
  						<?php edit_post_link('editar', '<small class="edit-content">', '</small> | '); ?>
  						 <?php if( get_field('acf_publicacoes_carregar_publicacao') ): ?>
 							<small>	<a  class="botao-publicacoes"  href="<?php the_field('acf_publicacoes_carregar_publicacao'); ?>"  target="_blank" >Baixar publicação</a></small>
							</br>
						<?php endif; ?>


  						<?php the_title(); ?> 
  
 



 

  					 

   					</div>
 




                <?php endwhile; endif; wp_reset_postdata(); ?>
         </div>  <!-- //slider-publicacoes --> 



			</div>  <!-- //columns --> 
	   </div> <!-- //row -->
</section>


