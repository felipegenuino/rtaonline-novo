<?php  ?>
<section class="banner-home-main">
		<?php
			$args = array( 'post_type' => 'banner', 'posts_per_page' => 0, 'orderby'=>'date');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();  ?>


			<section class="hero home item" style="background-image:url(<?php $image = get_field('acf_banner_imagem');  if (!empty($image) ) {   echo  $image['url'];  }  ?>); background-color: <?php the_field('acf_banner_cor_de_fundo'); ?>">
			 	<?php edit_post_link('editar', '<small class="edit-content">', '</small>'); ?>

			 	<div class="row">
			 		<div class="small-12  columns">
			 		    <h1>  <?php if ( the_field('acf_banner_texto') ): ?> <?php the_field('acf_banner_texto'); ?> <?php endif; ?> </h1>
			 			<h2> <?php if ( the_field('acf_banner_linha_de_apoio') ): ?>  <?php the_field('acf_banner_linha_de_apoio'); ?> <?php endif; ?> </h1>

						 	<a href="<?php if(get_field('acf_banner_pagina_externa')) { echo  get_field('acf_banner_pagina_externa'); }
							  if(get_field('acf_banner_pagina_interna')) { echo get_field('acf_banner_pagina_interna'); }
							  else{ echo "#cadastrar-um-endereco"; } ?>" class="button"> <?php if ( the_field('acf_banner_texto_do_botao') ): ?>  <?php the_field('acf_banner_texto_do_botao'); ?>  <?php endif ?> </a>



		 			</div>	<!-- // medium-12  -->
			 	</div> <!-- // row -->
			</section>
		<?php endwhile; ?>
</section> <!-- //owl-carousel -->
<?php  ?>


 



