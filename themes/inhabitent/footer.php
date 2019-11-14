<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="contact-info">
						<h4 class="footer-title">contact info</h4>
						<p>info@inhabitent.com</p>
						<p>778-456-7891</p>
						<div class=social-media-icon></div>
					</div>
					<div class="business-hours">
						<h4 class="footer-title">business hours</h4>
						<p><b>Monday-Friday:</b> 9am to 5pm</p>
						<p><b>Saturday:</b> 10am to 2pm</p>
						<p><b>Sunday:</b> Closed</p>
					</div>
					<div class="footer-logo">
						<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg" alt="footer-logo">
					</div>
					<div class="copyright">copyright © 2019 inhabitent</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
