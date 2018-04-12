<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stoffu
 */

/*
$featuredUrl = get_the_post_thumbnail_url();

$getImageSize = @getimagesize( $featuredUrl );

if ( $getImageSize ) {

    list($width, $height, $type, $attr) = $getImageSize;
    $aspectRatio = $width / $height;

} else {
  $aspectRatio = 2;
}

*/


		// checks if article is single, ie. not on home page

		if ( is_single() ) {  
			 

			// fetches field from advanced custom field plugin, a required field in wordpress editor. Can be portrett, vanlig or fullbredde. Requires respective template from file.
			if ( get_field( 'layout' ) == 'portrett' ) { 
				require(get_template_directory() . '/template-parts/single/single-portrait.php' );
			} elseif ( get_field( 'layout' ) == 'landskap' or 'chat' == get_post_format() ) { // 
				require( get_template_directory() . '/template-parts/single/single-landscape.php' );
			// if layout set to no img, e.g. bergen revels or similar
			} elseif ( get_field( 'layout' ) == 'na' ) { 
				require( get_template_directory() . '/template-parts/single/single-noimg.php' );
			// if an article doesnt have a featured img
			} elseif ( !has_post_thumbnail() ) { // 
				require( get_template_directory() . '/template-parts/single/single-noimg.php' );
			// fallback on landscape because the template fits all articles ... well dont really know why but why not
			} /* elseif ( $aspectRatio <= 1.08 ) { // 
				require(get_template_directory() . '/template-parts/single/single-portrait.php' );
			// fallback on landscape because the template fits all articles ... well dont really know why but why not
			} elseif ( $aspectRatio > 1.08 ) { // 
				require( get_template_directory() . '/template-parts/single/single-landscape.php' );
			// fallback on landscape because the template fits all articles ... well dont really know why but why not
			} */ else {
				require( get_template_directory() . '/template-parts/single/single-landscape.php' );
			}
		// or else its on the home page, and we want to get their respective template 
		} else {
			get_template_part( 'template-parts/content', get_post_format() );
		}
		

		// post format 'standard' gets its template from content.php -> content-standard.php; the others pick them up from their respective content-get_post_format().php

		?>
