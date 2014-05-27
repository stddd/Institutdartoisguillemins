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
        <h1>Les posts</h1>
        <table class="table table-hover">
        		<?php
				$cat=$NewsLetter->find(array(
				"order"=>"id ASC",
				"fields"=>"id,email,ip_addr,date",
				"limit"=> 10
				));
				?>

                 <?php
					$i=0;
					foreach ($cat as $c) {
					$i++;
				?>
				<tr>
				<td><?php echo $i?></td>
				<td><?php echo $c["email"];?></td>
        <td><?php echo $c["ip_addr"];?></td>
        <td><?php echo $c["date"];?></td>
				<td>
					<a href="post_edit.php?id=<?php echo $c["id"]; ?>">EDIT</a>
					<a href="post.php?suppr=<?php echo $c["id"]; ?>">DEL</a>
				</td>
				</tr>
				<?php
				}
				?>
       </table>
       <button type="button"><a href="post_edit.php">Ajouter un email</a></button>

        </section>
        </div><!--/span-->
      </div><!--/row-->

<?php
include ('footer.php');
?>       