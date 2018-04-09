<?php
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
 * Config variables
 *
 */

if ( isset( $_GET['utgave'] ) ) {
  $currentIssue = $_GET['utgave'];
} else {
  $currentIssue = 22;
}

$previousIssue = $currentIssue - 1;
$linkPrevious = '/?utgave=' . $previousIssue;

get_header(); 

        if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 style="" class=""><?php single_post_title(); ?></h1>
                </header>

            <?php
            endif;

    $currentIssueCat = 'Utgave ' . $currentIssue; 
    $sticky = get_option( 'sticky_posts' );

    $args_nonsticky = array(
        'showposts'     => -1,
        'category_name' => $currentIssueCat,
        'post__not_in' => $sticky
    );

    $args_sticky = array(
        'posts_per_page' => -1,
        'category_name' => $currentIssueCat,
        'post__in'  => $sticky
    );

    $the_query_sticky = new WP_Query($args_sticky); 
    $the_query_nonsticky = new WP_Query($args_nonsticky);

    if( !$the_query_sticky -> have_posts() && !$the_query_nonsticky -> have_posts() ) {
        echo "<span style='padding: 150px;'>Finner ingen artikler. Husk at forsiden leter etter artikler i kategorien «Utgave xx» hvor xx defineres i admin dashboard -> theme options. Nå er den satt til å vise utgave </span>" . $currentIssue; 
    } else {              

        if ( $sticky ) {
            while ($the_query_sticky->have_posts()) : $the_query_sticky->the_post();

                require( get_template_directory() . '/template-parts/content-aside.php' );

                require( get_template_directory() . '/template-parts/mostread.php' );
                    
                    echo '<div class="frontpage-margin hidden-md-down" style="margin-top: 10vh !important;">
                            <div id="siste-saker" class="mest-lest">
                                Siste saker
                            </div>
                          </div>';

            endwhile;
            }

            while ($the_query_nonsticky->have_posts()) : $the_query_nonsticky->the_post(); 

if ( has_post_thumbnail() ) {
    $featuredUrl = get_the_post_thumbnail_url();
    $getImageSize = getimagesize( $featuredUrl );
    list($width, $height, $type, $attr) = $getImageSize;
    $aspectRatio = $width / $height;

    if ( $aspectRatio > 1.08 ) {
        update_field( 'field_5a9de66d2f548', 'landskap' );
    } else {
        update_field( 'field_5a9de66d2f548', 'portrett' );
    }

} else {
  update_field( 'field_5a9de66d2f548', 'na' );
}

                
                // these posts have drawings which is best a bit smaller than usual
                if ( in_category( 'bergen-revels' ) or in_category( 'quiz' ) or in_category( 'leder' ) ) {
                    require( get_template_directory() . '/template-parts/force-smaller-img.php' );
                // if post format is standard, get_post_format actually returns null (!). Hence we want to require content-standard.php
                } elseif ( empty( get_post_format() ) ) {
                    require( get_template_directory() . '/template-parts/content-standard.php' );
                // else we can fetch template file for the format, e.g. content-aside.php for cover (renamed in functions.php)
                }  else {
                    get_template_part('template-parts/content', get_post_format() ); 
                }

            endwhile;

            }
/*

This doesnt work because it only gets the aspect ratio of first post. Maybe not 100% correct implementation of the query loop
elseif ( $aspectRatio > 2.6 ) {
                    require( get_template_directory() . '/template-parts/content-chat.php' );
                // if post format is standard, get_post_format actually returns null (!). Hence we want to require content-standard.php
                }
*/
        endif; 
    wp_reset_query();

    if ($currentIssue > 1) {
        ?> <div id="next-issue-nav" class="frontpage-margin neste-utgave feed-item component portrait neste-utgave" style="background-color: #f9f7f1 !important; box-shadow: none !important; ">
        <a class="no-decoration frontpage-margin neste-utgave feed-item component portrait" href="<?php echo $linkPrevious ?>" style="background-color: #f9f7f1 !important; ">
          <div id="line-button" class="to-next-issue feed-text-container" style="flex: 2 !important; text-align: center; padding: 15px 0;" >
                <span class="nestensvart" style="white-space: nowrap; ">Gå til utgave <div style="font-family: 'Ludacrys', serif; display: inline;"> #</div><?php echo $previousIssue; ?></span>
          </div>
           <div class="feed-image-container" style="background-color: #f9f7f1 !important; border-right: 0 !important;">
              <img style="" class="feed-image inline img-fluid issue-nav-img" src="/wp-content/uploads/forsider/utgave<?php echo $previousIssue ?>.jpg">
          </div>
        </a>
        </div>
        <?php
    } ?>

        <!-- <span style="white-space: nowrap;">utgave <i class="fa fa-angle-right rotate-mobile" style="font-weight: 400; padding-left: 10px;" aria-hidden="true"></i></span> -->

<?php

get_footer(); 