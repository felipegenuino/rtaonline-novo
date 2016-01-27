<section class="hero-page">

 	<div class="row">
 		<div class="small-12 columns">

		 	<?php if ('curso' == get_post_type() ) : ?>
		          <h5 class="hero-page__title--level"> <?php $terms = get_the_terms( $post->ID , 'formacao' ); foreach ( $terms as $term ) {   echo $term->name; }?> </h5>
		      <?php else: ?>


		      <?php endif; ?>


      		<h1 class="hero-page__title--title"><?php the_title(); ?></h1>
 		<h2 class="hero-page__title--subtitle"><?php the_field('acf_curso_data'); ?></h2>

     		
     		
     		


     
			</div>	<!-- // small-12  -->
 	</div> <!-- // row -->
</section>
