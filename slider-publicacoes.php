

<section class="section-gallery">

   <div class="row">
      <div class="small-12 columns">
         <header class="header-title">
            <h2>Publicações</h2>
            <p> Perferendis, ad libero rem aliquid quisquam hic reprehenderit. </p>
         </header>
      </div>  <!-- //small-12  -->
   </div>  <!-- //row  -->


   <div class="row">
      <div class="small-12 medium-3 large-2 columns">
      	<a href="#" class="button "> Todas as publicações</a>
      </div>  <!-- //columns --> 



      <div class="small-12 medium-9 large-10 columns">
             

		<div class="slider-publicacoes">
    
                <?php
                  //$num_posts = ( is_front_page() ) ? 4 : -1;
                  $args = array('post_type' => 'publicacoes', 'posts_per_page' => -1);
                  $query = new WP_Query($args);
                  ?>
                <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                
  					<div class="item"> 
  						<?php the_title(); ?> <br>
								<hr>


<?php

// check if the repeater field has rows of data
if( have_rows('acf_publicacoes_repetidor_autor') ):

 	// loop through the rows of data
    while ( have_rows('acf_publicacoes_repetidor_autor') ) : the_row();

        // display a sub field value
        the_sub_field('acf_publicacoes_autor');

    endwhile;

else :

    // no rows found
    echo "não rolou";

endif;

?>
  					 

   					</div>
 




                <?php endwhile; endif; wp_reset_postdata(); ?>
         </div>  <!-- //slider-publicacoes --> 



			</div>  <!-- //columns --> 
	   </div> <!-- //row -->
</section>


