<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

	<footer class="site-footer">
	  <div class="container footer-bio">
	    <div class="row">
	      <div class="col-lg-6 col-sm-12">
	        <h2>Dr. Richard Himmer</h2>
	        <p>Dr. Himmer is a professional keynote speaker and workshop facilitator. He is an author and organizational consultant. He coaches excutives, entrepreneaurs, couples, parents, and individuals who want to transform and grow.</p>
	        <a class="mt-2 text-center btn btn-dark" href="#">About Dr. Himmer</a>
	      </div>
	      <div class="col-lg-6 col-sm-12 bio-img">
	        <img src="https://s3-us-west-2.amazonaws.com/katamount-media/misc/richard-profile-bright-square.jpg">
	      </div>
	    </div>
	  </div>
	  <address class="footer-contact">
	    <div class="container">
	      <div class="row">
	        <div class="col">
	          <p><a target="_blank" href="https://www.google.com/maps/place/7901+Skansie+Ave+%23240,+Gig+Harbor,+WA+98335/@47.3296405,-122.60182,17z/data=!3m1!4b1!4m5!3m4!1s0x549052c9a99610b5:0xc53fc2c5fd7ca05c!8m2!3d47.3296405!4d-122.5996313">7901 Skansie Ave, Suite 240<br>Gig Harbor, WA 98335</a></p>
	        </div>
	        <div class="col-md-auto text-center">
	          <img class="logo" src="https://s3-us-west-2.amazonaws.com/katamount-media/misc/himmer-logo-wt.png" >
	        </div>
	        <div class="col phone-email">
	          <p><a href="tel:12536863570" itemprop="telephone" content="+12536863570">253.686.3570</a></p>
	          <p><a href="mailto:Drh@himmercenter.com">Drh@himmercenter.com</a></p>
	        </div>
	      </div>
	    </div>
	  </address>

		<div class="site-info">
			<!-- <?php understrap_site_info(); ?> -->
			<p class="footer-legal ">&copy; Himmer Center, Inc. All rights reserved.</p>
		</div><!-- .site-info -->

		<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "Organization",
			"name": "The Himmer Center",
			"description": "Organizational consultant",
			"url": "https:www.himmercenter.com",
		  "address": {
		    "@type": "PostalAddress",
		    "addressLocality": "Gig Harbor, WA",
		    "postalCode": "98335",
		    "streetAddress": "7901 Skansie Ave, Suite 240"
		  },
		  "email": "drh@himmercenter.com",
		  "member": [
		    {
		      "@type": "Organization"
		    }
		  ],
		  "telephone": "(253) 686-3571"
		},
		{
		  "@context": "http://schema.org",
		  "@type": "Person",
		  "name": "Richard Himmer",
		  "disambiguatingDescription": "Organizational and industrial psychologist",
		  "children": {
		    "@type": "Person",
		    "name": "Richard P. Himmer",
		    "disambiguatingDescription": "Organizational and industrial psychologist, founder of The Himmer Center for Organizational and Personal Wellness"
		  }
		}
		</script>

	</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
