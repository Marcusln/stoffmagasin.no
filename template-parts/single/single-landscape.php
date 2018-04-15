<?php
/**
 * Template file for single article. Loaded when set manually in Wordpress editor via advanced custom fields
 */
require(get_template_directory() . '/header-single.php' );

$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$postUrl = esc_url( get_permalink() );
$journalist = get_field('journalist');
$fotograf = get_field('foto');
$dateDay = get_the_date('d');
$dateMonth = get_the_date('m');
$dateYear = get_the_date('Y');
$dateMonthNoZero = get_the_date( 'n' );

// bakgrunnsfarge overskrift osv: background-color: rgb(17,17,17);
?> 

<!-- FEATURED IMAGE -->

<div class="hidden-md-down" style="width: 100vw; height: 100vh; padding-top: 54px; max-width: 100%;">
	<div id="" style="width: calc(100%); height: calc(100% - 50px); display: flex;  margin-top: 25px; padding-left: 50px; padding-right: 50px;">
		<div class="blurry-load-container" style="flex: 1;">
			<img class="featured-img image-blur" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" data-large="<?php the_post_thumbnail_url( 'full' ); ?>"  style="height: 100%; object-fit: contain;">
		</div>
	</div>
</div>

<div class="hidden-lg-up" style="margin-top: 76px;">
	<img style="width: 100%; height: auto;" src="<?php the_post_thumbnail_url( array( 991,9999 ) ); ?>">
</div>



<!-- <img class="" alt="bilde" style="width: 100%;" src="<?php //the_post_thumbnail_url( array(20, 9999) ); ?>"> 

	latest "working" version fml:
	<div class="img-container-landscape blurry-load-container" style="">
		<img class="image-blur" style=""  src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" data-large="<?php the_post_thumbnail_url( 'full' ); ?>">
	</div>
-->

<script>
	/* https://github.com/tushariscoolster/blurry-image-load
	Når du velger post thumbnail, velg resolution fra array, lag array i egen variabel elns, ta høyden og gang med aspect ratio for å få riktig aspect ratio på thumbnail */
	(function ($) {

    $.fn.blurryLoad = function (options) {

        var parentContainer = $(this).parent(),
            imageContainer = $(this)
        
        
        parentContainer.addClass('blurry-load-container');
        imageContainer.addClass('img-blur')

        // 1: load small image and show it
        var img = new Image();
        img.src = imageContainer.attr('src');
        img.onload = function () {
            imageContainer.addClass('loaded');
        };

        // 2: load large image
        var imgLarge = new Image();
        imgLarge.src = $(this).attr('data-large');
        imgLarge.onload = function () {
             imgLarge.classList.add('loaded');
             imageContainer.css('opacity', '0');
        };
        parentContainer.append(imgLarge)
       
    };

}(jQuery));

	 $('.image-blur').blurryLoad()

	 
</script>

<!--
<div style="height: 95vw; width: 95vw; display: flex; align-items: center; justify-content: center;">
	<img src="" style="display: flex; padding: 50px;">
</div>

-->

