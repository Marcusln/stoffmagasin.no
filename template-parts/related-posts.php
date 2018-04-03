<?php



// previous_post_link('%link',"$prevthumbnail  <p>%title</p>", TRUE); 

$prevPost = get_adjacent_post(false, '', true); // previous means older posts. next posts will throw an error for newest article
$prevPostUrl = get_permalink($prevPost);
$prevThumbnail = get_the_post_thumbnail_url($prevPost->ID, 'medium');
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

<div class="related-posts-container hidden-md-up frontpage-margin" style="display: flex; align-items: center;">
  <div id="mest-lest" class="mest-lest">
    Neste artikkel
  </div>
</div>

<article class="hidden-md-up frontpage-margin feed-item component portrait feed-box-border" style="margin-top: 30px; margin-bottom: 30px;">
<a class="no-decoration frontpage-margin feed-item component portrait feed-box-border" href="<?php echo $postUrl; ?>" style="">
   <div class="feed-image-container" style="">
      <img style="" class="feed-image inline img-fluid" src="<?php the_post_thumbnail_url( array(600,999) ); ?>">
  </div>
  <div class="feed-text-container" style="" >
    <span class="graytext kategori">
      <?php require(get_template_directory() . '/template-parts/emneknagg.php');  ?><br />
    </span>
        <span class="nestensvart overskrift"><?php echo $postTitle; ?></span><br style="line-height: 2vh;">
        <span class="graytext byline"><?php echo $trimmedExcerpt; ?></span>
        <?php if ( get_field( 'journalist' ) ) {
          echo "<br /><span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'>&mdash; " . get_field( 'journalist' ) . "</span>";
        }
          echo "<span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'><br />" . $dateDay . ". " . $month . " " . $dateYear . "</span>";
         ?>
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
  $title = __( 'Related', 'prefix' );
} else {
  $query['post__not_in'] = array( $post->ID );
}
?>


<div class="related-posts-container frontpage-margin " style=" padding-left: 37px; display: flex; margin-bottom: 0;">
  <div id="mest-lest" class="mest-lest">
    Mer lesestoff
  </div>
</div>





<?php $related = new WP_Query( $query ); 
          while ( $related->have_posts() ) : $related->the_post(); 

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

<article class="frontpage-margin feed-item component portrait feed-box-border" style="margin-top: 30px; margin-bottom: 30px;">
<a class="no-decoration frontpage-margin feed-item component portrait feed-box-border" href="<?php echo $postUrl; ?>" style="">
   <div class="feed-image-container" style="">
      <img style="" class="feed-image inline img-fluid" src="<?php the_post_thumbnail_url( array(600,999) ); ?>">
  </div>
  <div class="feed-text-container" style="" >
    <span class="graytext kategori">
      <?php require(get_template_directory() . '/template-parts/emneknagg.php');  ?><br />
    </span>
        <span class="nestensvart overskrift"><?php echo $postTitle; ?></span><br style="line-height: 2vh;">
        <span class="graytext byline"><?php echo $trimmedExcerpt; ?></span>
        <?php if ( get_field( 'journalist' ) ) {
          echo "<br /><span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'>&mdash; " . get_field( 'journalist' ) . "</span>";
        }
          echo "<span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'><br />" . $dateDay . ". " . $month . " " . $dateYear . "</span>";
         ?>
  </div>
</a>
</article>

<?php endwhile; ?>


    <?php wp_reset_query(); ?>