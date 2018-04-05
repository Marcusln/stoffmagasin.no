<?php
/**
 * Template file for cover design. When post format is aside (renamed to cover in functions.php), it gets its template from this file. If single, it will require content-single.php, else it will use HTML below.
 */

 if ( is_single() ) {
  require(get_template_directory() . '/template-parts/content-single.php');
}
  else { ?>

<!-- Else open -->

<?php
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$postUrl = esc_url( get_permalink() );
$trimmedExcerpt = wp_trim_words( $excerpt, 30,'…' );

$dateDay = get_the_date('j');
$dateMonth = get_the_date('F');
$dateYear = get_the_date('Y');

$months = array('', 'januar', 'februar', 'mars', 'april', 'mai', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'desember');
 
$month = $months[get_the_date('n')];
?>

<script>
// Script for giving cover-box margin-bottom a minimum of 50px, will crop image if necessary

  $(function() {
    // 100% of screen height - height of top bar - height of logo - height of menu + 50px (latter to account for 100px margin top on #logo)
    calcCoverHeight = $(window).outerHeight(true) - $('#topbar').outerHeight(true) - $('#logo').outerHeight(true) - $('#logoMenu').outerHeight(true) - 170; // dont know why 170, maybe figure out a vakker dag
    $('#cover').css('max-height', calcCoverHeight + 'px');
  });

</script>

<!--
  ********************** DESKTOP ***************** -->

<article id="cover" class="hidden-md-down feed-item component cover feed-box-border frontpage-margin" style="background-color: black; box-shadow: 3px 5px #f0ebdb;">
<a class="feed-item component cover feed-box-border frontpage-margin" href="<?php echo $postUrl; ?>" style="text-decoration: none; color: black; background-color: black;">
  <div class="feed-image-container" style="background-color: black !important; max-height: 70vh;">
    <img style="" class="feed-image inline img-fluid" style="" src="<?php the_post_thumbnail_url( array(900,1400) ); ?>">
  </div>
  <div class="feed-text-container" style="background-color: black;" >
    <span class="kategori" style="padding-bottom: 1em; color: white;">FORSIDESTOFF</span><br />
        <span class="overskrift-cover hyphenate" style="color: white;"><?php echo $postTitle; ?></span><br style="line-height: 2vh;">
        <span class="byline-cover" style="color: white; font-family: 'Roboto', sans-serif;"><?php echo $excerpt; ?></span><br />
        <?php if ( get_field( 'journalist' ) ) {
          echo "<br /><span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'>&mdash; " . get_field( 'journalist' ) . "</span>";
        } 
         ?>
  </div>
</a>
</article>


<!--
  ********************** MOBILE ***************** -->

<article id="cover"  class="hidden-lg-up feed-item component portrait" style="">
<a class="no-decoration frontpage-margin feed-item component portrait feed-box-border" href="<?php echo $postUrl; ?>" style="">
   <div class="feed-image-container" style="">
      <img id="cover-img" style="" class="feed-image inline img-fluid" src="<?php the_post_thumbnail_url( array(2000, 600) ); ?>">
  </div>
  <div class="feed-text-container" style="background-color: black !important; color: white !important; padding: 15px 25px 15px 25px;" >
    <span class=" kategori" style="background-color: black !important; font-size: 12px !important; font-weight: 100;
  font-family: 'Roboto', sans-serif; color: white;">
      FORSIDESTOFF<br />
    </span>
        <span class="" style="background-color: black !important; font-size: 36px; font-family: 'Ludacrys', serif"><?php echo $postTitle; ?></span><br style="line-height: 2vh;">
        <span style="background-color: black !important; color: white !important; font-family: 'Roboto', sans-serif; font-size: 18px;" class=""><?php echo $trimmedExcerpt; ?></span>
        <?php if ( get_field( 'journalist' ) ) {
          echo "<br /><span style='font-style: italic; color: rgb(128, 128, 128); font-weight: 100;'>&mdash; " . get_field( 'journalist' ) . "</span>";
        } 
         ?>
  </div>
</a>
</article>

<!-- Else close -->

  <?php } ?>

























