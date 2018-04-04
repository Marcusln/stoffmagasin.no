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
*   by Marcus Lauritsen 2017-18     
*                               
*************************
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
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

<?php include( get_template_directory() . '/menu-fullscreen.php' ); ?>



<!-- Fullscreen search -->

<div id="fullscreenSearch" class="initiallyHidden" style="width: 100vw; height: 100vh; position: fixed; background-color: #f9f7f1; z-index: 1001;">
  <div id="" class="hidden-md-down fixed-top bg-color-paper" style="width: 100vw;  border-top: 0px solid black; border-bottom: 0px solid black; height: 50px; display: flex; align-items: center; justify-content: space-between; padding: 0 20px 0 20px; z-index: 1000;">
    <div id="" class="cursor-pointer-hover" style="">
      <a id="" class="papirutgave-knapp bg-color-paper" href="https://issuu.com/stoffmagasin" target="_blank" style="background-color:  #f9f7f1;
  font-size: 16px;
  font-family: 'Ludacrys', serif;
  color: black; padding: 5px;">Nr. 23 &nbsp;&nbsp;&nbsp;3. årgang <!--&nbsp;&nbsp;<i id="papirutgave-ikon" class="fa fa-chevron-down" style="font-weight: 100;" aria-hidden="true"></i>--></a>
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
    </div>
  </div>


<div id="" class="hidden-md-down" style="width: 100vw; height: 100vh; position: fixed; background-color: #f9f7f1;">
  <div id="logo" class="mx-auto d-block" style="display: flex; width: 25vw; padding-top: 25px;">
    <a href="/index.php"><img style="display: block;" src="/wp-content/uploads/2017/04/stoff.png" class="img-fluid mx-auto d-block logo"></a>
  </div>
  <div style="display: flex; justify-content: center; margin-top: 10%;">
    <form method="get" id="search" action=" <?php echo get_site_url( '/' ) . '/'; ?> "> 
      <input id="input-search" autofocus style="background-color: transparent; border: none; height: 120px; width: auto; font-size: 90px; text-align: center; outline: none; font-family: 'Ludacrys', serif;" type="text" placeholder="Søk..." name="s" onfocus="this.value='';" onblur="this.value='';"
      /> 
      <input type="hidden" id="searchsubmit" /> 
    </form>
  </div>
