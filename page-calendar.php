<?php
/*
Template Name: Full Width
*/

get_header(); ?>

	<div id="primary" class="content-area calendar">
		<main id="main" class="site-main" role="main">

    	<?php the_post() ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            	<div class="entry-content">
                
            		<?php the_content(); ?>
            
            		<?php
            			wp_link_pages( array(
            				'before' => '<div class="page-links">' . __( 'Pages:', 'classic_s' ),
            				'after'  => '</div>',
            			) );
            		?>
            	</div><!-- .entry-content -->
              
            	<?php edit_post_link( __( 'Edit', 'classic_s' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
            </article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>