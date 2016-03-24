<?php
/*
Template Name: Photo Gallery
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    
  	<header class="entry-header">
  		<h1 class="entry-title"><?php the_title(); ?></h1>
  	</header><!-- .entry-header -->
	
		<div id="post-<?php the_ID(); ?>" <?php post_class('format-link'); ?>>
    	<?php the_post() ?>
	
			<div class="entry-content non-event">
  		<?php the_content(); ?>

      <?php $formats = new WP_Query( array(
      	'tax_query' => array(
      		array(
      		'taxonomy' => 'post_format',
      		'field'    => 'slug',
      		'terms'    => array( 'post-format-gallery' ),
      		'operator' => 'IN',
      		)
      	 )
      ));
      ?>

      <?php if( $formats->have_posts() ) : while( $formats->have_posts() ) : $formats->the_post(); ?>

       	<?php if(function_exists('has_post_format') && has_post_format('gallery')) {
        	$images = get_children( 
          array( 
          'post_parent' => $post->ID, 
          'post_type' => 'attachment', 
          'post_mime_type' => 'image', 
          'orderby' => 'menu_order', 
          'order' => 'ASC', 
          'numberposts' => 999 
            ) 
          );
        	if ( $images ) :
        		$total_images = count( $images );
        		$image = array_shift( $images );
        	?>
 
           <div class="gallery-thumb-wrap">
           <a href="<?php the_permalink() ?>" class="gallery-thumb" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('gallery-format-thumbnail'); ?></a>
           <h4 class="gallery-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
       
          	<p class="gallery-text">
              <?php printf( _n( 'This gallery contains <br /><a %1$s>%2$s photo</a>.', 'This gallery contains <br />
              <a %1$s>%2$s photos</a>.', $total_images, "gold-parent_s" ),
          			'href="' . get_permalink() . '" rel="bookmark"',
          			number_format_i18n( $total_images )
          		); ?>
          	</p>
       
         </div><!-- .gallery-thumb-title -->
        	<?php endif; ?>
        	<?php 
        }
        ?>

        <?php endwhile; ?>

      <?php endif; ?>
       
         </div><!-- .entry-content-->
    	</div><!-- .post-format -->

		</main><!-- #main -->
	</div><!-- #primary -->
  
  <?php get_sidebar(); ?>

<?php get_footer(); ?>