<div id="topbar-mobile" class="fixed-top hidden-lg-up bg-color-paper" style="opacity: 0.98; box-shadow: 0 3px 4px -4px #7e6d35; width: 100%; height: 50px; display: flex; justify-content: space-between; align-items: center;  border-bottom: 1px solid black;">
  <div class="">
    <a href="/index.php">
    	<img src="/wp-content/uploads/2017/04/stoff.png" class="" style="align-self: left; height: 30px; padding: 0 3px 0 15px;">
    </a>
  </div>
  <div>
  	<a id="menu-icon-mobile" class="" style="height: 100%; width: 50px;
  	">
        <i class="fa fa-bars topbar-icon" style="padding: 0 15px 0 3px; color: black;"></i>
      </a>
  </div>
</div>

<div id="fullscreen-menu-mobile" class=" hidden-lg-up initiallyHidden" style="width: 100vw; height: 120vh; background-color: black; z-index: 1030; position: fixed; top: 50px;">
	<div id="" class="fixed-top hidden-lg-up" style="background-color: black; width: 100%; height: 50px; display: flex; justify-content: space-between; align-items: center;">
	  <div class="">
	    <a href="/index.php">
	    	<img src="/wp-content/uploads/2017/04/stoff.png" class="" style="align-self: left; height: 30px; padding: 0 3px 0 15px; filter: invert(100%);">
	    </a>
	  </div>
	  <div>
	  	<a id="menu-mobile-close" class="" style="height: 100%; width: 50px;">
	        <i class="fa fa-times topbar-icon" style="font-size: 30px; padding: 0 15px 0 3px; color: white;"></i>
	      </a>
	  </div>
	</div>

	<div id="mobile-menu-links" style="width: 100%; height: 80vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
		<div style="display: flex;">
			<a href="/samfunn/" style="">
			Samfunn<br />
			</a>
		</div>
		<div style="display: flex;">
			<a href="/kultur/">
			Kultur<br />
			</a>
		</div>
		<div style="display: flex;">
			<a href="/debatt/">
			Debatt<br />
			</a>
		</div>
		<div style="display: flex;">
			<a href="/bergensguide/">
			Bergensguide<br />
			</a>
		</div>
		<div style="display: flex;">
			<a href="/sok/">
			Søk<br />
			</a>
		</div>
		<div style="display: flex;">
			<a href="/om-oss">
			Om oss<br />
			</a>
		</div>
	</div>
	
	<div class="" style="font-size: 6.5vh; color: white; position: absolute; bottom: 25vh; right: 5vw; display: flex; flex-direction: row; flex-wrap: nowrap;">
	      <a href="https://www.facebook.com/STOFFmagasin/" target="_blank">
	        <i class="fa fa-facebook cursor-pointer-hover" style="padding: 0 10px 15px 10px; color: #3b5998 !important;" aria-hidden="true"></i>
	      </a>
	      <a href="https://www.instagram.com/stoffmagasin/" target="_blank">
	        <i class="fa fa-instagram cursor-pointer-hover" style="padding: 0 10px 15px 10px; color: #cd486b !important;" " aria-hidden="true"></i>
	      </a>
	      <span href="" target="_blank">
	        <i class="fa fa-twitter cursor-pointer-hover" style="padding: 0 10px 15px 10px; color: #4099FF !important;" aria-hidden="true"></i>
	      </a> 
    </div>

</div>

<script>
		$(function() {
		    $('#menu-icon-mobile').click(function() {
		      $('#fullscreen-menu-mobile').fadeIn();
		      $('#fullscreen-menu-mobile img').css('filter', 'invert(100%)');
		      //$('#topbar-mobile').toggleClass('bg-color-black bg-color-paper')
		    });
		    $('#menu-mobile-close').click(function() {
		      $('#fullscreen-menu-mobile').fadeOut();
		      //$('#topbar-mobile').toggleClass('bg-color-black bg-color-paper')
		    });
  		});
</script>

