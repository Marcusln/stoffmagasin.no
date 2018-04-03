<!-- x single-portrait start -->

<!-- RECOMMENDED ARTICLES 
<div class="container">
	<div class="row">
		<div class="col-8">
			<div class="single-textbox" style="padding-bottom: 250px;">
	<?php // require(get_template_directory() . '/template-parts/mostread.php'); ?>
</div>
		</div>
	</div>
</div>
-->

<!-- Script for å endre bg og farge på logo når man kommer til leseboksen

<script type="text/javascript">

var distance = $('#textbox-article').offset().top,
    $window = $(window);

$window.scroll(function() {
    if ( $window.scrollTop() >= distance - 54 ) {
        $('#header-single').css('background-color', '#f9f7f1');
        $("#headerLogo").attr("src","/wp-content/uploads/2017/04/stoff.png");
        $('#hamburger-single').css('color', 'black');
    }
    if ( $window.scrollTop() <= distance - 54 ) {
        $('#header-single').css('background-color', 'black');
        $("#headerLogo").attr("src","/wp-content/uploads/stoffhvit.png");
        $('#hamburger-single').css('color', 'white');
    }
});

// prøver å preloade svart logo, men kan ikek gjøre det sånn... 

$(window).load(function() {
	get('/wp-content/uploads/2017/04/stoff.png');
});

</script>

-->

<!-- x single-portrait end -->

<!-- x header.php start -->


  <!--
var targetOffset = $("#siste-saker").offset().top;

var $w = $(window).scroll(function(){
    if ( $w.scrollTop() < targetOffset ) {
        $('#mest-lest').removeClass('initiallyHidden');
    } else {
      $('#logo-link').addClass('initiallyHidden');
    }
});
*/

/*
$(window).scroll(function () {
    if (scrollTimeout) {
        // clear the timeout, if one is pending
        clearTimeout(scrollTimeout);
        scrollTimeout = null;
    }
    scrollTimeout = setTimeout(scrollHandler, 250);
});

var target = $(".myPara").offset().top;
var interval = setInterval(function() {
    if ($(window).scrollTop() >= target) {
        alert("made it!");
        clearInterval(interval);
    }
}, 250);
*/
-->


<!-- <body <?php // body_class(); ?>> -->

<!-- DESKTOP TOP BAR 

  <div class="container-fluid hidden-md-down" style="">
  <div class="row " style="height: 50px; position: relative; display: flex; justify-content: space-around; align-items: center; ">
    <div class="" style="">
      <b>16. utgave</b>
    </div>
    <div class="" style="">
      <i class="fa fa-facebook gray" style="font-size: calc(1em + 1vmin); padding: 0px 7px 0px 7px;" aria-hidden="true"></i>
      <i class="fa fa-instagram gray" style="font-size: calc(1em + 1vmin); padding: 0px 7px 0px 7px;" " aria-hidden="true"></i>
      <i class="fa fa-twitter gray " style="font-size: calc(1em + 1vmin); padding: 0px 7px 0px 7px;" aria-hidden="true"></i>  
    </div>
    <div class="">
       <a class="nav-link nav-link active graytext" style="font-size: calc(1em + 1vmin);" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
    </div>
  </div>

  -->


    <!-- Full screen menu 

  <div id="fullscreenMenu" class="fullscreen-menu hidden-md-down" style="">
    <div style="display: flex; justify-content: flex-end; padding-right: 13px;">
      <a href="javascript:void(0)" class="close-menu" onclick="closeNav()"><i class="fa fa-times" style="padding: 0 3px 0 15px;" aria-hidden="true"></i></a>
    </div>
    <div class="fullscreen-menu-content" style="">

    <!-Innhold

        <div id="desktop-menu" class="row justify-content-around offset-1 m-5" style="line-height: 2; font-weight: 200;">
          <div class="col">
            <span class="" style="font-size: 25px; font-weight: 400;">Kategorier</span>
            <a class="" style="font-size: 25px;">Forsidestoff</a>
            <a class="" style="font-size: 25px;">Ledere</a>
            <a class="" style="font-size: 25px;">Tre kule folk</a>
            <a id="samfunn-menu" class="reverse-underline" style="font-size: 25px; text-decoration: underline;">Samfunn</a>
            <a class="" style="font-size: 25px; ">Løst gjenfortalt</a>
            <a class="" style="font-size: 25px; ">Masterspalten</a>
            <a class="" style="font-size: 25px; ">Under beltestedet</a>
          </div>
          <div class="col">
            <a id="samfunn-menu" class="reverse-underline" style="font-size: 25px; text-decoration: underline;">Kultur</a>
            <a class="" style="font-size: 25px; ">Bergen revels</a>
            <a class="" style="font-size: 25px; ">Anmeldelser</a>
            <a class="" style="font-size: 25px; ">Haien møter</a>
            <a class="" style="font-size: 25px; ">Se og hør her og nå</a>
            <a class="" style="font-size: 25px; ">Fotostoff</a>
            <a class="" style="font-size: 25px; ">Månedens debutant</a>
            <a class="" style="font-size: 25px; ">Posterboy</a>
          </div>
          <div class="col">
            <a class="" style="font-size: 25px;">Debatt</a>
            <a class="" style="font-size: 25px;">Quiz</a>
            <a class="" style="font-size: 25px;">Tegneserier</a>
            <a class="" style="font-size: 25px; text-decoration: underline;">Utgaver</a>
            <a class="" style="font-size: 25px;">2015: 1 2 3 4 5 6</a>
            <a class="" style="font-size: 25px;">2016: 7 8 9 10 11 12 13</a>
            <a class="" style="font-size: 25px;">2017: 14 15 16 17 18</a>
            <a class="" style="font-size: 25px; color: darkred;">Annonser</a>
          </div>
        </div>
    </div>
  </div>
