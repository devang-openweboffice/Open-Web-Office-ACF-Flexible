<?php
/**
 * The template for displaying the 404 template in the Open Web Office theme.
 *
 * @package WordPress
 * @subpackage Open_Web_Office
 * @since Open Web Office 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Page Not Found', 'open-web-office-acf-flexible' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'open-web-office-acf-flexible' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'open-web-office-acf-flexible' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->
<?php get_footer(); ?>