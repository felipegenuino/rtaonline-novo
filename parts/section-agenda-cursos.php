 <?php is_tax( 'nivel', 'basico')  ?>
 
<section class="<?php if ( is_home() ) { ?>    section-content   <?php }?>">
  





<?php
if ( is_home() ) {
    // This is the blog posts index ?>
    <div class="row">
      <div class="small-12 columns">
         <header class="header-group">
            <h2 class="header-group__title">Agenda <br> de Cursos</h2>
            <p class="header-group__subtitle"> Perferendis, ad libero rem aliquid quisquam hic reprehenderit. </p>
         </header>
      </div>
      <!-- //small-12  -->
   </div> <!-- //row  -->

<?php }?>






   <div class="row">


      <div class="small-12 medium-6 columns">
         <section class="agenda-cursos agenda-cursos-basico" >

            <header class="agenda-cursos__header">
               <img class="agenda-cursos__header--image" src="<?php bloginfo('template_directory'); ?>/assets/img/brand/simbol-light.svg" alt="" />
                <h2 class="agenda-cursos__header--title agenda-cursos__header--title-basico">Curso básico</h2>
            </header>

            <ul class="agenda-cursos__lista">
               <?php
                  //$num_posts = ( is_front_page() ) ? 4 : -1;
                  $args = array('post_type' => 'curso', 'posts_per_page' => -1,  'nivel' => 'basico');
                  $query = new WP_Query($args);
                  ?>
               <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
               <?php //if (get_field('acf_curso_nivel') == 'Curso básico'): ?>


                   <li class="agenda-cursos__lista--item agenda-cursos__lista--item-basico"  id="post-<?php the_ID(); ?>">
                            <a class="agenda-cursos__lista--item-link agenda-cursos__lista--item-link-basico" href="<?php the_permalink(); ?>">  <i class="agenda-cursos__lista--item-link-icon agenda-cursos__lista--item-link-icon-basico fa fa-calendar"></i> <?php the_title(); ?></a>
                   </li>
                <?php //endif; ?>
               
               <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
         </section>
      </div>  <!-- //small-12 columns -->



      <div class="small-12 medium-6 columns">
         <section class="agenda-cursos agenda-cursos-avancado" >
            <header class="agenda-cursos__header">
               <img class="agenda-cursos__header--image" src="<?php bloginfo('template_directory'); ?>/assets/img/brand/simbol-dark.svg" alt="" />
               <h2 class="agenda-cursos__header--title agenda-cursos__header--title-avancado">Curso Avançado</h2>
            </header>
            <ul class="agenda-cursos__lista">
               <?php
                  //$num_posts = ( is_front_page() ) ? 4 : -1;
                  $args = array('post_type' => 'curso', 'posts_per_page' => -1, 'nivel' => 'avancado' );
                  $query = new WP_Query($args);
                  ?>
               <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
               <?php // if (get_field('acf_curso_nivel') == 'Curso avançado'): ?>
                <li class="agenda-cursos__lista--item agenda-cursos__lista--item-avancado" id="post-<?php the_ID(); ?>">
                            <a class="agenda-cursos__lista--item-link agenda-cursos__lista--item-link-avancado" href="<?php the_permalink(); ?>"> <i class="agenda-cursos__lista--item-link-icon agenda-cursos__lista--item-link-icon-avancado fa fa-calendar"></i> <?php the_title(); ?></a>
                    </li>
               <?php //endif; ?>
                
               <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
         </section>
      </div>  <!-- //small-12 columns -->

   </div>   <!-- //row -->

</section>