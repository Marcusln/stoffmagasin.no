<div id="fullscreenSearch-single" class="initiallyHidden hidden-md-down" style="width: 100vw; height: 100vh; position: fixed; background-color: #f9f7f1; z-index: 1001;">
  <div id="" class="hidden-md-down bg-color-paper fixed-top" style="box-shadow: 0 3px 4px -4px #7e6d35; border-top: 0px solid black; border-bottom: 1px solid black; height: 50px; opacity: 0.98; display: flex; align-items: center; justify-content: space-between; padding: 0 20px 0 20px; width: 100vw; z-index: 1000;">
    <div style="">
      <a href="/index.php"><img id="headerLogo" src="/wp-content/uploads/2017/04/stoff.png" style="height: 25px; z-index: 1001; filter: none;"></a>
    </div>
    <div class="" style="">
      <a href="https://www.facebook.com/STOFFmagasin/" target="_blank">
        <i class="fa fa-facebook topbar-icon" style="padding: 0 3px 0 3px;" aria-hidden="true"></i>
      </a>
      <a href="https://www.instagram.com/stoffmagasin/" target="_blank">
        <i class="fa fa-instagram topbar-icon" style="padding: 0 3px 0 3px;" " aria-hidden="true"></i>
      </a>
      <a href="https://twitter.com/stoffmagasin" target="_blank">
        <i class="fa fa-twitter topbar-icon" style="padding: 0 15px 0 3px;" aria-hidden="true"></i>
      </a> 
      <a id="" onclick="" class="" style="">
        <i id="search-icon" class="cursor-pointer-hover fa fa-times topbar-icon" style="padding: 0 3px 0 3px;"></i>
      </a>
      <a class="" style="">
        <i id="hamburger-icon" class="fa fa-bars topbar-icon" style="padding: 0 3px 0 3px;"></i>
      </a>
    </div>
</div>
  <div style="height: 20vh;"></div>
  <div style="display: flex; justify-content: center; align-self: center; margin-top: 10%;">
    <form  method="get" id="search" action="<?php echo get_home_url( '/' ) . '/'; ?> "> 
      <input autofocus style="background-color: transparent; border: none; height: 120px; width: auto; font-size: 90px; text-align: center; outline: none;" type="text" placeholder="Søk..." name="s" id="s" onblur="if (this.value == "") {
      this.value = "<?php the_search_query(); ?>"
      ;}
      /> 
      <input type="hidden" id="searchsubmit" /> 
    </form>
  </div>
</div>

<script type="text/javascript">
  var searchQuery = $('#s').val();
  location.href = '//s?'
</script>

<!-- HOME -->

<div id="fullscreenSearch-home">
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

  <script>
  $(function() {
    $('.fa-bars').click(function() {
      $('#fullscreen-menu').fadeIn(200);
      });
  </script>

<div id="" class="initiallyHidden hidden-md-down" style="width: 100vw; height: 100vh; position: fixed; background-color: #f9f7f1;">
  <div id="logo" class="mx-auto d-block" style="display: flex; width: 25vw; padding-top: 25px;">
    <a href="/index.php"><img style="display: block;" src="/wp-content/uploads/2017/04/stoff.png" class="img-fluid mx-auto d-block logo"></a>
  </div>
  <div style="display: flex; justify-content: center; margin-top: 10%;">

    <form autocomplete="nope" method="get" id="search" action="<?php echo get_home_url() . "/"; ?>"> 
      <input id="input-search" autofocus style="background-color: transparent; border: none; height: 120px; width: auto; font-size: 90px; text-align: center; outline: none;" type="text" placeholder="Søk..." name="s" id="s" onblur="if (this.value == "") {
      this.value = "<?php the_search_query(); ?>"
      ;}
      /> 
      <input type="hidden" id="searchsubmit" /> 
    </form>

  </div>

</div>
</div>
<script> // Show/hide search box on click (shows a search box with same background-color in front of #cover)


/*

$(document).click(function () {
    $('#fullscreenSearch').fadeOut('medium');
    $('#search-icon').removeClass('fa-times');
    $('#search-icon').addClass('fa-search');
});
*/
/*
$( document ).on( 'click', function ( e ) {
    if ( $( e.target ).closest( '#input-search' ).find('*').length === 0 ) {
        $( '#fullscreenSearch' ).hide();
    }
});
*/



</script>