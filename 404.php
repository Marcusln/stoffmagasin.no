<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Stoffu
 */

get_header(); 

?>

<div id="" class="hidden-md-down" style="background-color: #f9f7f1;">
  <div style="display: flex; justify-content: center; padding-bottom: 50px;">
    <form method="get" style="border-bottom: 1px solid black; max-width: 50vw; text-align: center;"  id="search" action="<?php echo get_site_url( "/" ) . "/"; ?>"> 
      <input class="" autofocus style="background-color: transparent; border: none; height: 50px; width: 74vw; font-size: 40px; text-align: left; outline: none; font-family: 'Ludacrys', serif;" type="text" placeholder="Søk …" name="s" id="s" />
      <input type="hidden" id="searchsubmit" /> 
    </form>
  </div>
</div>

<div id="" class="hidden-lg-up" style=" background-color: #f9f7f1;">
  <div style="display: flex; justify-content: center; padding-bottom: 50px; margin-top: 30%; ">
    <form method="get" style="border-bottom: 1px solid black; border-left: 1px solid black; width: 90vw; margin: 0 auto;" id="search" action="<?php echo get_site_url( "/" ) . "/"; ?>"> 
      <input autofocus style="font-family: 'Ludacrys', serif; position: relative; background-color: transparent; border: none; font-size: 26px; padding: 5px; text-align: center; outline: none;" type="text" placeholder="Søk og trykk enter…" name="s" id="s"/>
      <input type="hidden" id="searchsubmit" /> 
    </form>
  </div>
</div>

<div class="" style="font-family: 'LudacrysStencil', serif; font-size: 25vh; display: flex; justify-content: center; align-items: center;">404</div>
<div style="font-family: 'Ludacrys', serif; font-size: 22px; display: flex; justify-content: center; align-items: center;">
	Vi fant ingenting her.
</div>

<?php

get_footer();
