<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stoffu
 */

?>

<section class="">

	<div class="">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'stoffu' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) :

          require(get_template_directory() . '/search-failed.php');

		else :

			echo "<div class='hidden-md-down nesten-svart' style='font-family: 'LudacrysStencil', serif; font-size: 200px; display: flex; justify-content: center; align-items: center;'>404</div>";

				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
