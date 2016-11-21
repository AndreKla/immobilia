<?php

class Menu {
	


public static function createMenu() {


?>


<div class="main_container">
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
	<div class="navbar nav_title" style="border: 0;">
	  <a href="index.html" class="site_title"><span>Team Name</span></a>
	</div>

	<div class="clearfix"></div>

	<!-- menu profile quick info -->
	<div class="profile">
	  <div class="profile_pic">
		<img src="images/img.jpg" alt="..." class="img-circle profile_img">
	  </div>
	  <div class="profile_info">
		<span>Welcome,</span>
		<h2>John Doe</h2>
	  </div>
	</div>
	<!-- /menu profile quick info -->

	<br />

	<!-- sidebar menu -->
	<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
	  <div class="menu_section" >
		<h3> - </h3>
		<ul class="nav side-menu">
		  <li><a><i class="fa fa-home"></i> Management Cockpit <span class="fa fa-chevron-down"></span></a>
			<ul class="nav child_menu">
			  <li><a href="index3.php">�bersicht</a></li>
			  <li><a href="markt.php">Markt</a></li>
			  <li><a href="index2.php">Jahresabschluss</a></li>
			  <li><a href="konkurrenz.php">Konkurrenz</a></li>
			  <li><a href="index2.php">Strategie</a></li>
			</ul>
		  </li>
		  <li><a href="map.php"><i class="fa fa-edit"></i> Map</a>
		  </li>
		  <li><a href="map.php"><i class="fa fa-edit"></i> Immobilien / Grundst�cke</a>
		  </li>
		  <li><a href="auktion.html"><i class="fa fa-edit"></i> Auktionen</span></a>
		  </li>
		</ul>
	  </div>
	  <div class="menu_section">
		<h3>Dein Unternehmen</h3>
		<ul class="nav side-menu">
		  <li><a><i class="fa fa-bug"></i> Personal <span class="fa fa-chevron-down"></span></a>
			<ul class="nav child_menu">
			  <li><a href="personal_bestand.php">Bestand</a></li>
			  <li><a href="einstellen.php">Einstellen</a></li>
			</ul>
		  </li>
		  <li><a><i class="fa fa-windows"></i> Buchungen <span class="fa fa-chevron-down"></span></a>
			<ul class="nav child_menu">
			  <li><a href="page_403.php">Bestands Konten</a></li>
			  <li><a href="page_403.php">Aufwand Ertrags Konten</a></li>
			  <li><a href="page_404.php">SBK </a></li>
			  <li><a href="page_500.php">GV</a></li>
			</ul>
		  </li>                 
		</ul>
	  </div>

	</div>
	<!-- /sidebar menu -->

	<!-- /menu footer buttons -->
	<div class="sidebar-footer hidden-small">
	  <a data-toggle="tooltip" data-placement="top" title="Settings">
		<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
	  </a>
	  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
		<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
	  </a>
	  <a data-toggle="tooltip" data-placement="top" title="Lock">
		<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
	  </a>
	  <a data-toggle="tooltip" data-placement="top" title="Logout">
		<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
	  </a>
	</div>
	<!-- /menu footer buttons -->
  </div>
</div>

<?php
}

public static function createFooter() {

?>

		<!-- footer content -->
        <footer style="background-color:#EDEDED">
          <div class="pull-right fixed" >
            Kapital: 10.000.000 �</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

<?php
}}
?>




