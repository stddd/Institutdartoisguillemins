<?php 
session_start();
require("connect/load.php");
if(Auth::islogged()){
	
}else{
	header('Location:index.php');
}
?>
<?php
if(!empty($_POST)){
	$page->save($_POST);
	$_GET["id"] = $page -> id;
}
if(isset($_GET["suppr"])){
	$page->del($_GET["suppr"]);
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
        <h1>Les pages</h1>
        <table class="table table-hover">
        	<thead>
        <tr>
          <th>#</th>
          <th>Nom de la page</th>
          <th>URL</th>
          <th>Ordre</th>
          <th>Editer ou Supprimer</th>
        </tr>
      </thead>
        	<tbody>
        		<?php
				$cat=$page->find(array(
				"order"=>"ordre ASC",
				"fields"=>"id,name,link,ordre",
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
				<td><?php echo $c["name"];?></td>
				<td><?php echo $c["link"];?></td>
				<td><?php echo $c["ordre"];?></td>
				<td>
					<a href="page_edit.php?id=<?php echo $c["id"]; ?>">EDIT</a>
					<a href="page.php?suppr=<?php echo $c["id"]; ?>">DEL</a>
				</td>
				</tr>
				<?php
				}
				?>
				<tbody>
       </table>
       <button type="button"><a href="page_edit.php">Ajouter un article</a></button>

        </section>
        </div><!--/span-->
      </div><!--/row-->

    <?php
include ('footer.php');
?>   