<?php
/*
Template Name: Utgave 21
*/

// Set latest issue number
$currentIssue = 21;
$previousIssue = $currentIssue - 1;
$linkPrevious = '/utgave-' . $previousIssue;

if ( has_post_thumbnail() ) {
    $featuredUrl = get_the_post_thumbnail_url();
    list($width, $height, $type, $attr) = getimagesize( $featuredUrl );
    $aspectRatio = $width / $height;
} else {
    $aspectRatio = 2;
}

$utgave = $_GET['utgave'];

$currentIssue = $utgave;

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
                    
                    echo '<div class="frontpage-margin hidden-md-down" style="margin-top: 10vh !important; display: flex; align-items: center;">
                            <div id="siste-saker" class="mest-lest">
                                Siste saker
                            </div>
                          </div>';

            endwhile;
            }

            while ($the_query_nonsticky->have_posts()) : $the_query_nonsticky->the_post(); 



                
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

            endwhile;
?>

        <div id="" class="frontpage-margin neste-utgave feed-item component portrait neste-utgave" style="background-color: #f9f7f1 !important; box-shadow: none !important; ">
        <a class="no-decoration frontpage-margin neste-utgave feed-item component portrait" href="<?php echo $linkPrevious ?>" style="background-color: #f9f7f1 !important; ">
          <div id="line-button" class="to-next-issue feed-text-container" style="flex: 2 !important; text-align: center;" >
                <span class="nestensvart" style="white-space: nowrap; ">Gå til forrige utgave</span>
          </div>
           <div class="feed-image-container " style="background-color: #f9f7f1 !important; border: 1px solid gray; ">
              <img style="" class="feed-image inline img-fluid" src="/wp-content/uploads/forsider/utgave<?php echo $previousIssue; ?>.jpg">
          </div>
        </a>
        </div>

<?php

            }

// putte inn #endloop div her hvis jeg får jquery til helvete
/* helvete hva skal jeg bruke denne til nå haha
                echo "

        <nav class='nav-issue ' style='display: none; content: ''; position: absolute; text-align: center; display: block;
        vertical-align: baseline; z-index: -1;'>
            <a style=' transform: rotate(90deg) translateX(50%); left: 87vw; display: block; position: fixed; top: calc(50% - 175px); font-weight: 400; letter-spacing: .18417em; text-transform: uppercase; margin: 0 0 0 0; padding: 0; border: 0; white-space: nowrap; font-size: 26px; font-family: 'Roboto', sans-serif; vertical-align: baseline; text-align: center;' href='http://www.vg.no'>Gå til<br />Forrige utgave
            </a>
        </nav>

                ";

?>

                <script>

$(window).scroll(function(){
        var elementoffset = $('#logoMenu').offset().top; // <<< change #elementhere with your element you want the scroll to make action when reach it
        // var interval = setInterval(function() {                         
        if ($(this).scrollTop() > 1500) { // forbi siste saker
            $('.nav-issue').fadeIn('slow');
        } else {
            $(".nav-issue").removeAttr('style').css("display","none");
        }
     });
</script>

<?php */
        endif; 
    wp_reset_query();

get_footer(); 