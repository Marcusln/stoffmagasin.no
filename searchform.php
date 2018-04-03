

<div id="" class="hidden-md-down" style="background-color: #f9f7f1;">
  <div style="display: flex; justify-content: center; padding-bottom: 50px;">
    <form method="get" style="border-bottom: 1px solid black; max-width: 50vw; text-align: center;"  id="search" action="<?php echo get_site_url( "/" ) . "/"; ?>"> 
      <input class="" autofocus style="background-color: transparent; border: none; height: 50px; width: 74vw; font-size: 40px; text-align: left; outline: none;" type="text" placeholder="<?php echo 'Søk etter noe annet enn «' . get_search_query() . '»…' ?>" name="s" id="s" onblur="if (this.value == '') {
      this.value = '<?php the_search_query(); ?>'
      ;}
      />
      <input type="hidden" id="searchsubmit" /> 
    </form>
  </div>
</div>

<div id="" class="hidden-lg-up" style=" background-color: #f9f7f1;">
  <div style="display: flex; justify-content: center; padding-bottom: 50px; margin-top: 30%; ">
    <form method="get" style="border-bottom: 1px solid black; border-left: 1px solid black; width: 90vw; margin: 0 auto;" id="search" action="<?php echo get_site_url( "/" ) . "/"; ?>"> 
      <input autofocus style="position: relative; background-color: transparent; border: none; font-size: 26px; padding: 5px; text-align: center; outline: none;" type="text" placeholder="Søk og trykk enter…" name="s" id="s"/>
      <input type="hidden" id="searchsubmit" /> 
    </form>
  </div>
</div>