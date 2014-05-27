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
        <?php
          include ('sidebar.php');
        ?>
        <div class="span9">
        <section>
        
        <form method="post" action="page.php">
		<legend>Gestion de pages</legend>
					<?php
					if(isset($_GET["id"])){
						$id=$_GET["id"];
						$page->id=$id;
						$page->read();
						$titre=$page->name;
						$ordre=$page->ordre;
						$url=$page->link;
					}
					else {
						$id=$titre="";
						$id=$ordre="";
						$id=$url="";
					}
					?>
					<label>Nom de la page :</label>
					<input type="hidden" name="id"  value="<?php echo $id; ?>" />
					<input type="text" name="name" placeholder="Type something…" value="<?php echo $titre; ?>" /><br/>
					<label>Url de la page :</label>
					<input type="text" name="link" placeholder="Type something…" value="<?php echo $url; ?>" /><br/>
					<label>Ordre dans le menu :</label>
					<input type="text" name="ordre" placeholder="Type something…" value="<?php echo $ordre; ?>" />
					 <br/>
					<input type="submit" value="envoyer"/>
				</form>
        </section>
        </div><!--/span-->
      </div><!--/row-->
<?php
include ('footer.php');
?>   