<?php
/**
 * Template Name: About
 *
 * Custom template for About page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<!-- == Home == -->
<main class="site-main about-page" id="main" role="main">
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h1>About Dr. Himmer</h1>
          <p>Dr. Himmer is a Professional Keynote speaker and workshop facilitator. He is an author and organizational consultant. He coaches executives, entrepreneurs, couples, parents, and individuals who want to transform and grow.</p> 
          <p>He received his bachelors degree from Brigham Young University, his MBA from City University, his masters in psychology and his PhD in Industrial/Organizational psychology from Walden University.</p>
        </div>
        <div class="col-12 col-md-6">
          <img src="">
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/KHxVxO1R880" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </section>

</main><!-- #main -->


<?php get_footer(); ?>
