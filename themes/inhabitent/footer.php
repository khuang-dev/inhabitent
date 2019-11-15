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
					<div class="contact-section">
						<h4 class="footer-title">contact info</h4>
						<span class="contact-info">
						<i class="footer-icon fa fa-envelope"></i><p>info@inhabitent.com</p>
							</span>
						<span class="contact-info">
						<i class="footer-icon fa fa-phone"></i><p>778-456-7891</p>
							</span>
						<div class=social-media-icon>
							<i class="footer-icon fab fa-facebook-square"></i>
							<i class="footer-icon fab fa-twitter-square"></i>
							<i class="footer-icon fab fa-google-plus-square"></i>
						</div>
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
				</div><!-- .site-info -->
				<div class="copyright">copyright © 2019 inhabitent</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
