<?php
/**
 * Template file for single article.
 */

get_header( 'single' );

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
<!--width: calc(100% - 20vw); height: calc(100% - 50px); display: flex;  margin-top: 25px; margin-left: 25px; margin-left: auto; margin-right: auto;-->
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="hidden-md-down">

<header style="width: 100%; height: 100%; padding-top: 54px; max-width: 100%;">
	<div style="width: calc(100%); height: calc(100% - 50px); display: flex;  margin-top: 25px; padding-left: 50px; padding-right: 50px;">
		<div class="blurry-load-container" style="flex: 1;">
			<img class="featured-img image-blur" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" data-large="<?php the_post_thumbnail_url( 'full' ); ?>"  style="height: 100%; object-fit: contain;">
		</div>
		<div class="" style="flex: 1; display: flex; justify-content: center; align-items: center;">
			<span class="overskrift-single hyphenate" style="padding-left: 50px; font-family: 'Ludacrys'; font-size: 110px;">
				<span class="graytext kategori">
            		<?php require(get_template_directory() . '/template-parts/emneknagg.php');  ?>
        		</span><br />
        	<?php the_title(); ?>
        	</span>
		</div>
	</div>
</header>

<script>
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
        };
        parentContainer.append(imgLarge)
       
    };

}(jQuery));

	 $('.image-blur').blurryLoad()
</script>

<!-- ARTICLE BOX -->

<article id="textbox-article" class="container" class="" style="border-left: 1px solid darkgray;">
	<span class="gray" style="font-family: 'Ludacrys'; font-size: 18px; transform: rotate(-90deg); position: absolute; left: -65px; top: 50; letter-spacing: 3px;">
					<?php echo get_the_date('d') . '.' . get_the_date('m') . '.' . get_the_date('Y') ?>
				</span>
	<div class="col-8" style="background-color: #f9f7f1; border-bottom: 7px solid #f0ebdb; margin-top: 25px; padding-top: 50px; padding-bottom: 50px; margin-bottom: 50px;">
	<div class="row" >
		<div class="single-textbox">
			<span id="ingress" style="font-family: 'Arapey', serif; font-size: 33px; font-weight: 400; line-height: 40px;">
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
				} ?>
			</span>
		</div>

		<div id="body" class="single-textbox" style="padding: 15px 0;">
			<span class="byline-article">
				<?php if ( get_field( 'journalist' ) ) {

					echo "<script>";
					echo "$(function($) {";
    				echo "$('h6').remove();"; // remove <h4> tag with corresponding text
					echo "});";
					echo "</script>";

					echo 'Tekst ' . get_field( 'journalist' ) . '<br />';
					
						if ( get_field( 'type_bilde' ) == 'Foto' ) {
							echo 'Foto ' . get_field( 'foto' );
							} elseif ( get_field( 'type_bilde' ) == 'Illustrasjon' ) {
								echo 'Illustrasjon ' . get_field( 'illustrasjon' );
							} else {
								echo get_field( 'bildekreditering' ) . ' ' . get_field( 'navn_kreditering' );
				}

				} // else...? script
				
				?>
			</span>
		</div>

		<div id="article-content" class="single-textbox" style="max-width: calc(100% - 50px); font-size: 18px; line-height: 33px; font-family: 'Roboto', sans-serif; padding-bottom: 50px;">

			<?php the_content() ?>
		</div>
	</div>
	</div>

</article>

        <nav class="nav-issue hide hidden-md-down" style="content: '';  position: absolute; text-align: center; display: block; vertical-align: baseline;">
            <a class="next-post-link" style="transform: rotate(90deg) translateX(50%); left: 87vw; display: block; position: fixed; top: calc(50% - 175px);  letter-spacing: .18417em; text-transform: uppercase; margin: 0 0 0 0; padding: 0; border: 0; white-space: nowrap; font-size: 30px; font-weight: 200; vertical-align: baseline; text-align: center;" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>">Neste artikkel</a>
        </nav>

<script>

$(window).scroll(function() {
    var top_of_element = $("#article-content").offset().top;
    var bottom_of_element = $("#article-content").offset().top + $("#article-content").outerHeight();
    var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
    var top_of_screen = $(window).scrollTop();

    if (bottom_of_element < bottom_of_screen) {
        $('.nav-issue').removeClass('hide');
    	} else {
        $('.nav-issue').addClass('hide');
    }
});

</script>

<?php // echo do_shortcode('[jetpack-related-posts]'); ?>


</div><!-- close div for desktop -->

<script>
	$(function($) {
    var ingress = $('h4').first().text(); // store text between <h4> tags in var ingress. for some reason text was stored twice so only store first instance
    $('#ingress-jquery').text(ingress); // insert var ingress inside element id #ingress
    $('h4').remove(); // remove <h4> tag with corresponding text
});


/*
	$('h6').text(function(index, currentText) {
    	return currentText.toLowerCase();
		}).CSS('text-transform', 'capitalize');
*/
</script>






<!-- Mobile article -->

<header class="header hidden-lg-up" style="">
	<img class="featured-img-mobile" src="<?php the_post_thumbnail_url(); ?>" style="">
</header>

<!-- Mobile article -->

<article id="textbox-article" class="single-textbox hidden-lg-up">
	<div id="title-intro" style="padding: 15px 0;">
		<span class="graytext kategori" style="font-size: 14px;">
          		<?php require(get_template_directory() . '/template-parts/emneknagg.php');  ?>
       	</span><br />
	
		<span class="overskrift-single" style="font-family: 'Ludacrys'; font-size: 33px; line-height: 1.5;">
			<?php echo $postTitle; ?>
		</span><br />

		<!-- lead paragraph fetched from h4 tags via jquery script below. or else insert excerpt-->
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

<?php
get_footer();




