    <!--

    -->
<?php
$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$postUrl = esc_url( get_permalink() );
?>

<a href="<?php echo $postUrl; ?>" class="forsidelink">
  <section class="forsiderad container-fluid" style="" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row marg-forside" style="">
    <div class="col-12 col-xl-4 col-lg-4 push-xl-5 col-md-12 push-lg-5 no-padding-sides">
      <img src="<?php echo $featuredUrl; ?>" class="sm-centered" id="forside" style="padding-bottom: 2vh;">
    </div>
    <div class="col-12 col-xl-5 col-lg-5 pull-xl-4 pull-lg-4"  style="">
        <div style="" class="middle-vertical sm-text-center">
          <span class="graytext kategori">
            <?php
              if (in_category('samfunnsstoff' )) {
              echo "SAMFUNNSSTOFF";
              }
              elseif
              (in_category('kulturstoff' )){
              echo "KULTURSTOFF";
              }
              elseif (in_category('debattstoff' )) {
              echo "DEBATTSTOFF";
              }
             ?>
          </span><br />
          <span class="nestensvart overskrift"><?php echo $postTitle; ?></span><br style="line-height: 2vh;">
          <span class="graytext byline"><?php echo $excerpt; ?></span> 
        </div>
    </div>
    </div>
  </section>
</a>