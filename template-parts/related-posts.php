<?php



// previous_post_link('%link',"$prevthumbnail  <p>%title</p>", TRUE);  test

$prevPost = get_adjacent_post(false, '', true); // previous means older posts. next posts will throw an error for newest article
$prevPostUrl = get_permalink($prevPost);
$prevThumbnail = get_the_post_thumbnail_url($prevPost->ID, array(600,999) );
$prevExcerpt = $prevPost->post_excerpt;
$prevExcerptTrimmed = wp_trim_words( $prevExcerpt, 30,'…' );

$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$trimmedExcerpt = wp_trim_words( $excerpt, 30,'…' );
$postUrl = esc_url( get_permalink() );

$dateDay = get_the_date('j');
$dateMonth = get_the_date('F');
$dateYear = get_the_date('Y');

$months = array('', 'januar', 'februar', 'mars', 'april', 'mai', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'desember');
 
$month = $months[get_the_date('n')];
?>

<div class="hidden-md-up frontpage-margin" style="">
  <div id="neste-artikkel" class="mest-lest">
    Neste artikkel
  </div>
</div>

<article class="hidden-md-up frontpage-margin feed-item component portrait" style="margin-top: 30px; margin-bottom: 30px;">
<a class="no-decoration frontpage-margin feed-item component portrait" href="<?php echo $prevPostUrl . '?next'; ?>" style="">
   <div class="feed-image-container" style="">
      <img style="background-color: white;" class="feed-image inline img-fluid" src="<?php echo $prevThumbnail; ?>">
  </div>
  <div class="feed-text-container" style="" >
        <span class="nestensvart overskrift" style="font-size: 26px !important;"><?php echo $prevPost->post_title ?></span><br style="line-height: 2vh;">
        <span class="graytext byline" style="font-size: 16px !important; line-height: 1.25;"><?php echo $prevExcerptTrimmed ?></span>
  </div>
</a>
</article>

<?php

$exclude = get_option( 'sticky_posts' );
$exclude[] = get_the_ID();

$related_posts = array();
$query = array();

if ( class_exists( 'Jetpack_RelatedPosts' ) && method_exists( 'Jetpack_RelatedPosts', 'init_raw' ) ) :
    $related = Jetpack_RelatedPosts::init_raw()
     ->set_query_name( 'theme-custom' ) // optional
     ->get_for_post_id( get_the_ID(), array( 'size' => 6 ) // 'size' => $query['showposts']
  );
  if ( $related ) :
     foreach ( $related as $result ) :
        $related_posts[] = $result[ 'id' ];
     endforeach;
  endif;
endif;

if ( $related_posts ) {
  $query['post__in'] = $related_posts;
  $query['ignore_sticky_posts'] = 1; // $query['post__not_in'] = $exclude; <-- this works, but we want to include sticky posts, just skip the sticky behavior
  $query['orderby'] = 'post__in';
  // $query['category__not_in'] = 17; this hides related for bergen revels, but the mer lesestoff header is still there, which is stupid.
  $title = __( 'Related', 'prefix' );
  echo "<div class='related-posts-container frontpage-margin' style='padding-left: 37px; display: flex; margin-bottom: 0; margin-top: 50px;''>
  <div id='mest-lest' class='mest-lest'>
    Mer lesestoff
  </div>
</div>";
} else {
  $query['post__not_in'] = array( $post->ID );
}
?>




<div id="related-posts-container">
  
<?php $related = new WP_Query( $query ); 
          while ( $related->have_posts() ) : $related->the_post(); 

$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$trimmedExcerpt = wp_trim_words( $excerpt, 30,'…' );
$postUrl = esc_url( get_permalink() ) . '?related';
$dateDay = get_the_date('j');
$dateMonth = get_the_date('F');
$dateYear = get_the_date('Y');

$months = array('', 'januar', 'februar', 'mars', 'april', 'mai', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'desember');
 
$month = $months[get_the_date('n')];

// these posts have drawings which is best a bit smaller than usual
                if ( in_category( 'bergen-revels' ) or in_category( 'quiz' ) or in_category( 'leder' ) ) {
                    require( get_template_directory() . '/template-parts/force-smaller-img.php' );
                // if post format is standard, get_post_format actually returns null (!). Hence we want to require content-standard.php
                } elseif ( empty( get_post_format() ) ) {
?>

<?php

$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$trimmedExcerpt = wp_trim_words( $excerpt, 30,'…' );
$postUrl = esc_url( get_permalink() ) . '?related';
// post id -<?php the_ID(); phpend

$dateDay = get_the_date('j');
$dateMonth = get_the_date('F');
$dateYear = get_the_date('Y');

$months = array('', 'januar', 'februar', 'mars', 'april', 'mai', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'desember');
 
$month = $months[get_the_date('n')];

?>

<article id="content-standard" class="frontpage-margin feed-item component portrait feed-box-border hidden-sm-down" style="margin-top: 30px; margin-bottom: 30px;">
<a class="no-decoration frontpage-margin feed-item component portrait feed-box-border" href="<?php echo $postUrl; ?>" style="">
   <div class="feed-image-container" style="">
      <img style="" class="feed-image inline img-fluid" src="<?php the_post_thumbnail_url( array(900,9999) ); ?>">
  </div>
  <div class="feed-text-container" style="" >
    <span class="graytext kategori">
      <?php require(get_template_directory() . '/template-parts/emneknagg.php');  ?><br />
    </span>
        <span class="nestensvart overskrift"><?php echo $postTitle; ?></span><br style="line-height: 2vh;">
        <span class="graytext byline"><?php echo $trimmedExcerpt; ?></span>
        <?php if ( get_field( 'journalist' ) ) {
          echo "<br /><span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'>&mdash; " . get_field( 'journalist' ) . ", " . $dateDay . ". " . $month . " " . $dateYear . "</span>";
        } else {
          echo "<span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'><br />" . $dateDay . ". " . $month . " " . $dateYear . "</span>";
        }
         ?>
  </div>
</a>
</article>

<!-- ************ MOBILE -->
<article id="content-standard" class="hidden-md-up feed-item component portrait" style="">
<a class="no-decoration frontpage-margin feed-item component portrait feed-box-border" href="<?php echo $postUrl; ?>" style="">
   <div class="feed-image-container" style="">
      <img style="" class="feed-image inline img-fluid" src="<?php the_post_thumbnail_url( array(900,9999) ); ?>">
  </div>
  <div class="feed-text-container" style="" >
    <span class="graytext" style="font-size: 12px; font-weight: 100;
  font-family: 'Roboto', sans-serif;">
      <?php require(get_template_directory() . '/template-parts/emneknagg.php');  ?><br />
    </span>
        <span class="" style="font-size: 26px; font-family: 'Ludacrys', serif"><?php echo $postTitle; ?></span><br style="line-height: 2vh;">
        <span style="font-size: 16px; line-height: 1.25;" class=""><?php echo $trimmedExcerpt; ?></span>
        <?php echo "<span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100; font-size: 10px;'><br />" . $dateDay . ". " . $month . " " . $dateYear . "</span>"; ?>
  </div>
</a>
</article>

<?php
                // fallback to content-standard.php
                } else {
                    require( get_template_directory() . '/template-parts/content-standard.php' );
                }

 endwhile; ?>

</div> <!-- id="related-posts-container" -->

    <?php wp_reset_query(); ?>