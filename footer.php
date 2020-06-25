<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Open_Web_Office
 * @since Open Web Office 1.0
 */

?>
		<footer id="site-footer" role="contentinfo" class="header-footer-group">

			<div class="section-inner">

				<div class="footer-credits">

					<p class="footer-copyright">&copy;
						<?php
						echo date_i18n(
							/* translators: Copyright date format, see https://www.php.net/date */
							_x( 'Y', 'copyright date format', 'open-web-office-acf-flexible' )
						);
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					</p><!-- .footer-copyright -->

					<p class="powered-by-wordpress">
						<a href="<?php echo esc_url( __( 'https://devangpujara.in/', 'open-web-office-acf-flexible' ) ); ?>">
							<?php _e( 'by Devang Pujara', 'open-web-office-acf-flexible' ); ?>
						</a>
					</p><!-- .powered-by-wordpress -->

				</div><!-- .footer-credits -->

				<a class="to-the-top" href="#site-header">
					<span class="to-the-top-long">
						<?php
						/* translators: %s: HTML character for up arrow. */
						printf( __( 'To the top %s', 'open-web-office-acf-flexible' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
						?>
					</span><!-- .to-the-top-long -->
					<span class="to-the-top-short">
						<?php
						/* translators: %s: HTML character for up arrow. */
						printf( __( 'Up %s', 'open-web-office-acf-flexible' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
						?>
					</span><!-- .to-the-top-short -->
				</a><!-- .to-the-top -->

			</div><!-- .section-inner -->

		</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
