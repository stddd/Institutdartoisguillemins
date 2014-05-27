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
        
        <form method="post" action="post.php">
		<legend>ADMIN</legend>
					<?php
					if(isset($_GET["id"])){
						$id=$_GET["id"];
						$post->id=$id;
						$post->read();
						$titre=$post->name;
						$contenu=$post->contenu;
					}
					else {
						$id=$titre=$contenu="";
					}
					?>
					<label>Titre :</label>
					<input type="hidden" name="id"  value="<?php echo $id; ?>" />
					<input type="text" name="name" placeholder="Type something…" value="<?php echo $titre; ?>" />
					 <br/>
					 <br/>
					 <label>Contenu :</label>
					 <textarea class="wysiwyg" name="contenu"><?php echo $contenu; ?></textarea>
					 <br/>
					 <br/>
					<input type="submit" value="envoyer"/>
				</form>
        </section>
        </div><!--/span-->
      </div><!--/row-->
<?php
include ('footer.php');
?>   
</html>