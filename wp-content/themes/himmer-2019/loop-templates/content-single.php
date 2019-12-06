<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!-- == Content single == -->
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<div class="container">
			<?php
				if ( is_singular( 'event' ) ) {
					echo '<h2 class="event-label">Event</h2>';
				}
			?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">
				<?php
					$author_id = get_the_author_meta('ID');
					$author_badge = get_field('author_badge', 'user_'. $author_id );
				?>
				<img class="author-badge" src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" />
				<div class="entry-meta-data">
					<?php understrap_posted_on(); ?>
				</div>
			</div><!-- .entry-meta -->
		</div><!-- .container -->
	</header><!-- .entry-header -->

	<!-- Header image | content-single -->
	<?php $image = get_field('header_image'); ?>
	<?php $image_caption = get_field('header_image_credit'); ?>
	<?php if ($image): ?>
	<figure class="entry-header-figure">
		<img class="entry-header-image" src="<?php echo $image['url']; ?>" alt="<?php echo get_the_title(get_field('header_image')) ?>" />
		<?php if ($image_caption): ?>
			<figcaption class="entry-header-image-credit"><?php the_field('header_image_credit'); ?> </figcaption>
		<?php endif; ?>
	</figure>
	<?php endif; ?>

	<!-- Event details | content-single -->
	<?php $event_date = get_field('event_date'); ?>
	<?php $event_time = get_field('event_time'); ?>
	<?php $event_venue_name = get_field('event_venue_name'); ?>
	<?php $event_venue_address = get_field('event_venue_address'); ?>
	<?php if ($event_date): ?>
	<aside class="event-details">
		<div class="container">
			<div class="row">
				<div class="col">
						<time><?php the_field('event_date'); ?></time>
				</div><!-- .col -->
				<div class="col">
						<time><?php the_field('event_time'); ?></time>
				</div><!-- .col -->
				<div class="col">
					<address>
						<span class="event-venue-name"><?php the_field('event_venue_name'); ?></span>
						<a href="#map" class="event-venue-address"><?php the_field('event_venue_address'); ?></a>
					</address>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</aside>
	<?php endif; ?>

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
		<div class="container">
			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .container -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

	<!-- Event map | content-single -->
	<?php $event_map_coord = get_field('event_google_map_embed'); ?>
	<?php if ($event_map_coord): ?>
		<aside class="event-map">
			<?php the_field('event_google_map_embed'); ?>
		</aside>
	<?php endif; ?>


</article><!-- #post-## -->
