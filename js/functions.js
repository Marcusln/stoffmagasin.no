

/* Adjust height, ikke i bruk 

   $(document).ready(function() {
        var divHeight = $('.logo').height() * 0.85; 
        var divHeightCalc = divHeight;
        $('.utgave').css('height', divHeight+'px');
    });

      $(document).ready(function() {
        var divHeight = $('.logo').height() + ; 
        var divHeightCalc = divHeight;
        $('.utgave').css('height', divHeight+'px');
    });
   
Adjust height end */

/* NY NAVBAR */

$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });

/* NY NAVBAR END */

/* Make menu fit frontpage div height 

$(function(){
	var topbarHeight = document.getElementById('topbar').offsetHeight;
 	var logoHeight = document.getElementById('logo').offsetHeight;
 	var logoMenuHeight = document.getElementById('logoMenu').offsetHeight;
 	var sumHeight = topbarHeight + logoHeight + logoMenuHeight;
  document.getElementById('fullscreenMenu').style.height = sumHeight+'px' ;
});

  <script>

$(function() {
   topbarHeight = document.getElementById('topbar').offsetHeight;
   logoHeight = document.getElementById('logo').offsetHeight;
   logoMenuHeight = document.getElementById('logoMenu').offsetHeight;
   sumHeight = topbarHeight + logoHeight + logoMenuHeight;
}); 

function openNav() {
  document.getElementById('fullscreenMenu').style.height = sumHeight+'px' ;
}

function closeNav() {
    document.getElementById("fullscreenMenu").style.height = "0%";
}
</script>

2206
$(function() {
   topbarHeight = $('#topbar').outerHeight();
   logoHeight = $('#logo').outerHeight();
   logoMenuHeight = $('#logoMenu').outerHeight();
   coverHeight = $('#cover').outerHeight();

   sumHeight = logoHeight;
}); 

*/



// max-height function for cover
/* legger den inline istedet
$(window).on('load', function() {
   $topbarHeight = $('#topbar').outerHeight(true);
   $logoHeight = $('#logo').outerHeight(true);
   $logoMenuHeight = $('#logoMenu').outerHeight(true);
   $coverHeight = $('#cover').outerHeight(true);
   $maxCoverHeight = 200 + 'px';
   //$searchHeight = $('#fullscreenSearch').outerHeight(true);

   sumHeight = $topbarHeight + $logoHeight + $logoMenuHeight + $coverHeight;
   
});

*/

/* gjøre search like høy som cover
$(document).ready(function() {
  $innholdHeight = $('#cover').height();
  $('#fullscreenSearch').height($innholdHeight);
  $('input').find('#s').focus();
});

*/


/*
$(window).on('load', function() {
   searchHeight = calc(100vh - topbarHeight - logoHeight - logoMenuHeight);
}); 
*/


/*    sumHeight = topbarHeight + logoHeight + logoMenuHeight + coverHeight + overlayHeight; */

/* Script for å endre farge osv på header i single

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

*/