<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<!-- == Index == -->
<main class="site-main index" id="main">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'loop-templates/content', get_post_format() );
					?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'loop-templates/content', 'none' ); ?>

			<?php endif; ?>
		</div><!-- .row -->

		<!-- The pagination component -->
		<?php understrap_pagination(); ?>

	</div><!-- .container -->
	<section class="section subscribe">
		<div class="container">
			<h2 class="font_2_5">Subscribe to life-long learning</h2>
			<p class="font_1_5 m_b_2">When I write and publish something, you will be the first to know.
			<!-- Begin Mailchimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				#mc_embed_signup{clear:left;}
				/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
					 We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
			<div id="mc_embed_signup">
				<form action="https://richardhimmer.us1.list-manage.com/subscribe/post?u=68d5e4f7f59a3de29f91f3455&amp;id=abd7145f2e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div class="input-group input-group-lg">
						<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="your@email.com">
					</div>
					<div class="row m_t_2">
						<div class="col-6 col-lg-6 col-md-12 col-sm-12 input-group-lg">
							<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="First name">
						</div>
						<div class="col-6 col-lg-6 col-md-12 col-sm-12 input-group-lg">
							<input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME" placeholder="Last name">
						</div>
					</div><!-- .row .mc_embed_signup_scroll -->
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn-lg btn-dark">
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_68d5e4f7f59a3de29f91f3455_abd7145f2e" tabindex="-1" value=""></div>
					<div class="clear"></div>
				</form>
			</div>
			<!--End mc_embed_signup-->
		</div><!-- .container -->
	</section>

</main><!-- #main -->


<?php get_footer(); ?>
