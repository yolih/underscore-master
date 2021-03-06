<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package gold-parent_s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if ( is_page ( array ( 'listing', 'calendar', 'event' ) ) ) { 
        ?>
      <div class="entry-content">
        <?php 
        
      } else {
        ?> 
  	    <header class="entry-header">
      		<h1 class="entry-title"><?php the_title(); ?></h1>
  	    </header><!-- .entry-header -->
        <div class="entry-content non-event">
          <?php
      } ?>     
    
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gold-parent_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'gold-parent_s' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->