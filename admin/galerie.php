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
        
        <form method="post" action="article.php">
				<legend>ADMIN</legend>
					<label>Photo</label>
					<input type="hidden" name="id"  value="id" />
					<input type="text" name="titre" placeholder="Type something…" value="" />
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