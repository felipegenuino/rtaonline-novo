  <div class="row">
    <div class="small-4 columns">

    <?php
			$args = array( 'post_type' => 'instrutores', 'posts_per_page' => 0, 'orderby'=>'date');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();  ?>

			<section class="instrutores item" style="background-image:url(<?php// $image = get_field('acf_banner_imagem');  if (!empty($image) ) {   echo  $image['url'];  }  ?>); background-color: <?php //the_field('acf_banner_cor_de_fundo'); ?>">
			 	<?php edit_post_link('editar', '<small class="edit-content">', '</small>'); ?>

			 			<h1> 	<?php the_title();  ?> 	</h1>
 

			</section>

		<?php endwhile; ?>

    </div>	<!-- // small-12  -->
  </div> <!-- // row -->
