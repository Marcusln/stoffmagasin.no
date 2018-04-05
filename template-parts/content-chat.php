<?php
/**
 * Template file for articles with wide pictures. When post format is chat (renamed to chat in functions.php), it gets its template from this file. If single, it will require content-single.php, else it will use HTML below. This template will also be loaded if aspect ratio is above 3, ref index.php
 */

 if ( is_single() ) {
  require(get_template_directory() . '/template-parts/single/single-landscape.php');
}
  else { 

$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$postUrl = esc_url( get_permalink() );

$dateDay = get_the_date('j');
$dateMonth = get_the_date('F');
$dateYear = get_the_date('Y');

$months = array('', 'januar', 'februar', 'mars', 'april', 'mai', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'desember');
 
$month = $months[get_the_date('n')];

?>

<article id="content-chat" class="hidden-sm-down frontpage-margin feed-item component ultra-wide" style="margin-bottom: 30px;">
  <a href="<?php echo $postUrl; ?>" class="no-decoration frontpage-margin">
	<div class="feed-image-container">
			<img class="feed-image inline img-fluid" src="<?php the_post_thumbnail_url( array( 2000, 800 ) ); ?>">
	</div>
	<div class="feed-text-container" style="background-color: white !important;">
			<span class="graytext kategori">
        <?php require(get_template_directory() . '/template-parts/emneknagg.php');  ?>
      </span><br />
        <span class="" style="font-size: 36px; font-family: 'Ludacrys', serif"><?php echo $postTitle; ?></span><br style="line-height: 2vh;">
        <span class=" byline"><?php echo $excerpt; ?></span>
        <?php if ( get_field( 'journalist' ) ) {
          echo "<br /><span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'>&mdash; " . get_field( 'journalist' ) . ", " . $dateDay . ". " . $month . " " . $dateYear . "</span>";
        } else {
          echo "<span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'><br />" . $dateDay . ". " . $month . " " . $dateYear . "</span>";
        }
         ?>
	</div>

</a>
</article>

<article id="content-chat" class="hidden-md-up  feed-item component ultra-wide" style="margin-bottom: 10px;">
  <a href="<?php echo $postUrl; ?>" class="no-decoration ">
  <div class="feed-image-container">
      <img class="feed-image inline img-fluid" src="<?php the_post_thumbnail_url( array( 2000, 800 ) ); ?>">
  </div>
  <div class="feed-text-container" style="background-color: white !important;">
      <span class="graytext kategori">
        <?php require(get_template_directory() . '/template-parts/emneknagg.php');  ?>
      </span><br />
        <span class="" style="font-size: 26px; line-height: 30px; font-family: 'Ludacrys', serif"><?php echo $postTitle; ?></span><br style="line-height: 2vh;">
        <span style="font-size: 16px; font-family: 'Roboto', sans-serif; line-height: 1.25"><?php echo $excerpt; ?></span>
        <?php if ( get_field( 'journalist' ) ) {
          echo "<br /><span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100; font-size: 10px;'>&mdash; " . get_field( 'journalist' ) . ", " . $dateDay . ". " . $month . " " . $dateYear . "</span>";
        } else {
          echo "<span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'><br />" . $dateDay . ". " . $month . " " . $dateYear . "</span>";
        }
         ?>
  </div>

</a>
</article>

<?php //else close

} ?>
