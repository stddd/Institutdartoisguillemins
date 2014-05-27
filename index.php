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
<section id="screen1">
<div id="logo">
		<figure>
			<img src="images/logo-white-transp.png" alt="Logo Institut Dartois-Guillemins" />
		</figure>
</div>
<nav id="menu" class="clearfix navcontact">
	<div class="rmm clearfix" data-menu-style = "minimal">
	<ul class="group">
		<?php
			$cat=$page->find(array(
			"order"=>"ordre ASC",
			"fields"=>"id,name,link",
			"limit"=> 10
			));
		?>
        <?php
			foreach ($cat as $c) {
		?>
			<li><a href="<?php echo $c["link"];?>"><?php echo $c["name"];?></a></li>
		<?php
		}
		?>
	</ul>
</div>
</nav>
</section>
<section id="homepage">
	<section id="part1">
		<h2>Un accueil chaleureux</h2>
		<p>Officine & beauté, des spécialistes en esthétique et des produits cosmétopharmaceutiques <br/>la beauté par la santé pour les hommes et les femmes
		</p>
		<div class="container">
		<div class="row">
			<div class="item">
				<div class="background_item">
					<div class="cta-icons">
						<figure>
						<img src="images/052.png" alt="erable" />
						</figure>
					</div>
					<h3>Balnéothérapie</h3>
					<figure>
						<img src="images/balneo.jpg" alt="Logo Institut Dartois-Guillemins" />
					</figure>
					<p>
						Pour étancher 
						toutes les soifs de bien-être du corps, 
						cédez à la balnéothérapie !
					</p>
				</div>
			</div>
			<div class="item">
				<div class="background_item">
					<div class="cta-icons">
						<figure>
						<img src="images/052.png" alt="erable" />
					</figure>
					</div>
					<h3>Massage</h3>
					<figure>
						<img src="images/balneo.jpg" alt="Logo Institut Dartois-Guillemins"/>
					</figure>
					<p>
						Massages 
						personnalisés adapté à
						vos besoins et à vos envies ! 
					</p>
			</div>
			</div>
			<div class="item">
				<div class="background_item">
					<div class="cta-icons">
						<figure>
						<img src="images/052.png" alt="erable" />
					</figure>
					</div>
					<h3>Epilation</h3>
					<figure>
						<img src="images/balneo.jpg" alt="Logo Institut Dartois-Guillemins" />
					</figure>
					<p>
						Epilations sur
	 					mesure - cire bio 
						préparée en notre laboratoire.
					</p>
			</div>
			</div>
		</div>
	</div>
	</section>
	<section id="part2">
		<h2>Offres spéciales</h2>
		<div class="container">
			<div class="row">
				<div class="item">
					<figure>
						<img src="images/promo_1.jpg" alt="Logo Institut Dartois-Guillemins" >
					</figure>
				</div>
				<div class="item">
					<figure>
						<img src="images/promo_2.jpg" alt="Logo Institut Dartois-Guillemins" >
					</figure>
				</div>
			</div>
		</div>
	</section>
	<section id="part3">
		<h2>Nos technologies</h2>
		<div class="container">
			<div class="row">
		<div class="item">
			<h3>Icoone</h3>
			<figure>
				<img src="images/icoone.png" alt="Logo Institut Dartois-Guillemins" >
			</figure>
			<p>Resculpter les courbes
 			sans agresser les tissus
 			</p>	
		</div>
		<div class="item">
			<h3 id="example1">Aquaspa Gold</h3>
			<figure>
				<img src="images/aqua.png" alt="Logo Institut Dartois-Guillemins" >
			</figure>
			<p>Ensemble thalasso-thermal
-ayurvédique complet
 			</p>	
		</div>
		<div class="item">
			<h3>Cryolift</h3>
			<figure>
				<img src="images/cryo.png" alt="Logo Institut Dartois-Guillemins" >
			</figure>
			<p>Une technique de mésothérapie
 sans aiguilles 
 			</p>	
		</div>
		<div class="item">
			<h3>Podomaster</h3>
			<figure>
				<img src="images/podo.png" alt="Logo Institut Dartois-Guillemins" >
			</figure>
			<p>une machine idéale 
pour la pédicure
 			</p>	
		</div>
	</div>
</div>
	</section>
	<section id="part4">
		<h2>Online Shop</h2>
		<h3>Produits les plus vendus</h3>
		<div class="container">
			<div class="row">
				<div class="item">
					<div class="background_item">
						<figure>
							<img src="images/product_1.jpg" alt="Logo Institut Dartois-Guillemins" >
						</figure>
						<div class="description">
							<h4>Savon Mavala</h4>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						<div class="price">
							<span>5€</span>
							<a class="level2" href="#">Buy me</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="background_item">
						<figure>
							<img src="images/product_1.jpg" alt="Logo Institut Dartois-Guillemins" >
						</figure>
						<div class="description">
							<h4>Savon Mavala</h4>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						<div class="price">
							<span>5€</span>
							<a class="level2" href="#">Buy me</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="background_item">
						<figure>
							<img src="images/product_1.jpg" alt="Logo Institut Dartois-Guillemins" >
						</figure>
						<div class="description">
							<h4>Savon Mavala</h4>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						<div class="price">
							<span>5€</span>
							<a class="level2" href="#">Buy me</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="background_item">
						<figure>
							<img src="images/product_1.jpg" alt="Logo Institut Dartois-Guillemins" >
						</figure>
						<div class="description">
							<h4>Savon Mavala</h4>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						<div class="price">
							<span>5€</span>
							<a class="level2" href="#">Buy me</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="background_item">
						<figure>
							<img src="images/product_1.jpg" alt="Logo Institut Dartois-Guillemins" >
						</figure>
						<div class="description">
							<h4>Savon Mavala</h4>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						<div class="price">
							<span>5€</span>
							<a class="level2" href="#">Buy me</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="background_item">
						<figure>
							<img src="images/product_1.jpg" alt="Logo Institut Dartois-Guillemins" >
						</figure>
						<div class="description">
							<h4>Savon Mavala</h4>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						<div class="price">
							<span>5€</span>
							<a class="level2" href="#">Buy me</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="part5">
		<div class="container">
			<div class="row">
				<div class="item">
					<figure>
						<img src="images/facebook.png" alt="Logo Institut Dartois-Guillemins" >
					</figure>
				</div>
				<div class="item">
					<figure>
						<img src="images/twitter.png" alt="Logo Institut Dartois-Guillemins" >
					</figure>
				</div>
				<div class="item">
					<figure>
						<img src="images/google.png" alt="Logo Institut Dartois-Guillemins" >
					</figure>
				</div>
			</div>
		</div>
	</section>
	<section id="part6"> 
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
<script>
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 70;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});


	});

	(function ($) {
	$.fn.vAlign = function() {
		return this.each(function(i){
		var h = $(this).height();
		var oh = $(this).outerHeight();
		var mt = ((h + (oh - h)) / 2);	
		$(this).css("margin-top", "-" + mt + "px");	
		$(this).css("top", "50%");
		$(this).css("position", "absolute");
		});	
	};
	})(jQuery);
	$(document).ready(function(){
		$("#logo").vAlign();
	});
</script>

</body>
</html>