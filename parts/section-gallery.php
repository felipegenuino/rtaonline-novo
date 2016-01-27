

 
<?php
  //$num_posts = ( is_front_page() ) ? 4 : -1;
  $args = array('post_type' => 'galeria', 'posts_per_page' => 1);
  $query = new WP_Query($args);
  ?>
<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                


<section class="section-content section-gallery">

   <div class="row">
      <div class="small-12 columns">
         <header class="header-group">
            <h2 class="header-group__title"> Galeria <br> de imagens   <?php edit_post_link('editar', '<small class="edit-content">', '</small>'); ?></h2>
            <p class="header-group__subtitle">  Acompanhamento de Casos e Cursos</p>
         </header>
      </div>  <!-- //small-12  -->
   </div>  <!-- //row  -->


   <div class="row">
     


<?php  $images = get_field('acf_galeria');
               if( $images ): ?>
                     <div class="small-12 columns">
                      <section class="slider">
                        <div id="carousel" class="flexslider">
                              <ul class="slides">
                                <?php foreach( $images as $image ): ?>
                                    <li>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </li>
                                <?php endforeach; ?>
                              </ul>
                            </div>

                            <div id="slider" class="flexslider">
                              <ul class="slides">
                                <?php foreach( $images as $image ): ?>
                                    <li>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                          <p class="galeria-legenda"><?php echo $image['caption']; ?></p>
                                    </li>
                                <?php endforeach; ?>
                              </ul>
                            </div>
                          </section>
                           </div> <!-- //small-12 medium-12 large-8 columns -->
             <?php endif; ?>




<?php  
  $galleryContent = get_field('acf_galeria_descricao');
    if( $galleryContent ): ?>
      <div class="small-12 columns galeria-descricao">
        <h4><?php the_title(); ?></h4>
        <?php echo $galleryContent; ?>
      </div> <!-- //small-12 medium-12 large-4 columns -->
<?php endif; ?>


 


   </div> <!-- //row -->
</section>



               <?php endwhile; endif; wp_reset_postdata(); ?>

 




