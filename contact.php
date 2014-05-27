<?php
require "admin/connect/load.php";
 ?>
<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Institut Dartois-Guillemins</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
	<script type="text/javascript" src="js/load_googlemap.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
</head>
<body>
<section id="screen1_contact">
<nav id="menu" class="clearfix navother">
	<div class="rmm clearfix" data-menu-style = "minimal">
	<ul>
		<?php
			$cat=$page->find(array(
			"order"=>"ordre ASC",
			"fields"=>"id,name,link",
			"limit"=> 10
			));
		?>
        <?php
			$i=0;
			foreach ($cat as $c) {
			$i++;
		?>
			<li><a href="<?php echo $c["link"];?>"><?php echo $c["name"];?></a></li>
		<?php
		}
		?>
	</ul>
</div>
</nav>
</section>
<section id="contact" class="clearfix">
	<section id="part1">
		<h2>Inscivez-vous à notre newletter</h2>
	</section>
	<section id="part2">
	</section>
	<section id="part3"> 
		<div class="separ_bar2"></div>
		<div id="map"></div>
	</section>
</section>
<footer>
	<div class="separ_bar3"></div>
	<div class="wrap">
	<p>©2014 Institut Dartois-Guillemins - All Rights Reserved - Legal Mentions - Privacy Policy - Web Development by Bauduin David</p>
	</div>
</footer>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/responsivemobilemenu.js"></script>
<script>
$(document).ready(function(){
	$('html,body').animate({scrollTop:0}, 1);
});
</script>

</body>
</html>