<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<div style="margin-top:40px;">

<?php 
	astra_content_after();
		
	astra_footer_before();
		
	// astra_footer();
		
	astra_footer_after(); 
?>
</div>

	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

	</body>
</html>
