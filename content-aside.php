<?php
/**
 * The template for displaying posts in the Aside post format on the FAQ page
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <h4 class="faq-question"><?php the_title(); ?></h4>
  	<div class="faq-content">
		<?php the_content(); ?>
    
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gold-parent_s' ),
				'after'  => '</div>',
			) );
		?>
    </div><!-- .faq-content -->
  
</article><!-- #post-## -->