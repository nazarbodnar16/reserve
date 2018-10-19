<footer id="footer" class="main-footer">

	<?php
if( is_front_page() ){ ?>
	<div class="bottom-footer clearfix">
		<div class="container">
			<span class="copy">
				ALL RIGHTS RESERVED &copy; 2018 THE RESERVE TRUST COMPANY
			</span>
		</div>
	</div>
<?php }
else { ?>
<div class="footer-logo bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="image description"></div>
	<div class="top-footer">
		<div class="container">
			<h2 class="h2">BEGIN WITH TRUST</h2>
			<div class="contact-form">
				<?php echo do_shortcode('[contact-form-7 id="120" title="Contact form"]'); ?>
			</div>
			<a href="/privacy-policy" class="policy">PRIVACY POLICY</a>
			<p class="first-address">1601 Arapahoe Street, Suite 1100, Denver, CO 720-306-8170</p>
			<p class="second-address">1717 Pennsylvania Avenue, N.W. Suite 900, Washington, DC 202-552-0175</p>
		</div>
	</div>
	<div class="bottom-footer clearfix">
		<div class="container">
			<span class="copy">
				ALL RIGHTS RESERVED &copy; 2018 THE RESERVE TRUST COMPANY
			</span>
		</div>
	</div>
<?php }

?>
	

</footer>

<?php wp_footer(); ?>
<script>
	// smooth scroll to anchor
	$(document).ready(function() {
	    $('a[href*="#"]:not([href="#"])').click(function() {

	        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	            var target = $(this.hash);
	            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

	            if (target.length) {
	                $('html, body').animate({
	                    scrollTop: target.offset().top
	                }, 1000);
	                return false;
	            }
	        }
	    });
	});
</script>
<?php if(is_singular()) { ?>
  <script>sbg();</script>
<?php } ?>
</body>
</html>
