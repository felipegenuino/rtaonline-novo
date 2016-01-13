

<section class="section-content section-gallery">

   <div class="row">
      <div class="small-12 columns">
         <header class="header-group">
            <h2 class="header-group__title">Galeria <br> de Imagens</h2>
            <p class="header-group__subtitle"> Perferendis, ad libero rem aliquid quisquam hic reprehenderit. </p>
         </header>
      </div>  <!-- //small-12  -->
   </div>  <!-- //row  -->


   <div class="row">
      <div class="small-12 medium-12 large-12 columns">
             
 






                <?php
                  //$num_posts = ( is_front_page() ) ? 4 : -1;
                  $args = array('post_type' => 'galeria', 'posts_per_page' => 1);
                  $query = new WP_Query($args);
                  ?>
               <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                
<?php  $images = get_field('acf_galeria');

               if( $images ): ?>



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
                </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>

               <?php endif; ?>
               <?php endwhile; endif; wp_reset_postdata(); ?>

 



       </div>


   </div> <!-- //row -->
</section>


