<?php
$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$postUrl = esc_url( get_permalink() );
?>
<!--
<a href="<?php echo $featuredUrl; ?>" class="forsidelink">
<section class="forsiderad text-center forsidelink" style="padding-top: 0px !important; position: relative;">
<div class="container-fluid d-block">
  <div class="row"> 
    <div class="col-12 no-padding-sides">
        <img src="<?php echo $featuredUrl; ?>" class="img-fluid no-padding-sides" style="width: 100vw; padding-bottom: 1em;">
        <span class="nestensvart overskrift forsidelink" style=""><?php echo $postTitle; ?></span><br />
        <span class="gray byline text-center" style=""><?php echo $excerpt; ?></span>
    </div>
  </div>
</div>
</section></a>
-->

<a href="<?php echo $postUrl; ?>" class="forsidelink">
  <section class="forsiderad container-fluid" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
  <div class="row marg-forside border" style="max-height: 50vh">
    <div class="col-12 col-xl-4 col-lg-4 col-md-12 no-padding-sides border">
      <img src="<?php echo $featuredUrl; ?>" class="sm-centered img-fluid" id="forside" style="padding-bottom: 2vh;">
    </div>
    <div class="col-12 col-xl-5 col-lg-5"  style="">
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
          <span class="graytext byline"><?php echo $excerpt; ?> </span> <br />
          <span>&mdash; <?php the_field('journalist') ?> </span>
        </div>
    </div>
    </div>
  </section>
</a>
<br clear="all">

<!-- TESTE LITT -->

<section class="container" style="height: 70vh; display: flex; flex-direction: column; justify-content: center; flex-wrap: nowrap;">
  <div class="row border" style="">
    <div class="col-6 border" style="">
      <img src="<?php echo $featuredUrl; ?>" class="img-fluid border float-right" id="" style="padding-bottom: 2vh; max-height: 100%;">
    </div>
    <div class="col-6" style="">
          <span class="graytext kategori">KATEGORI</span><br />
          <span class="nestensvart overskrift"><?php echo $postTitle; ?></span><br style="line-height: 2vh;">
          <span class="graytext byline"><?php echo $excerpt; ?> </span> <br />
          <span>&mdash; <?php the_field('journalist') ?> </span>
    </div>
  </div>
</section>