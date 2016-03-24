<?php
/**
 * @package gold-parent_s
 */
?>
      
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
  	</header><!-- .entry-header -->
    
    <section class="post-excerpt">
      <?php if ( has_post_thumbnail() ) { ?>
  		<div class="excerpt-thumb">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></div></a>
        <?php } ?><!-- .excerpt-thumb -->

		<?php if ( 'post' == get_post_type() ) : ?>
      
  		<div class="entry-meta">
  			<?php gold_parent_s_posted_on(); ?>
  		</div><!-- .entry-meta -->
		<?php endif; ?>
        
		<?php
			/* translators: %s: Name of current post */
			the_excerpt( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'gold_parent_s' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gold_parent_s' ),
				'after'  => '</div>',
			) );
		?>
  </section>

</article><!-- #post-## -->