</div>
</div>

  <script>
  $(function() {
    $('.fa-bars').click(function() {
      $('#fullscreen-menu').fadeIn(200);
      });
  </script>


  <!-- Top bar

  box-shadow: 0 3px 4px -4px #7e6d35; -->

<div id="topbar" class="hidden-md-down fixed-top" style="opacity: 0.98; width: 100vw;  border-top: 0px solid black; border-bottom: 0px solid black; height: 50px; display: flex; align-items: center; justify-content: space-between; padding: 0 20px 0 20px; z-index: 1000;">
    <div id="" class="cursor-pointer-hover" style="">
      <a href="/index.php" id="logo-link" class="initiallyHidden"><img id="headerLogo" src="/wp-content/uploads/2017/04/stoff.png" style="height: 35px; padding: 5px; filter: none; z-index: 1001;"></a>
      <a id="papirutgave-klikk" class="papirutgave-knapp bg-color-paper" href="https://issuu.com/stoffmagasin" target="_blank" style="padding: 5px;">Nr. 23 &nbsp;&nbsp;&nbsp;3. årgang <!--&nbsp;&nbsp;<i id="papirutgave-ikon" class="fa fa-chevron-down" style="font-weight: 100;" aria-hidden="true"></i>--></a>
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

<script> // fade in logo after scroll down a bit

$(window).scroll(function(){
        var elementoffset = $('#logoMenu').offset().top; // 
        // var interval = setInterval(function() {                         
        if ($(this).scrollTop() > 1500) { // forbi siste saker
            $('#logo-link').fadeIn('slow');
            $('#papirutgave-klikk').addClass('initiallyHidden');
        } else {
            $('#logo-link').fadeOut(0); // mot toppen
            $('#papirutgave-klikk').removeClass('initiallyHidden');
        }
     // }, 2000);
     }); // EOF scroll

/*
$(window).on("scroll", function() {
  var scrollHeight = $(document).height();
  var scrollPosition = $(window).height() + $(window).scrollTop();
  if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
      // when scroll to bottom of the page
  }
});
*/

</script>


  <!-- Logo -->

  <div id="logo" class="mx-auto d-block hidden-md-down" style=" display: flex; width: 25vw; margin-top: 25px; padding-top: 25px;">
    <a class="hidden-md-down" href="/index.php"><img style="display: block;" src="/wp-content/uploads/2017/04/stoff.png" class="hidden-md-down img-fluid mx-auto d-block logo" style=""></a>
  </div>

  <!-- Meny
  border-top: 3px solid #808080 -->

  <div id="logoMenu" class="hidden-md-down" style="width: 74vw; font-family: 'Roboto', sans-serif; display: flex; justify-content: center; flex-direction: row; font-size: /*calc(0.7em + 1vmin)*/ 16px; border-top: 3px solid black; text-transform: uppercase; font-weight: 400; margin: 30px auto 25px auto;">
      <?php
        if ( is_page( '6463' ) ) {
          echo '<a style="padding: 10px 15px 10px 15px;" class=" nav-item nav-link active meny-this" href="/?page_id=6463">Samfunn</a>';
      } else {
          echo '<a style="padding: 10px 15px 10px 15px;" class=" nav-item nav-link active meny" href="/?page_id=6463">Samfunn</a>';
      }
        if ( is_page( '6468' ) ) {
          echo '<a style="padding: 10px 15px 10px 15px;" class=" nav-item nav-link active meny-this" href="/?page_id=6468">Kultur</a>';
      } else {
          echo '<a style="padding: 10px 15px 10px 15px;" class=" nav-item nav-link active meny" href="/?page_id=6468">Kultur</a>';
      }
        if ( is_page( '6471' ) ) {
          echo '<a style="padding: 10px 15px 10px 15px;" class=" nav-item nav-link active meny-this" href="/?page_id=6471">Debatt</a>';
      } else {
          echo '<a style="padding: 10px 15px 10px 15px;" class=" nav-item nav-link active meny" href="/?page_id=6471">Debatt</a>';
      }
        if ( is_page( '6473' ) ) {
          echo '<a style="padding: 10px 15px 10px 15px;" class=" nav-item nav-link active meny-this" href="/?page_id=6473">Bergensguide</a>';
      } else {
          echo '<a style="padding: 10px 15px 10px 15px;" class=" nav-item nav-link active meny" href="/?page_id=6473">Bergensguide</a>';
      } ?>
      <span style="cursor: pointer; padding: 10px 15px 10px 15px;" class="nav-item nav-link active meny om-oss-knapp">
        Om oss
      </span>

      <!-- Meny forside: Samfunnstoff, kulturstoff, quiz, fotostoff, tegneserie, Bergensguide, Om oss -->
  </div>
  <br />

<!-- Om oss box 

<div id="close-om-oss" class="hidden-md-down frontpage-margin bg-color-paper" style="display: none; position: absolute; left: 87vw; z-index: 1;">
  <i class="fa fa-times" style="font-size: 40px;" aria-hidden="true"></i><br clear="all">
</div>
-->
<div id="om-oss-box" class=" hidden-md-down frontpage-margin bg-color-paper initiallyHidden" style="border: 2px solid black; position: relative; z-index: 1; margin-bottom: 100px; padding: 25px;">

<div id="om-oss-close" class="cursor-pointer-hover" style="position: absolute; top: 0; right: 3px; z-index: 1;">
  <i  class="fa fa-times" style="font-size: 40px;" aria-hidden="true"></i>
</div>

  <div class="om-oss-text" style="display: flex; flex-wrap: nowrap;">
    <div class="hidden-md-down col-6 "  style="display: flex; flex-direction: column; text-align: justify; font-family: 'Arapey', serif; font-size: 18px; line-height: 30px; font-weight: 400;">
      <p style="">Prosjektet Stoff magasin ble startet tidlig i 2015 av en gjeng NHH-studenter som ønsket å lage en unik, uavhengig og uredd studentavis. Første utgave ble lansert 20.03.15. Avisen satser på dyptgående, modig og kreativ journalistikk innenfor kultur, økonomi og samfunn. Stoff består av studenter som jobber frivillig og ulønnet som journalister, fotografer og grafikere. Redaksjonen har erfaring fra andre store aviser som blant annet Dagens Næringsliv, Bergens Tidende, Aftenposten og Finansavisen.</p>

      <p style="">
        Stoff blir utgitt i fire papirutgaver i hvert akademiske semester, og blir distribuert i Bergen.
      </p>

      <p style="display: flex; font-weight: 800;">
        
      </p>

      <p style="">
        <span style="font-weight: bold;">Medieoppslag</span><br/>
        Dagens Næringsliv &mdash; <a class="underline" href="https://www.dn.no/etterBors/2015/03/10/2157/Medier/studentavisopprr-i-bergen" target="_blank">Studentavisopprør i Bergen</a><br />

        Bergensavisen &mdash; <a class="underline" href="http://www.ba.no/Mener_NHHs_studentavis__Bulle__er_et_smiskeorgan-5-8-35800.html" target="_blank">Mener NHHs studentavis «Bulle» er et smiskeorgan</a><br />

        Natt & Dag &mdash; <a class="underline" href="http://www.nattogdag.no/2015/03/stoff-magasin-pungshots-dekning-og-kvalitetsjournalistikk/" target="_blank">Pungshots-dekning og kvalitetsjournalistikk </a><br />

        Inside &mdash; <a class="underline" href="http://www.inside24.no/k7-bulletin-og-studvest-har-fatt-ny-konkurrent/" target="_blank">K7 Bulletin og Studvest har fått ny konkurrent</a><br />

        Studvest &mdash; <a class="underline" href="http://www.studvest.no/nytt-stoff-pa-markedet/" target="_blank">Nytt Stoff på markedet</a><br />

        Studentradioen i Bergen &mdash; <a class="underline" href="http://srib.no/2015/03/24/nytt-stoff-pa-markedet/" target="_blank">Nytt Stoff på markedet</a><br />

        Bergens Tidende &mdash; <a class="underline" href="http://www.bt.no/folk/Lager-avis-fra-hybelen-3328137.html?xtor=RSS-2" target="_blank">Lager avis fra hybelen</a><br />
      </p>

      <p style="font-weight: 400;">Kontakt oss på <a class="underline" href="mailto:red@stoffmagasin.no">red@stoffmagasin.no</a>.</p>
    </div>
    <div class="hidden-md-down col-6" style="font-family: 'Arapey', serif; font-size: 18px; line-height: 30px; font-weight: 400;">

<b>Ansvarlig redaktør</b> Ingrid Marie Vikhammer Sandvik <br />

<b>Daglig leder </b> <a class="underline" href="mailto:hsharam@gmail.com">Hans Sebastian Haram</a><br />

<b>Kulturredaktør</b> Anne Aase Rokkan<br />

<b>Illustrasjonsansvarlig</b> Ida Neverdahl<br />

<b>Styreleder</b> Mathias Juell Johnsen<br />

<b>Utviklingsredaktør</b> Marcus Lauritsen<br />

<b>Nettredaktør</b> Joakim Knudsen<br />

<b>Art Director</b> Tove Huldén<br />

<b>Grafikere</b> Ida Woldsund og Frida Annette Helseth Strømme<br />

<b>Fotoredaktør</b> Maiken Larsen Solholmvik<br />

<b>Fotografer</b> Fredrik Geving Bedsvaag, Henrik Follesø Egeland, Petter Lysgaard<br />

<b>Redaksjon</b> Mathias Juell Johnsen, Olve Hagen Wold, Tellef Solbakk Raabe, Audun Brendbekken, Lisa Aase Rokkan, Mats Vederhus, Ingeborg Katie Åtland, Torbjørn Sandmo, Ola Olsen Lysgaard, Martin Hjelle, Tellef Raabe, Anna Eitrem, Camilla Iversen<br /><br />

<div style="font-family: 'Ludacrys'; font-size: 26px; padding: 15px; text-align: center; background-color: black; color: white;">Ønsker du å annonsere i Stoff? Ta kontakt på <a href="mailto:red@stoffmagasin.no" style="color: white !important;"> red@stoffmagasin.no</a></div>

    </div>
  </div>

</div>

<div id="hide-below-om-oss" style=""> <!-- wrap everything below om oss in this, add display: none when om oss shown. closed in footer -->


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

$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) { // ESC
        $( '#om-oss-box' ).hide();
    }
});

