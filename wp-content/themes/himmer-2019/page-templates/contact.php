<?php
/**
 * Template Name: Contact
 *
 * Custom template for contact page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<!-- == Contact == -->
<main class="site-main contact-page" id="main" role="main">
	<section class="section contact-form">
		<div class="container">
			<header class="m_b_4">
					<h1 class="intro">Contact</h1>
					<p class="font_1_75 font-weight-normal">It costs nothing to reach out and start a conversation.</p>
			</header>
			<div class="form-wrapper">
				<?php echo do_shortcode('[contact-form-7 id="11" title="Contact"]'); ?>
			</div>
		</div><!-- .container -->
	</section>
	<section class="section business-details">
		<div class="container">
			<address class="row">
				<div class="col col-12 col-md-4 ">
					<time itemprop="openingHours" datetime="Mo-Fr 09:00-16:00"><span class="font_1">Monday - Friday</span><br><span class="">9:00AM - 4:00PM PT</span></time>
				</div>
				<div class="col col-12 col-md-4 ">
					<a class="" itemprop="telephone" content="+12536863570" href="tel:12536863570">253.686.3570</a>
					<a itemprop="email" content="drh@himmercenter.com" href="mailto:drh@himmercenter.com">drh@himmercenter.com</a>
				</div>
				<div class="col col-12 col-md-4 ">
					<a target="_blank" href="https://www.google.com/maps?ll=47.329641,-122.599631&z=17&t=m&hl=en-US&gl=US&mapclient=embed&cid=7900629287362690749">7901 Skansie Ave, Suite 240<br>Gig Harbor, WA 98335</a>
				</div>
			</address><!-- .row -->
		</div><!-- .container -->
	</section>
	<section>
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2704.2166026320365!2d-122.60181968360428!3d47.32964097916738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5491accba9f57b25%3A0x6da4ac7a3f4cfebd!2sHimmer+Center!5e0!3m2!1sen!2sus!4v1553101116435" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>
</main><!-- #main -->

<?php get_footer(); ?>
