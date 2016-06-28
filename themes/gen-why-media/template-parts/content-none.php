<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package Genwhy_Theme
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html( 'Nothing Found' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>

		<?php else : ?>

			<p>It seems we can't find what you're looking for. Perhaps searching can help.</p>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
