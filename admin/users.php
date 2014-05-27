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
       		 <h1>PANEL</h1>
         </section>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

     <?php
include ('footer.php');
?>   