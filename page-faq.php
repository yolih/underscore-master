<?php
/*
Template Name: FAQ Page
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    
  	<header class="entry-header">
  		<h1 class="entry-title"><?php the_title(); ?></h1>
  	</header><!-- .entry-header -->
	
		<div id="post-<?php the_ID(); ?>" <?php post_class('format-aside'); ?>>
    	<?php the_post() ?>
	
			<div class="entry-content non-event">
  		<?php the_content(); ?>


       <?php $formats = new WP_Query( array(
       	'tax_query' => array(
       		array(
       		'taxonomy' => 'post_format',
       		'field'    => 'slug',
       		'terms'    => array( 'post-format-aside' ),
       		'operator' => 'IN',
       		)
       	 )
       ));
       ?>

       <?php if( $formats->have_posts() ) : while( $formats->have_posts() ) : $formats->the_post(); ?>
              
            <?php get_template_part( 'content', 'aside' ); ?>

         <?php endwhile; ?>

       <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
  
  <?php get_sidebar(); ?>
  
<?php get_footer(); ?>