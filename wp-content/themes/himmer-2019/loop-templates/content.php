<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- == Content == -->
<article <?php post_class('col-lg-4 col-md-6 col-sm-12'); ?> id="post-<?php the_ID(); ?>">
	<div class="card">
		<!-- Header image | content-single -->
		<?php $image = get_field('header_image'); ?>
		<?php $image_caption = get_field('header_image_credit'); ?>
		<?php if ($image): ?>
		<figure class="entry-header-figure">
			<img class="entry-header-image" src="<?php echo $image['url']; ?>" alt="<?php echo get_the_title(get_field('header_image')) ?>" />
		</figure>
		<?php endif; ?>

		<header class="entry-header">

			<?php
			the_title(
				sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?>

			<?php if ( 'post' == get_post_type() ) : ?>

				<div class="entry-meta">
					<?php understrap_posted_on(); ?>
				</div><!-- .entry-meta -->

			<?php endif; ?>

		</header><!-- .entry-header -->

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		<div class="entry-content">

			<?php
			// the_excerpt();
			echo get_excerpt();
			?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>

		</div><!-- .entry-content -->

		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
