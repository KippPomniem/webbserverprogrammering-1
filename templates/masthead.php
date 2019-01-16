<?php
/**
 * Mall för masthead
 */
?>
 
  <?php
   $h1span = "Om oss";
  header("Content-type: text/html; charset=utf-8");
  ?>
  
<header>
	 <div class="hwrap">
		<a href="./"> <img class="logo" alt="Startsidan" src="https://www.datanom.ax/~42209/webbserverprogrammering-1/html/img/laxlogo.png"/></a>
		<h1>Läxhjälpen: <span><?php echo $h1span; ?></span></h1>
	 </div>
	<hr />
</header>