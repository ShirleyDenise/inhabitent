<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="bloc-contact">
					<h3>Contact Info</h3>
					<p>
						<i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
					</p>
					<p>
						<i class="fa fa-phone" aria-hidden="true"></i><a href="tel:7784567891">778-456-7891</a>
					</p>
					<div class="social-icon">
						<i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i>
					</div>
					
				</div>
				<div class="bloc-hours">
					<h3>Business hours</h3>
					<p>
						<span class="day">Monday-Friday</span>: 9am to 5pm
					</p>
					<p>
						<span class="day">Saturday</span>: 10am to 2pm
					</p>
					<p>
						<span class="day">Sunday</span>: Closed
					</p>
				</div>
				<div class="footer-logo">
					<a href="home" rel="home">
						<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-text.svg'; ?>" class="logo" alt="Inhabitent company logo"/>
					</a>
				</div>
				<div class="copyright">Copyright © 2016 Inhabitent</div>
				<div class="site-info">
					<!--<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Copyright © 2016 Inhabitent' ), 'WordPress' ); ?></a>-->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
