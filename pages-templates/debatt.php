<?php
/*
Template Name: Debatt
*/

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stoffu
 */

get_header(); 

if ( isset( $_GET['kategori'] ) ) {
  $categoryName = $_GET['kategori'];
} else {
  $categoryName = 'debatt';
}

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
    'post_type' => 'post',
    // 'post_per_page' => 3,
    'paged' => $paged,
    'category_name' => $categoryName,
);


$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :

    while ( $arr_posts->have_posts() ) :

        $arr_posts->the_post();

                // these posts have drawings which is best a bit smaller than usual
                if ( in_category( 'bergen-revels' ) or in_category( 'quiz' ) or in_category( 'leder' ) ) {
                    require( get_template_directory() . '/template-parts/force-smaller-img.php' );
                // if post format is standard, get_post_format actually returns null (!). Hence we want to require content-standard.php
                } elseif ( empty( get_post_format() ) ) {
                    require( get_template_directory() . '/template-parts/content-standard.php' );
                // fetch aspect ratio and give wide layout for wide pictures
                } elseif ( $aspectRatio > 3 ) {
                    require( get_template_directory() . '/template-parts/content-chat.php' );
                // else we can fetch template file for the format, e.g. content-aside.php for cover (renamed in functions.php)
                } else {
                    get_template_part('template-parts/content', get_post_format() ); 
                }
     
    endwhile; ?>
<!-- Post navigation -->

<div class="posts-link-navigation" style="display: flex; justify-content: center; align-items: center; margin: 70px 0 70px 0; flex-direction: column;">
 
<?php

if ( get_previous_posts_link() ) {

        previous_posts_link( '<div id="line-button" style="display: flex; white-space: nowrap; font-size: 50px; font-weight: 200; padding: 5px 0 5px 0;"><span>TILBAKE</span></div><br /> <br /> <br />', $arr_posts->max_num_pages );
            
    }
 
?>

   <div id="line-button" style="display: flex; white-space: nowrap; text-transform: uppercase; font-size: 50px; font-weight: 200; ">
            <span><?php next_posts_link( 'Mer debattstoff', $arr_posts->max_num_pages ); ?></span>
        </div>

</div>

   <?php
   
endif; 

wp_reset_query();

get_footer(); 
