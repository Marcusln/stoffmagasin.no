<?php
/*
Template Name: Samfunn
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

/**
 * Hardcoded configurations
 *
 */

get_header(); 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
    'post_type' => 'post',
    'paged' => $paged,
    'posts_per_page' => 20,
    'category_name' => 'samfunn',
);


$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :

    while ( $arr_posts->have_posts() ) :

        $arr_posts->the_post();

             
     require(get_template_directory() . '/template-parts/content-standard.php');
     

 // get_template_part('template-parts/content', get_post_format() );

    endwhile; 

    next_posts_link( 'Older Entries', $arr_posts->max_num_pages );

    wp_reset_postdata(); 

endif;

