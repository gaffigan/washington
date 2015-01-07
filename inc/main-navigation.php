<?php
/* ----------------------------- +/
MAIN NAVIGATION 
Parent: "mainNavigation"
/+ ----------------------------- */
?>

<nav id="mainNavigation" class="navbar navbar-default" role="navigation">
	<div class="container-fluid"> 

	    <a id="mainNavBrand" class="navbar-brand" href="#">
	      <img src="images/default-logo.png"/>
	    </a>
	    
	    <ul id="mainNavDropDown" class="nav navbar-nav">
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	          <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
	          <span class="caret"></span>
	        </a>
	        <ul class="dropdown-menu" role="menu">
	          <li><a href="#">Home</a></li>
	          <li><a href="#">Videos</a></li>
	          <li><a href="#">Events</a></li>
	        </ul>
	      </li>
	    </ul><!-- /nav navbar-nav -->

	    <div id="mainNavVidTitle" class="videoTitle">
	      <span id="nowWatching">Now Watching</span>
	      <?php include('inc/_data_event-title.php'); ?>
	    </div>

	    <ul id="mainNavProfileDropDown" class="nav navbar-nav navbar-right">
	      <li class="dropdown">
	      
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
	          <span class="caret"></span>
	        </a>
	        
	        <ul class="dropdown-menu" role="menu">
	          <li><a href="#">Sriram Avadhan...</a></li>
	          <li><a href="#">Favorites</a></li>
	          <li><a href="#">Profile</a></li>
	          <li class="divider"></li>
	          <li><a href="#">Sign Out</a></li>
	        </ul>
	        
	      </li>
	    </ul><!-- /#profileMenuBar --> 
	    
	</div><!-- /.container-fluid --> 
</nav><!-- /#mainNavigation -->