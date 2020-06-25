<?php
/**
 * The template for displaying single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Open_Web_Office
 * @since Open Web Office 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="single-post-content">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>
    <?php get_template_part( 'template-parts/pagination' ); ?>
	</div>
	<div class="single-post-sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>

</main><!-- #site-content -->
<?php get_footer(); ?>