<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage islandTheme
 * @since 1.0
 * @version 1.0
 */

?>

		<div class="footer">

		
		<h4>footer world

  
<?php wp_nav_menu(); ?> 


        </h4>
        <div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'www.jskruse.com' ) ); ?>" class="imprint">
		<?php printf( __( 'Brought to You By %s', 'DayDreamMSP' ), 'DayDreamMSP' ); ?>
	</a>
</div><!-- .site-info -->


	
</div>


</body>
</html>