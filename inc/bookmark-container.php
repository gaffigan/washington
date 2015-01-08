<?php
/* ----------------------------- +/
BOOKMARK CONTAINER
Parent: "bookmark-container"
/+ ----------------------------- */
?>

<div id="infoPanelContainer">

	<ol class="carousel-indicators">
		<li data-target="#singlePlayerOptions" data-slide-to="0" class="active"></li>
		<li data-target="#singlePlayerOptions" data-slide-to="1" class=""></li>
	</ol>

	<div id="anchor-point"></div>

	<div id="singlePlayerOptions" class="carousel slide" data-ride="carousel">

	  <div class="carousel-inner" role="listbox">
	    
	    <div id="sld_about" class="item active"><?php include('inc/panel_about.php'); ?></div><!-- /#sld_about -->

	    <div id="sld_bookmarks" class="item"><?php include('inc/panel_bookmarks.php'); ?></div><!-- /#sld_bookmarks -->

	  </div><!-- /#carousel-inner -->

	</div><!-- /#singlePlayerOptions -->

</div><!-- /bookmarkContainer -->