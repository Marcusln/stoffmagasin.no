<!-- Overskrift -->
<div class="frontpage-margin hidden-md-down" style="margin-top: 5vh !important; display: flex; align-items: center;">
  <div id="mest-lest" class="mest-lest">
    Mest lest
  </div>
</div>

<!-- Container / Flexbox -->
<article class="most-read-container hidden-md-down" style="display: flex;">

<?php 
$image1 = get_post_thumbnail_id( 6873 );
$image1Url = wp_get_attachment_url( $image1 );
$image2 = get_post_thumbnail_id( 6807 );
$image2Url = wp_get_attachment_url( $image2 );
$image3 = get_post_thumbnail_id( 6032 );
$image3Url = wp_get_attachment_url( $image3 );
?>

<!-- Box 1/3 -->
<div class="most-read-article" style="width: 30%;">
<a class="no-decoration" href="/?p=6873" style="text-decoration: none; color: black;">
  <div class="" style="overflow: hidden;">
    <img class="" style="height: 300px; min-width: 100%; object-fit: cover;" src="https://i2.wp.com/www.stoffmagasin.no/wp-content/uploads/2018/04/TerjeS%C3%B8viknes_Montasje-1.jpg?fit=600%2C450&ssl=1">
  </div>
    <div class="" style="padding: 5% 5% 0 5%; align-self: baseline;">
      <span class="graytext kategori" style="font-size: 14px !important;">
        KOMMENTARSTOFF
      </span><br />
      <span class="nestensvart" style="font-size: 25px; font-family: 'Ludacrys'; ">
        <?php echo get_the_title( $post = 6873 ); ?>
      </span>
    </div><!--
    <div style="padding: 0 5% 5% 5%; align-self: baseline;">
      <span class="nestensvart" style="font-size: 1.3rem; font-family: 'Arapey', serif;">
        Mange har en mening om rapperen fra Laksevåg. Men kan man egentlig skue Kamelen på pelsen?
      </span>
    </div>-->
  </a>
</div>

<!-- Box 2/3 -->
<div class="most-read-article" style="width: 30%;">
<a class="no-decoration" href="/?p=6807" style="text-decoration: none; color: black;">
  <div class="" style="overflow: hidden;">
    <img class="" style="height: 300px; min-width: 100%; object-fit: cover;" src="https://i0.wp.com/www.stoffmagasin.no/wp-content/uploads/2018/04/stoff_aseksualitet-1.png?fit=600%2C600&ssl=1">
  </div>
    <div class="" style="padding: 5% 5% 0 5%; align-self: baseline;">
      <span class="graytext kategori" style="font-size: 14px !important;">
        SAMFUNNSTOFF
      </span><br />
      <span class="nestensvart" style="font-size: 25px; font-family: 'Ludacrys'; ">
        <?php echo get_the_title( $post = 6807 ); ?>
      </span>
    </div><!--
    <div style="padding: 0 5% 5% 5%; align-self: baseline;">
      <span class="nestensvart" style="font-size: 1.3rem; font-family: 'Arapey', serif;">
        #metoo har omsider nådd NHH, og det er stygge ting som nå flyter opp til overflaten. Er vi egentlig overrasket?
      </span>
    </div>-->
  </a>
</div>

<!-- Box 3/3 -->
<div class="most-read-article" style="width: 30%;">
  <a class="no-decoration" href="/?p=6032" style="text-decoration: none; color: black;">
  <div class="" style="overflow: hidden;">
    <img class="" style="height: 300px; min-width: 100%; object-fit: cover;" src="https://i0.wp.com/www.stoffmagasin.no/wp-content/uploads/2017/11/kamelen.jpg?fit=600%2C2450">
  </div>
    <div class="" style="padding: 5% 5% 0 5%; align-self: baseline;">
      <span class="graytext kategori" style="font-size: 14px !important;">
        KULTURSTOFF
      </span><br />
      <span class="nestensvart" style="font-size: 25px; font-family: 'Ludacrys'; ">
        <?php echo get_the_title( $post = 6032 ); ?>
      </span>
    </div><!--
    <div style="padding: 0 5% 5% 5%; align-self: baseline;">
      <span class="nestensvart" style="font-size: 1.3rem; font-family: 'Arapey', serif;">
        Politikere klandrer alkoholen for #metoo. Det kan gjøre vondt verre.
      </span>
    </div>-->
  </a>
</div>
</article>