<!-- TEKST -->
<!-- Litt lysere bg-color: #FCFBF8 -->
<article id="textbox-article" class="single-textbox hidden-md-down" class="" style="margin: 50px 0 0 15vw; padding: 50px 50px 0 40px; width: 750px; border-left: 1px solid darkgray; position: relative;">
	<span class="gray" style="font-family: 'Ludacrys'; font-size: 18px; transform: rotate(-90deg); position: absolute; left: -65px; top: 50; letter-spacing: 3px;">
		<?php echo $dateDay . '.' . $dateMonth . '.' . $dateYear ?>
	</span>

	<div class="" style="background-color: #f9f7f1; border-bottom: 7px solid #f0ebdb;">

			<span class="graytext kategori">
            	<?php if ( get_field( 'emneknagg' ) ) {
            			echo get_field( 'emneknagg' );
            		} else {
            			require(get_template_directory() . '/template-parts/emneknagg.php');
            		} ?>
        	</span><br />
			<div style="width: 800px;">
				<span class="overskrift-single" style="font-family: 'Ludacrys'; font-size: 90px; line-height: 110px;">
					<?php echo $postTitle; ?>
				</span>
			</div>
				<!-- lead paragraph fetched from h4 tags via jquery script below. or else insert excerpt-->
				<?php if ( get_field( 'ingress' ) == 'visible' ) {
				?>
				<span id="ingress" style="font-family: 'Arapey', serif; font-size: 33px; font-weight: 400; line-height: 40px; letter-spacing: 1px;">

				<?php

				if ( $dateYear >= 2017 and $dateMonthNoZero > 7 or $dateYear >= 2018 or get_field( 'journalist' ) ) {
					echo "<span id='ingress-jquery' style='display: none;'></span>";
					// jquery script below fetches text inside <h4> tags, store it in variable, and place the text in the variable into id #ingress-jquery. If the advanced custom fields field 'journalist' is filled out, we know that the article has been posted after the new design, or the variable has been filled out manually. Consequently, we want to store intro in a variable (good practise, makes it easier to work with in the future, e.g. with a new design or template) and remove text inside <h4>. Also, if article is newer than 01.08.2017, this id #ingress-jquery is not displayed. Instead, the excerpt is displayed. The reason is that after this date, the excerpt is usually nice and neat. Otherwise, the excerpt is usually way too long, and we should use the intro inside <h4> instead.
					the_excerpt();
					echo "<script>$('h4').each(function () { // get <h4> tags and its children; jquery interpret text as a child
     						$(this).empty(); // and empty that motherfucker
   						}); // https://stackoverflow.com/questions/13741266/remove-text-and-tags-with-jquery </script>";
				} else {
					echo "<span id='ingress-jquery' style='font-family: 'Arapey', serif; font-size: 40px; font-weight: 400; line-height: 60px;'></span>";
					echo "
					<script>
	$(function($) {
    	var ingress = $('h4').first.text(); // store text between <h4> tags in var ingress. for some reason text was stored twice so only store first instance
    	// var ingressLowercase = ingress.toLowerCase();
    	$('#ingress-jquery').text(ingress); // insert var ingress inside element id #ingress-jquery
		}
	);
</script>
<style>
h4 { font-family: 'Arapey', serif; font-size: 40px; font-weight: 400; line-height: 60px; }
</style>
";
				}
				?>
			</span>
			<?php } ?>

		<div id="byline" class="" style="padding: 15px 0;">

			<span class="byline-article">

				<?php if ( get_field( 'journalist' ) ) {

					echo "<script>
							 $(function($) {
	    					 	$('h6').remove();
							 	});
						 </script>";

					echo 'Tekst ' . get_field( 'journalist' ) . '<br />';
						}
					if ( get_field( 'type_bilde' ) == 'Foto' ) {
							echo 'Foto ' . get_field( 'foto' );
							} elseif ( get_field( 'type_bilde' ) == 'Illustrasjon' ) {
								echo 'Illustrasjon ' . get_field( 'illustrasjon' );
							} elseif ( get_field( 'bildekreditering' ) ) {
								echo get_field( 'bildekreditering' ) . ' ' . get_field( 'navn_kreditering' );
							}
				?>
			</span>
		</div>

		<div id="article-content" class="" style="font-size: 18px; line-height: 33px; font-family: 'Roboto', sans-serif; padding-bottom: 50px;">
			<?php the_content() ?>
		</div>
	</div>
	</div>
</article>

        <nav class="nav-issue hide hidden-md-down" style="content: '';  position: absolute; text-align: center; display: block; vertical-align: baseline;">
            <a class="next-post-link" style="transform: rotate(90deg) translateX(50%); left: 85vw; display: block; position: fixed; top: calc(50% - 175px); font-weight: 200; letter-spacing: .18417em; text-transform: uppercase; margin: 0 0 0 0; padding: 0; border: 0; white-space: nowrap; font-size: 33px; vertical-align: baseline; text-align: center;" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>">Neste artikkel</a>
        </nav>

<script>

$(window).scroll(function() {
    var top_of_element = $("#article-content").offset().top;
    var bottom_of_article = $("#article-content").offset().top + $("#article-content").outerHeight();
    var bottom_of_related_posts = $("#related-posts-container").offset().top + $("#related-posts-container").outerHeight();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    var top_of_screen = $(window).scrollTop();

    if (bottom_of_article < bottom_of_screen && bottom_of_related_posts > bottom_of_screen) {
        $('.nav-issue').removeClass('hide');
    	} else {
        $('.nav-issue').addClass('hide');
    }
});

</script>

<?php // echo get_next_posts_link(); ?>

<!-- Mobile article -->

