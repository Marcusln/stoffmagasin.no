<?php
/*
Template Name: Search
*/

get_header();
?>

<div id="" class="" style=" background-color: #f9f7f1;">
  <div style="display: flex; justify-content: center; padding-bottom: 50px; margin-top: 30%; ">
    <form method="get" style="border-bottom: 1px solid black; border-left: 1px solid black; width: 90vw; margin: 0 auto;" id="search" action="<?php echo get_site_url( "/" ) . "/"; ?>"> 
      <input autofocus style="position: relative; background-color: transparent; border: none; font-size: 26px; padding: 5px; text-align: center; outline: none;" type="text" placeholder="Søk og trykk enter…" name="s" id="s"/>
      <input type="hidden" id="searchsubmit" /> 
    </form>
  </div>
</div>
