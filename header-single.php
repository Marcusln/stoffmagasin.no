<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stoffu
 *
 *                              ,...  ,...
*             mm            .d' "".d' ""
*             MM            dM`   dM`   
*   ,pP"Ybd mmMMmm ,pW"Wq. mMMmm mMMmm  
*   8I   `"   MM  6W'   `Wb MM    MM    
*   `YMMMa.   MM  8M     M8 MM    MM    
*   L.   I8   MM  YA.   ,A9 MM    MM    
*   M9mmmP'   `Mbmo`Ybmd9'.JMML..JMML. 
*
*                                
*   by Marcus Lauritsen 2017     
*                               
*************************
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> viewport-fit="cover">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115473596-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115473596-1');
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/wp-content/themes/stoffu/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>"></link>

<?php wp_head(); ?>
</head>

<body>

<!-- FULLSCREEN SEARCH -->

<div id="fullscreenSearch" class="initiallyHidden hidden-md-down" style="width: 100vw; height: 100vh; position: fixed; background-color: #f9f7f1; z-index: 1001;">
  <div id="topbar" class="hidden-md-down bg-color-paper fixed-top" style="box-shadow: 0 3px 4px -4px #7e6d35; border-top: 0px solid black; border-bottom: 1px solid black; height: 50px; opacity: 0.98; display: flex; align-items: center; justify-content: space-between; padding: 0 20px 0 20px; width: 100vw; z-index: 1000;">
    <div style="">
      <a href="/index.php"><img id="headerLogo" src="/wp-content/uploads/2017/04/stoff.png" style="height: 35px; z-index: 1001; filter: none; padding: 5px;"></a>
    </div>
    <div class="" style="">
      <a href="https://www.facebook.com/STOFFmagasin/" target="_blank">
        <i class="fa fa-facebook topbar-icon" style="padding: 0 3px 0 3px; font-size: 1.3rem;
  margin-top: 5px;" aria-hidden="true"></i>
      </a>
      <a href="https://www.instagram.com/stoffmagasin/" target="_blank">
        <i class="fa fa-instagram topbar-icon" style="padding: 0 3px 0 3px; font-size: 1.3rem;
  margin-top: 5px;" aria-hidden="true"></i>
      </a>
      <a href="https://twitter.com/stoffmagasin" target="_blank">
        <i class="fa fa-twitter topbar-icon" style="padding: 0 15px 0 3px; font-size: 1.3rem;
  margin-top: 5px;" aria-hidden="true"></i>
      </a> 
      <a id="search-link" onclick="" class="" style="">
        <i id="search-icon" class="cursor-pointer-hover fa fa-times topbar-icon" style="padding: 0 3px 0 3px; font-size: 1.3rem; margin-top: 5px;"></i>
      </a>
      <a class="" style="">
        <i id="hamburger-icon" class="fa fa-bars topbar-icon" style="padding: 0 3px 0 3px; font-size: 1.3rem; margin-top: 5px;"></i>
      </a>
    </div>
  </div>
  <div style="height: 20vh;"></div>
  <div style="display: flex; justify-content: center; align-self: center; margin-top: 10%;">
    <form method="get" id="search" action=" <?php echo get_site_url( '/' ) . '/'; ?> "> 
      <input id="input-search" autofocus style="background-color: transparent; border: none; height: 120px; width: auto; font-size: 90px; text-align: center; outline: none; font-family: 'Ludacrys', serif;" type="text" placeholder="Søk..." name="s" onfocus="this.value='';" onblur="this.value='';"
      /> 
      <input type="hidden" id="searchsubmit" /> 
    </form>
  </div>
</div>

<!-- DESKTOP NAVBAR -->

<!-- Top bar

  box-shadow: 0 3px 4px -4px #7e6d35;
 -->

<div id="topbar" class="hidden-md-down fixed-top bg-color-paper" style="box-shadow: 0 3px 4px -4px #7e6d35; opacity: 0.98; width: 100vw;  border-top: 0px solid black; border-bottom: 1px solid black; height: 50px; display: flex; align-items: center; justify-content: space-between; padding: 0 20px 0 20px; z-index: 1000;">
    <div id="" class="cursor-pointer-hover" style="">
      <a href="/index.php" id="logo-link" class=""><img id="headerLogo" src="/wp-content/uploads/2017/04/stoff.png" style="height: 35px; padding: 5px; filter: none; z-index: -1000;"></a>
    </div>
    <div class="" style="">
      <!--<a href="https://www.facebook.com/STOFFmagasin/" target="_blank">
        <i class="fa fa-facebook topbar-icon" style="padding: 0 3px 0 3px;" aria-hidden="true"></i>
      </a>
      <a href="https://www.instagram.com/stoffmagasin/" target="_blank">
        <i class="fa fa-instagram topbar-icon" style="padding: 0 3px 0 3px;" " aria-hidden="true"></i>
      </a>
      <a href="https://twitter.com/stoffmagasin" target="_blank">
        <i class="fa fa-twitter topbar-icon" style="padding: 0 15px 0 3px;" aria-hidden="true"></i>
      </a> -->
      <a id="" onclick="" class="" style="">
        <i id="search-icon" class="cursor-pointer-hover fa fa-search topbar-icon" style="padding: 0 3px 0 3px;"></i>
      </a>
      <a class="" style="">
        <i id="hamburger-icon" class="fa fa-bars topbar-icon" style="padding: 0 3px 0 3px;"></i>
      </a>
    </div>
  </div>


<?php require( get_template_directory() . '/topbar-mobile.php' ); ?>
<?php require( get_template_directory() . '/menu-fullscreen.php' ); ?>


<div class="" id="content" style=""> <!-- closed in footer fix to make footer stick to bottom, but can cause a real hell:
min-height: calc(100vh - 120px);
 -->

<script>
      $(function() {
  $('#topbar .fa-search').click(function(e) {
      e.stopPropagation()
      $('#fullscreenSearch').fadeIn('fast');
      $('#search-icon').addClass('fa-times');
      $('#search-icon').css({'font-size' : '30px', 'padding-right' : '25px', 'color' : 'black'});
      $('#search-icon').removeClass('fa-search');
      $('#input-search').focus();
    });
  });

$(function() {
  $('#search-link').click(function(e) {
    e.stopPropagation()
    $('#fullscreenSearch').fadeOut('fast');
    $('#search-icon').addClass('fa-search');
    $('#search-icon').removeClass('fa-times');
    });
  });

$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) { // ESC
        $( '#fullscreenSearch' ).hide();
        $('#search-icon').removeClass('fa-times');
        $('#search-icon').addClass('fa-search'); 
        //$('#s').off('focus');
    }
});

</script>