-->

  <!-- Papirutgave-boks ******************************************************************************* 

  <div id="papirutgave-boks" class="initiallyHidden hidden-md-down papirutgave-shadow" style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; height: 300px !important; width: 74vw; margin-left: 13vw; margin-right: 13vw; position: fixed; z-index: 1; background-color: black;">

    <div id="papirutgave-innhold" style="display: flex; display: -webkit-flex; -webkit-overflow-scrolling: touch;  overflow-x: scroll;  margin-top: 25px;">

    <!- Navigation arrows are sticky on top, put in place by flex's align-self 

    <div style="order: 0">
      <i class="fa fa-chevron-left" style="font-size: 40px; font-weight: 100; margin-top: 80px;"></i>
    </div>
    <div style="order: 99">
      <i class="fa fa-chevron-right" style="font-size: 40px; font-weight: 100; margin-top: 80px;"></i>
    </div>

      <div>
        <img class="papirutgave-shadow" style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>
      <div>
        <img class="papirutgave-shadow " style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>
      <div>
        <img class="papirutgave-shadow" style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>
      <div>
        <img class="papirutgave-shadow" style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>
      <div>
        <img class="papirutgave-shadow" style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>
      <div>
        <img class="papirutgave-shadow" style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>
      <div>
        <img class="papirutgave-shadow" style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>
      <div>
        <img class="papirutgave-shadow" style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>
      <div>
        <img class="papirutgave-shadow" style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>
      <div>
        <img class="papirutgave-shadow" style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>
      <div>
        <img class="papirutgave-shadow" style="height: 200px;" src="/stof/wp-content/uploads/2017/04/stoff15.jpg">
      </div>

    </div>
  </div>
-->

<!--
// Slide show/hide papirutgave on click + change icon WORKING BUT DISABLED

/*
$(document).ready(function(){

    $("#papirutgave-klikk").find('a, i').click(function(event) {
        event.stopPropagation();
         $("#papirutgave-boks").slideToggle("fast");
         $('#papirutgave-innhold').fadeIn('slow');
         $('#papirutgave-ikon').toggleClass('fa-chevron-down fa-chevron-up');
    });
    
    
    $("#papirutgave-boks").on("click", function (event) {
        event.stopPropagation();
    });
});

// Fade out papirutgave-boks on click outside of box + change arrow from up to down

$(document).on("click", function () {
    $("#papirutgave-boks").fadeOut('fast');
    $('#papirutgave-ikon').toggleClass('fa-chevron-up fa-chevron-down');
});

// Fade out papirutgave-boks on scroll

$(window).scroll(function() {
    if ($(this).scrollTop()>50)
     {
        $('#papirutgave-boks').fadeOut('slow');
     }
 });


END OF PAPIRUTGAVE-BOKS */ -->

