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
	$post->save($_POST);
	$_GET["id"] = $post -> id;
}

if(isset($_GET["suppr"])){
	$post->del($_GET["suppr"]);
}

?>

<?php
include ('header.php');
?>

    <div class="container-fluid">
      <div class="row-fluid">
      <div class="span3">
          <div class="well sidebar-nav">
            <p> les posts sont les éléments qui composent le contenu de votre site, autrement dit les différentes pages avec textes et photos. Ces posts seront soit inclus dans des catégories elles-mêmes inclues dans des pages, soit classés comme non catégorisés.</p>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
        <section>
        <h1>Les posts</h1>
        <table class="table table-hover">
        		<?php
				$cat=$post->find(array(
				"order"=>"id ASC",
				"fields"=>"id,name,page_id",
				"limit"=> 10
				));
					$i=0;
					foreach ($cat as $c) {
					$i++;
				?>
				<tr>
				<td><?php echo $i?></td>
				<td><?php echo $c["name"];?></td>
       			<td><?php echo $c["page_id"];?></td>
				<td>
					<a href="post_edit.php?id=<?php echo $c["id"]; ?>">EDIT</a>
					<a href="post.php?suppr=<?php echo $c["id"]; ?>">DEL</a>
				</td>
				</tr>
				<?php
				}
				?>
       </table>
       <button type="button"><a href="post_edit.php">Ajouter un post</a></button>

        </section>
        </div><!--/span-->
      </div><!--/row-->

     <?php
include ('footer.php');
?>   