<?php
/*Require */
require(__DIR__."/core.php");
require(__DIR__."/../model/model.php");
require(__DIR__."/../model/class.auth.php");
require(__DIR__."/../model/classNewsletter.php");

/*Instancier un objet ou chargement d'un Model */
$page = Model::load("category");
$post = Model::load("post_model");
$c = new Category();
$b = new Category();
$Auth=new Auth();
$user= Model::load("user");
$NewsLetter = Model::load("newsletter_model");

/*connexion à la DB*/
$db = @mysql_connect($config['db_server'],$config['db_user'],$config['db_pass']);
if (!$db) {
	print "(error #".mysql_errno()." : ".mysql_error().")";
	exit();
}
$bdd = mysql_select_db($config['db_name']) or die(mysql_error());
mysql_query("SET NAMES 'utf8'");
?>
