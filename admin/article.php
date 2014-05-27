<?php 
session_start();
require("connect/load.php");
if(Auth::islogged()){
	
}else{
	header('Location:index.php');
}
?>

<?php
include ('header.php');
?>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
           <p>Bienvenue sur le panel de ventes d'articles, vous devez d'abord scanner le code barre dans la partie "Code barre(EAN13) du produit" puis insérer le nombre de produits vendus.
            Si  vous voulez vendre un autre produit cliquez sur le "+".<br/>
            Appuiez ensuite sur vendre lorsque vous avez fini.
           </p>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <section>
            <h1>Vente d'articles</h1>

<form action="action.php" method="post">
 <p>Code barre(EAN13) du produit : <input type="text" name="ean13_input" /></p>
  <p>Nombre de produits : <input type="text" name="number" /></p>
  <a href="#"><img class="crox"src="images/illustrations/aiga-first-aid.png" width="20px" height="20px" alt="google analytics"></a>
 <p><input class="btn  btn-inverse" type="submit" value="VENDRE"></p>
</form>

          </section>
        </div><!--/span-->
      </div><!--/row-->

<?php
include ('footer.php');
?>       