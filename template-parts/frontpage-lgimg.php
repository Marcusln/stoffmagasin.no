<?php
$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$postUrl = esc_url( get_permalink() );
?>

<a href="<?php echo $postUrl; ?>" class="forsidelink">
<section class="forsiderad  mx-auto d-block" style="max-height: 100vh;">
    <div class="container-fluid ">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2 text-center" style="">
      <!-- For å ha kategori og overskrift på samme marg, sett outer div text-center og inner div inline-block og text-align left -->
          <span class="graytext kategori" style="">
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
          </span><br style="line-height: 100%;"/>
          <span class="nestensvart overskrift" style="">
            <?php echo $postTitle; ?>
          </span><br /><br/>  
      </div>
    </div>
        </div>
    <div class="container-fluid ">
          <div class="row">
      <div class="col-lg-2 ">
        <!-- Empty div for layout -->
      </div>
      <div class="col-lg-8  mx-auto d-block" style="">
        <img src="<?php echo $featuredUrl; ?>" class="img-fluid" id="forside" style="padding-bottom: 1em; max-height: 75vh; width: auto;">
      </div>
      <div class="col-lg-2 " style="">
        <!-- Empty div for layout -->
      </div>
    </div>
    </div>
    <div class="container-fluid ">
          <div class="row" style="">
      <div class="col-12 text-center " style="">
          <span class="graytext byline text-center" style="">Anna Eitrem, Aslak Syversen Waage, Sigurd Pruser & Ingeborg Karlsborg Wiulsrød (illustrasjon)</span>
      </div>
      </div>
    </div>
</section>
</a>