<!-- Wordpress default search form 

  <form role="search" method="get" class="search-form" action="<?php // echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php // echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php // echo esc_attr_x( 'Søk', 'placeholder' ) ?>"
            value="<?php // echo get_search_query() ?>" name="s"
            title="<?php // echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit" value="<?php // echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>

-->
  

    <!-- Search gammel working 

    <div id="fullscreenSearch" class="fullscreen-search hidden-md-down" style="">
    <div class="fullscreen-menu-content" style="">

     Innhold 

        <div id="desktop-search" class="" style="position: absolute; bottom: 0; height: 50vh !important;">
            <div>
          Search
          </div>
        </div>
    </div>
  </div>
-->
  

  <!-- MENU DESKTOP START 


<div class="container-fluid hidden-md-down">
  <nav class="navbar navbar-toggleable-md " style="">
  <div class="collapse navbar-collapse justify-content-center" style="padding-bottom: 1rem; " id="navbarNavAltMarkup">

    <div class="navbar-nav " style="font-size: /*calc(0.7em + 1vmin)*/ 1rem; border-top: 1px solid #808080; margin-top: 20px;">
      <a class="nav-item nav-link active meny gray" href="#">Samfunn</a>
      <a class="nav-item nav-link active meny gray" href="#">Kultur</a>
      <a class="nav-item nav-link active meny gray" href="#">Debatt</a>
      <a class="nav-item nav-link active meny gray" href="#">Bergensguide</a>
      <a class="nav-item nav-link active meny gray" href="#">Om oss</a>
    </div>
  </div>
</nav>
</div>

-->

 <!--   <div class="navbar-nav" style="font-size: calc(1em + 1vmin);position:relative;left:0;top:0; vertical-align: 20px; white-space: nowrap;">
      <i class="fa fa-facebook gray" style="" aria-hidden="true"></i>
      <i class="fa fa-instagram gray" style="" " aria-hidden="true"></i>
      <i class="fa fa-twitter gray " style="" aria-hidden="true"></i>
    </div>-->

<!-- MENU DESKTOP END -->

    <!-- 
          <span id="morapuler" onclick="openSearch()" class="" style="font-size: calc(1em + 1vmin);" href="#">

        <i class="fa fa-search"></i>

      </span>

    <script>
$('#vetdafaen').click(function(){
    $(this).find('i').toggleClass('fa-search fa-times')
});
  </script>-->

              <!-- original

                <i class="fa fa-search" style="padding: 0 3px 0 30px;" onclick="openSearch();this.setAttribute('onclick','closeSearch()')" aria-hidden="true"></i>

                -->

<!-- x header.php end -->

 x index.php start -->

 original loop
		$count = 0;

			$firstpageQuery = new WP_query('category_name=Utgave 22&ignore_sticky_posts=true');

			/* Start the Loop *
			while ( $firstpageQuery -> have_posts() ) : $firstpageQuery -> the_post();

			$count++;

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 *
				// Cover stories are set to sticky, thus the first post displayed. Cover story needs a different template, so we get this from content-aside.php. The post format is set in  
				if ( is_sticky() ) {
					require( get_template_directory() . '/template-parts/content-aside.php' );
				// if post format is standard, get_post_format actually returns null (!). Hence we want to require content-standard.php
				} elseif ( empty( get_post_format() ) ) {
					require( get_template_directory() . '/template-parts/content-standard.php' );
				// else we can fetch template file for the format, ie. content-aside.php for cover (renamed in functions.php)
				} else {
					get_template_part('template-parts/content', get_post_format() );
				}
				

				if ($count == 1) {
					require(get_template_directory() . '/template-parts/mostread.php');
					
					echo '<div class="frontpage-margin hidden-md-down" style="margin-top: 10vh !important; display: flex; align-items: center;">
  							<div class="mest-lest" style=" font-size: 2.5rem; font-weight: 400; font-style: italic; padding-bottom: 15px;">
  								Siste saker
  							</div>
  							<span class="line"></span>
						  </div>';
				}
				

			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );
*/