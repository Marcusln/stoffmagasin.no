<!-- Brukes ikke lenger, kjører spørring rett i content.php -->

<?php
/**
 * Template file for single article.
 */

echo "Oops";
/*
get_header( 'single' );

$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$postUrl = esc_url( get_permalink() );
$journalist = get_field('journalist');
$fotograf = get_field('foto');

?>

<header style="display: flex; background-color: rgb(17,17,17);">
	<div class="border" style="">
		<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" style=" width: 0 auto; max-width: 100vw;"> 
	</div>
</header>

<!-- TEKST -->
<div class="container">
	<div class="row">
		<div class="col-lg-7 offset-lg-2" style="">
			<?php the_content() ?>
		</div>
</div>
</div>

<!-- Gammel, prøver på nytt -->
<?php */
/*

$featuredUrl = get_the_post_thumbnail_url();
$postTitle = get_the_title();
$excerpt = get_the_excerpt();
$postUrl = esc_url( get_permalink() );
$journalist = get_field('journalist');
$fotograf = get_field('foto');
?>
<article>
<!-- BILDE OG OVERSKRIFT -->
<div class="container-fluid">
	<div class="row">
		<img class="d-block mx-auto img-fluid" src="<?php the_post_thumbnail_url(); ?>" style="width: 50vw; height: ;">
		<div class="col-lg-7 offset-lg-2" style="margin-top: 25px; margin-bottom: 25px; text-align: center;">
			<h1 class="hyphenate" style="font-size: 10vh; font-family: 'Montserrat'; font-weight: 600;"><?php echo $postTitle; ?></h1>
			<span class="graytext" style="padding-top: 35px; font-size: 3vh; font-weight: 600; font-family: 'Montserrat'"><?php echo $excerpt; ?></span>
		</div>
	</div>
</div>
<!-- BYLINE -->
<div class="container">
		<div class="col-lg-7 offset-lg-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1" style="border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; margin-top: 35px; margin-bottom: 35px; padding-top: 10px; padding-bottom: 10px;">
			<span><b>Tekst</b> <?php the_field('journalist'); ?> </span><br />
			<?php if (get_field('foto')) {
				echo '<b>Foto</b> ' . $fotograf;
			}
			elseif (get_field('illustrasjon')) {
				echo '<b>Illustrasjon</b> ';
				echo the_field('illustrasjon');	
			}
			?>
		</div>
	</div>
</div>
<!-- TEKST -->
<div class="container">
	<div class="row">
		<div class="col-lg-7 offset-lg-2" style="">
			<?php the_content() ?>
		</div>
</div>
</div>
</article>
<!--<?php //	require(get_template_directory() . '/template-parts/mostread.php'); ?>-->
*/
?>