<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Stoffu
 */


get_header(); 

get_search_form();

		if ( have_posts() ) :

			// fetches searchform.php, defined in /wp-includes/general-template.php
			
			
			/* Start the Loop */
			while ( have_posts() ) : the_post();

$getImageSize = @getimagesize( $featuredUrl );

if ( $getImageSize ) {
	$featuredUrl = get_the_post_thumbnail_url();
    list($width, $height, $type, $attr) = $getImageSize;
    $aspectRatio = $width / $height;

} else {
  $aspectRatio = 2;
}

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				
				// fetch aspect ratio and give wide layout for wide pictures
    			if ( $aspectRatio > 3 ) {
    				require( get_template_directory() . '/template-parts/content-chat.php' );
    			} elseif ( empty( get_post_format() ) ) {
    				require( get_template_directory() . '/template-parts/content-standard.php' );
    			// if post format is standard, get_post_format actually returns null (!). Hence we want to require content-standard.php
    			} else {
    				?> <div class="hidden-lg-up" style="height: 50px;"></div> <?php
    				// else we can fetch template file for the format, e.g. content-aside.php for cover (renamed in functions.php)
    				get_template_part('template-parts/content', get_post_format() ); 
    			}
				

			endwhile; ?>

			<!-- Post navigation -->

<!-- Post navigation -->

<div class="posts-link-navigation" style="display: flex; justify-content: center; align-items: center; margin: 70px 0 70px 0; flex-direction: column;">
 
<?php

if ( get_previous_posts_link() ) {

		previous_posts_link( '<div id="line-button" style="display: flex; white-space: nowrap; color: black !important; font-size: 50px; font-weight: 200; padding: 5px 0 5px 0;"><span>TILBAKE</span></div><br /> <br /> <br />' );
    		
	}
 
?>

   <div id="line-button" class="hyphenate" style="display: flex; font-size: 50px; font-weight: 200; ">
    		<span><?php next_posts_link( 'FLERE SØKERESULTATER' ); ?></span>
    	</div>

</div>

   <?php
   
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


<?php
get_footer();
