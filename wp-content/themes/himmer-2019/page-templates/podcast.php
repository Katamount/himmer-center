<?php
/**
 * Template Name: Podcast
 *
 * Custom template for home page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<!-- == Home == -->
<main class="site-main home-page" id="main" role="main">
  <section class="section podcast-intro">
    <div class="container">
      <div class="text-center">
        <img class="logo" src="https://himmer-center.s3.us-east-2.amazonaws.com/authentically-you-logo-og.png" alt="authentically you">
        <p class="podcast-author">Podcast hosted by Richard &amp; Cheri Himmer</p>
        <p class="podcast-produce">Produced by <a href="#">Social Bytes Radio</a></p>
      </div>
      <div class="row mt-5">
        <div class="col d-none d-sm-block">
          <img class="profile-img" src="https://himmer-center.s3.us-east-2.amazonaws.com/richard-profile-bright-square.jpg">
        </div>
        <div class="col-12 col-lg-6">
          <p>We address why there is so much pain and misery in the world and how anyone can create their own heaven on earth. It starts with prioritizing oneself. Everyone has an authentic self. Find him/her and you find happiness, joy, and well-being.</p>
        </div>
        <div class="col d-none d-sm-block">
          <img class="profile-img yellow" src="https://himmer-center.s3.us-east-2.amazonaws.com/cheri-profile-square.jpg">
        </div>
      </div>
    </div>
  </section>
  <section class="section podcast-recordings">
    <div class="container">
          <a class="spreaker-player" href="https://www.spreaker.com/show/authentically-you-richard-cheri-himmer" data-resource="show_id=2671346" data-theme="light" data-autoplay="false" data-playlist="show" data-cover="https://d3wo5wojvuv7l.cloudfront.net/images.spreaker.com/original/f01a980ebcbc9b081c24ae2086539791.jpg" data-width="100%" data-height="1000px">Listen to "AUTHENTICALLY YOU - THE HIMMERS" on Spreaker.</a><script async src="https://widget.spreaker.com/widgets.js"></script>
    </div>
  </section>
</main><!-- #main -->


<?php get_footer(); ?>
