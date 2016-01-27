<?php
/**
 * Template Name: Página instrutores
 */

get_header(); ?>

<section class="section-instrutores">

<div class="row collapse">




	  <?php


	    //$num_posts = ( is_front_page() ) ? 4 : -1;

	    $args = array(
	    	'post_type' => 'instrutor',
	    	'posts_per_page' => -1
	    	);
	    $query = new WP_Query($args);

	   ?>



 	      <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
 	      		<div class="small-6 medium-4  columns">

					<article <?php post_class('instrutor-item') ?> id="post-<?php the_ID(); ?>">

 	



			<?php $image = get_field('acf_instrutor_fotografia');
					if( !empty($image) ): ?>
					<a class="instrutor-item__link" href="#" data-reveal-id="modal-<?php the_ID(); ?>">
						<span class="instrutor-item__thumb thumbnail">
							<img class="instrutor-item__thumb--image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</span>
					</a>
			<?php endif; ?>


 		<h3 class="instrutor-item__title" data-reveal-id="modal-<?php the_ID(); ?>" ><?php the_title(); ?>  </h3>

			<?php /* $descricaoCurta = the_field('acf_profissionais_descricao_curta');
				if( !empty($descricaoCurta) ): ?>
						<p class="lead"> <?php $descricaoCurta; ?>  </p>
				<?php endif; */ ?>

 
			<section>
				<div id="modal-<?php the_ID(); ?>" class="reveal-modal medium " data-reveal aria-labelledby="modal-title" aria-hidden="true" role="dialog">
					<div class="row collapse">

						<header class="header-title">  </header>

						<div class="medium-6 large-4 columns">
								<span class="instrutor-item__thumb thumbnail">
									<img class="instrutor-item__thumb--image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								</span>
						</div><!-- // medium-6 columns -->
						<div class="medium-6 large-8 columns">
							<div class="modal__conteudo">
								<h2 id="modal-title" class="modal__conteudo--title"><?php the_title(); ?></h2>
								<p class="instrutor-item__atribuicao">
								<?php $atribuicao = the_field('acf_instrutor_atribuicao_no_grupo');
									if( !empty($atribuicao) ):  $atribuicao;  endif; ?>
								</p>
 								<div class="instrutor-modal-descricao">
								<?php $descricaocompleta = the_field('acf_instrutor_descricao_completa');
									if( ($descricaocompleta) ):  
 										echo $descricaocompleta;   
									endif; ?>
								</div> <!-- //modal-descricao -->

								<ul class="instrutor-item__social">
									<?php if(get_field('acf_instrutor_lates_url')) { ?>  	 <li class="instrutor-item__social__item instrutor-item__social__item--lattes"> 	<a class="instrutor-item__social__item--link" href="<?php echo get_field('acf_instrutor_lates_url'); ?> ">   		<i class="fa fa-graduation-cap"></i>	Curriculo Lattes </a></li> <?php }?>
									<?php if(get_field('acf_instrutor_email_url')) { ?>  	 <li class="instrutor-item__social__item instrutor-item__social__item--email"> 		<a class="instrutor-item__social__item--link" href="mailto:<?php echo get_field('acf_instrutor_email_url'); ?>">    <i class="fa fa-envelope"></i>			E-mail </a></li> <?php }?>
									<?php if(get_field('acf_instrutor_linkedin_url')) { ?>   <li class="instrutor-item__social__item instrutor-item__social__item--linkedin"> 	<a class="instrutor-item__social__item--link" href="<?php echo get_field('acf_instrutor_linkedin_url'); ?>">   		<i class="fa fa-linkedin-square"></i>	Linkedin</a></li> <?php }?>
									<?php if(get_field('acf_instrutor_twitter_url')) { ?>  	 <li class="instrutor-item__social__item instrutor-item__social__item--twitter"> 	<a class="instrutor-item__social__item--link" href="<?php echo get_field('acf_instrutor_twitter_url'); ?>	">  	<i class="fa fa-twitter-square"></i>	Twitter</a></li> <?php }?>
									<?php if(get_field('acf_instrutor_facebook_url')) { ?>	 <li class="instrutor-item__social__item instrutor-item__social__item--facebook"> 	<a class="instrutor-item__social__item--link" href="<?php echo get_field('acf_instrutor_facebook_url'); ?>">  		<i class="fa fa-facebook-square"></i>	Facebook</a></li> <?php }?>
								</ul>

						<?php edit_post_link('Editar card', '<small class="post-edit">', '</small>'); ?>

							</div> <!-- // modal-conteudo -->
 						</div><!-- // medium-8 columns -->
						<a class="close-reveal-modal" aria-label="Close">&#215;</a>
					</div><!-- // row collapse -->
				</div> <!-- //reveal-modal -->
			</section>


			</article>
 
 				</div>  <!-- //small-6 medium-4 large-3 columns -->

	      <?php endwhile; endif; wp_reset_postdata(); ?>


 	<?php // get_sidebar(); ?>


</div> <!-- //row -->
</section>
<?php get_footer(); ?>