<article id="textbox-article" class="single-textbox hidden-lg-up" style=""> 
	<div id="title-intro" style="padding: 15px 0;">
		<span class="graytext kategori" style="font-size: 14px;">
          		<?php if ( get_field( 'emneknagg' ) ) {
            			echo get_field( 'emneknagg' );
            		} else {
            			require(get_template_directory() . '/template-parts/emneknagg.php');
            		} ?>
       	</span><br />
	
		<span class="overskrift-single" style="font-family: 'Ludacrys'; font-size: 33px; line-height: 1.5;">
			<?php echo $postTitle; ?>
		</span><br />

		<!-- lead paragraph fetched from h4 tags via jquery script below. or else insert excerpt-->
				<?php if ( has_excerpt() ) {
				?>
				<span id='ingress' style="font-family: 'Arapey', serif; font-size: 20px; font-weight: 400; line-height: 26px; margin-bottom: 0 !important;">

				<?php

				if ( $dateYear >= 2017 and $dateMonthNoZero > 7 or $dateYear >= 2018 or get_field( 'journalist' ) ) {
					echo "<span id='ingress-jquery' style='display: none;'></span>"; // jquery script below fetches text inside <h4> tags, store it in variable, and place the text in the variable into id #ingress-jquery. If the advanced custom fields field 'journalist' is filled out, we know that the article has been posted after the new design, or the variable has been filled out manually. Consequently, we want to store intro in a variable (good practise, makes it easier to work with in the future, e.g. with a new design or template) and remove text inside <h4>. Also, if article is newer than 01.08.2017, this id #ingress-jquery is not displayed. Instead, the excerpt is displayed. The reason is that after this date, the excerpt is usually nice and neat. Otherwise, the excerpt is usually way too long, and we should use the intro inside <h4> instead.
					the_excerpt();
					echo "<script>
							 $(function($) {
	    					 	$('h4').remove();
							 	});
						 </script>";
				} else {
					echo "<span id='ingress-jquery' style='font-family: 'Arapey', serif; font-size: 26px; font-weight: 400; line-height: 33px;'></span>";
					echo "
					<script>
	$(function($) {
    	var ingress = $('h4').first.text(); // store text between <h4> tags in var ingress. for some reason text was stored twice so only store first instance
    	// var ingressLowercase = ingress.toLowerCase();
    	$('#ingress-jquery').text(ingress); // insert var ingress inside element id #ingress-jquery
		}
	);
</script>";
					echo "</span>";
					
				}
				?>
				</span>
				<?php } ?>
	</div>

		<div id="byline" class="" style="padding-bottom: 15px;">

			<span class="byline-article" style="">

				<?php if ( get_field( 'journalist' ) ) {

					echo "<script>
							 $(function($) {
	    					 	$('h6').remove();
							 	});
						 </script>";

					echo 'Tekst ' . get_field( 'journalist' ) . '<br />';
					
						if ( get_field( 'type_bilde' ) == 'Foto' ) {
							echo 'Foto ' . get_field( 'foto' );
							} elseif ( get_field( 'type_bilde' ) == 'Illustrasjon' ) {
								echo 'Illustrasjon ' . get_field( 'illustrasjon' );
							} else {
								echo get_field( 'bildekreditering' ) . ' ' . get_field( 'navn_kreditering' );
							}

						} 
				?>
			</span>
		</div>

		<div id="article-content" class="" style=" font-size: 18px; line-height: 33px; font-family: 'Roboto', sans-serif; padding-bottom: 50px;">
			<?php the_content() ?>
		</div>



</article>

<!-- RELATED ARTICLES -->
<?php require( get_template_directory() . '/template-parts/related-posts.php' ); ?>

<?php get_footer() ?>

<!--

<nav style="content: '';
    position: absolute;
        text-align: center;
    display: block;
        vertical-align: baseline;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 5.27rem;
    background: #fae8e8;
    z-index: -1;">
			<a style="transform: rotate(-90deg) translateX(-50%) translateY(100%) translateY(0.7rem);
			left: 0;
			    display: block;
    position: fixed;
    top: 50%;
    font-weight: 700;
    font-size: .12rem;
    letter-spacing: .18417em;
    text-transform: uppercase;
    color: #000;
    transition: transform 500ms ease-in-out,-webkit-transform 500ms ease-in-out;
        margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
    text-align: center;" href="http://www.vg.no">Neste</a>
		</nav>
-->