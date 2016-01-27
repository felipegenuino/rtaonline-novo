<?php
/*
Template Name: página com menu lateral
*/
get_header(); ?>
<div class="row">


        <div class="small-12 medium-3 columns" >
 
<ul class="list-page-menu-child">
    <?php /* Exibe a lista de páginas filhas  */  
            $parent_id  = $post->post_parent;
            wp_list_pages("title_li=&child_of=$parent_id");   
        ?>
        </ul>
     </div>


    <div class="small-12 medium-9  columns" role="main">

        <?php do_action( 'foundationpress_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
               <!--  <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header> -->
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer>
                    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
                    <p><?php the_tags(); ?></p>
                </footer>
                <?php do_action( 'foundationpress_page_before_comments' ); ?>
                <?php comments_template(); ?>
                <?php do_action( 'foundationpress_page_after_comments' ); ?>
            </article>
        <?php endwhile;?>

        <?php do_action( 'foundationpress_after_content' ); ?>

    </div>




</div>
<?php get_footer(); ?>
