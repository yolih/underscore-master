<?php
/**
 *
 * @package gold-parent_s
 */
?>

	</div><!-- #content -->
  
</div><!-- #page -->

  <div id="footer">
       
    <div class="footer-content">
      
      <?php if ( is_active_sidebar( 'footer-widgets-1' ) ) : ?>
          <div id="footer-widgets">
          <?php dynamic_sidebar( 'footer-widgets-1' ); ?>
          </div>
      <?php endif; ?>
      
      <?php if ( is_active_sidebar( 'footer-widgets-2' ) ) : ?>
          <div id="footer-widgets">
          <?php dynamic_sidebar( 'footer-widgets-2' ); ?>
          </div>
      <?php endif; ?>
      
      <?php if ( is_active_sidebar( 'footer-widgets-3' ) ) : ?>
          <div id="footer-widgets">
          <?php dynamic_sidebar( 'footer-widgets-3' ); ?>
          </div>
      <?php endif; ?>
  
    </div><!-- .footer-content -->
  
  </div><!-- #footer -->

    <?php if ( shortcode_exists( 'tf_powered_link' ) ) {
        echo do_shortcode('[tf_powered_link]');
    } ?>

<?php wp_footer(); ?>

</body>

</html>