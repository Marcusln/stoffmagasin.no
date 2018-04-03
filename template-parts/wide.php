<?php
$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$postUrl = esc_url( get_permalink() );
?>
<!-- a href under <?php echo $postUrl; ?> -->
  <a href="#" style="text-decoration: none; color: black;">
<article class="frontpage-margin feed-item component ultra-wide news-border">
	<div class="feed-image-container">
			<img class="feed-image inline img-fluid" src="<?php the_post_thumbnail_url(); ?>">
	</div>
	<div class="feed-text-container" style="">
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
        <span class="graytext byline"><?php echo $excerpt; ?></span><br />
        <span style="font-style: italic;  color: rgb(128, 128, 128); font-weight: 100;">&mdash; <?php the_field('journalist') ?> </span>
	</div>
</article>
</a>