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

<?php 
$db = mysql_connect('localhost', 'root', ''); 

mysql_select_db('prestashop',$db); 
 
$sql = "SELECT id_product 
        FROM ps_product 
        WHERE ean13='" . mysql_escape_string($_POST['ean13_input']) . "';"; 

$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

while($data = mysql_fetch_assoc($req)) 
    {

    $sql2 = "SELECT quantity 
             FROM ps_stock_available 
             WHERE id_product='" . mysql_escape_string($data['id_product']) . "';"; 

    $req2 = mysql_query($sql2) or die('Erreur SQL !<br>'.$sql2.'<br>'.mysql_error()); 

    while($data2 = mysql_fetch_assoc($req2)) 
      { 

         $newvar2 = (int)$_POST['number'];
         $newvar= ($data2['quantity'] - (int)$_POST['number']);

          $sql3 = "UPDATE ps_stock_available 
                   SET quantity= '$newvar'
                   WHERE id_product='" . mysql_escape_string($data['id_product']) . "';"; 

          $req3 = mysql_query($sql3) or die('Erreur SQL !<br>'.$sql3.'<br>'.mysql_error()); 

          echo '<br/>';
          echo '<br/>';
          echo "Vous avez retiré $newvar2 Produit(s)";
       }

    } 
mysql_close(); 
?> 


          </section>
        </div><!--/span-->
      </div><!--/row-->

<?php
include ('footer.php');
?>       