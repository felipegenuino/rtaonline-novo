<?php
/**
 * Template Name: Página publicações
 */

get_header(); ?>

<section class="section-profissionais">

<div class="row">

  <div class="small-12 columns">

  <table style="width:100%">
    <thead>
      <tr>
        <th width="50">Categoria</th>
         <th width="250">Titulo</th>
        <th width="50">Visualizar</th>
      </tr>
    </thead>
    <tbody>




	  <?php


	    //$num_posts = ( is_front_page() ) ? 4 : -1;

	    $args = array(
	    	'post_type' => 'publicacoes',
	    	'posts_per_page' => -1
	    	);
	    $query = new WP_Query($args);

	   ?>



 	      <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

							<article <?php post_class('publicacoes-item') ?> id="post-<?php the_ID(); ?>">





                <tr>
                  <td>

                     <?php $terms = get_the_terms( $post->ID , 'categoria-publicacoes' );
                     if ($terms) {
                         foreach ( $terms as $term ) {
                             $term_link = get_term_link( $term, 'categoria-publicacoes' );
                             if( is_wp_error( $term_link ) )
                             continue;
                             //echo '<a href="' . $term_link . '">' . $term->name . '</a>';
                             echo  $term->name;
                         }

                       }//se existir algum termo exibe
                     ?>



 <?php edit_post_link('editar', '<small class="edit-content">', '</small>'); ?> </td>
                  <td> <?php the_title(); ?>   </td>
                  <td> <a id="id-<?php the_ID(); ?>" href="<?php the_field('acf_publicacoes_carregar_publicacao') ?>" title="<?php the_title(); ?>"  download> Visualizar </a> </td>
                </tr>






											<ul class="hide">
												<li><a href="<?php the_permalink(); ?>"> </a></li>
												<li>   <?php the_field('acf_publicacoes_carregar_publicacao') ?>    </li>
												<li>   <?php the_field('acf_publicacoes_autor') ?>    </li>
												<li>   <?php the_field('acf_publicacoes_onde_foi_publicado_select') ?>    </li>
												<li>   <?php the_field('acf_publicacoes_onde_foi_publicado_option') ?>    </li>
												<li>   <?php the_field('acf_publicacoes_ano_publicacao') ?>    </li>
												<li>   <?php the_field('acf_publicacoes_observacao') ?>    </li>
											</ul>

							</article>

	      <?php endwhile; endif; wp_reset_postdata(); ?>



     </tbody>
   </table>
 </div> <!-- // small-6 medium-4 large-12 columns -->



 	<?php // get_sidebar(); ?>

</div>
</section>
<?php get_footer(); ?>