$(function() {
  $('.om-oss-knapp').click(function () {
    $('#om-oss-box').fadeToggle(10);
    $('#hide-below-om-oss').toggleClass('initiallyHidden dummy');
    $('.om-oss-knapp').toggleClass('meny meny-this');
  });

  $("#om-oss-close").click(function () {
    $("#om-oss-box").fadeOut(10);
    $('.om-oss-knapp').toggleClass('meny meny-this');
    $('#hide-below-om-oss').removeClass('initiallyHidden');
  });
});


/*

$(function() {
  $('#om-oss-close').click(function () {
    $('#om-oss-box').fadeOut(10);
    // $('#om-oss-close').addClass('initiallyHidden');
});
});

// When click #om-oss, fade in #om-oss-box. Fade out when clicked a second time, i.e. its a toggle. Toggle class meny and meny this to add and remove bottom-border
$(function() {
  $("#om-oss-knapp").click(function (e) {
    e.stopPropagation() // need to stop propagation because of next paragraph with code. Otherwise it would hide when clicked on #om-oss
    $('#om-oss-box').fadeToggle(10);
    $('#om-oss').toggleClass('meny meny-this');
    // $('#om-oss-close').addAttr('style').css("display","none");
    });
  });

$(function() {
  $("#om-oss-close").click(function () {
    $('#om-oss-box').fadeToggle(10);
    $('#om-oss').toggleClass('meny meny-this');
    $('#om-oss-close').addAttr('style').css("display","none");
    });
  });
  */





/*

$(document).click(function () {
    $('#om-oss-box').fadeOut('fast');
    $('#om-oss').removeClass('meny-this');
});
*/

// Better solution: https://stackoverflow.com/questions/152975/how-do-i-detect-a-click-outside-an-element/3028037#3028037

</script>



  <!-- Search end -->


<div class="" id="content" style="position: relative;"> <!-- closed in footer fix to make footer stick to bottom, but can cause a real hell:
min-height: calc(100vh - 120px);
 -->

<!-- MOBILE LOGO AND NAVBAR -->












