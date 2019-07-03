<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- == Content page == -->
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<header class="entry-header">
			<div class="<?php echo esc_attr( $container ); ?>">

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			</div><!-- .container -->

		</header><!-- .entry-header -->

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		<div class="entry-content">
			<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

				<?php the_content(); ?>

				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- #content .container -->
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<div class="<?php echo esc_attr( $container ); ?>">

			<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

			</div><!-- .container -->
		</footer><!-- .entry-footer -->
</article><!-- #post-## -->
