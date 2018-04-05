<?php

$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$trimmedExcerpt = wp_trim_words( $excerpt, 30,'…' );
$postUrl = esc_url( get_permalink() );
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
        <?php if ( get_field( 'journalist' ) ) {
          echo "<br /><span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100; font-size: 10px;'>&mdash; " . get_field( 'journalist' ) . ", " . $dateDay . ". " . $month . " " . $dateYear . "</span>";
        } else {
          echo "<span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100; font-size: 10px;'><br />" . $dateDay . ". " . $month . " " . $dateYear . "</span>";
        }
         ?>
  </div>
</a>
</article>