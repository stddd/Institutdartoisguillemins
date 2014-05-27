<?php
session_start();
require "connect/load.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
        <script src="js/jquery-1.8.2.min.js"></script>
    <script>
	(function ($) {
	$.fn.vAlign = function() {
		return this.each(function(i){
		var h = $(this).height();
		var oh = $(this).outerHeight();
		var mt = ((h + (oh - h)) / 2)+10;	
		$(this).css("margin-top", "-" + mt + "px");	
		$(this).css("top", "50%");
		$(this).css("position", "absolute");	
		});	
	};
	})(jQuery);			
	
	(function ($) {
	$.fn.hAlign = function() {
		return this.each(function(i){
		var w = $(this).width();
		var ow = $(this).outerWidth();	
		var ml = ((w + (ow - w)) / 2);	
		$(this).css("margin-left", "-" + ml + "px");
		$(this).css("left", "50%");
		$(this).css("position", "absolute");
		});
	};
	})(jQuery);
	
	$(document).ready(function(){
		$(".container").vAlign();
		$(".container").hAlign();
	});
	</script>
	<script>
		$(document).ready(function(){
	$(".inputValDefaut").bind({
		blur:function(){
			if($(this).val() == "")
			{
				$(this).val($(this).attr("title"));
				$(this).removeClass("inputValDefautValeur");
				$(this).css("color", "grey");
			}
		},
		focus:function(){
			if($(this).val() == $(this).attr("title"))
			{
				$(this).val("");
				$(this).addClass("inputValDefautValeur");
				$(this).css("color", "black");
			}
		}
	});
	$(".inputValDefaut").each(function(){$(this).val($(this).attr("title"))});
	});
	</script>
  </head>
  <body>
  <?php
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])){
	extract($_POST);
	$sql="SELECT id FROM users WHERE login='$login' AND password =SHA1('$password')";
	$req=mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($req)>0){
		$_SESSION['Auth'] = array(
				'login'=> $login,
				'password'=>$password);
		header('Location:panel.php');
	}
	else {
  ?>
		<div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Attention!</strong> Invalid username password combination..
</div>
<?php
	}
}
?>
    <div class="container">   
      <div class="login">
        <div class="login-screen">
          <div class="login-icon">
            <figure>
            	<img src="images/dartois.png" alt="Welcome to your admin panel" />
            </figure>
            <h4>Bienvenue sur le panel <small>d'administration</small></h4>
          </div>

          <form method="post" action="index.php" class="login-form auth">
            <div class="control-group">
              <input type="text" class="login-field inputValDefaut" value="" title="Enter your login" id="login-name" name="login" />
              <label class="login-field-icon fui-man-16" for="login-name"></label>
            </div>
            <div class="control-group">
              <input type="password" class="login-field inputValDefaut" value="" title="Password" id="login-pass" name="password" />
              <label class="login-field-icon fui-lock-16" for="login-pass"></label>
            </div>
            <button type="input" class="btn btn-primary btn-large btn-block" >Login</button>
            <a class="login-link" href="#">Mot de passe oublié</a>
       	  </form>
       	  
          </div>
        </div>
      </div>
      <script type="text/javascript" src="js/modernizr-latest.js"></script>
    <!--[if lte IE 8]>
      <link href="css/ie7.css" rel="stylesheet">
    <![endif]-->
  </body>
</html>
