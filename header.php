<?php
require "admin/connect/load.php";
 ?>
 
<div id="logo">
		<figure>
			<img src="images/logo-white-transp.png" alt="Logo Institut Dartois-Guillemins" />
		</figure>
</div>
<nav id="menu" class="clearfix">
	<div class="rmm clearfix" data-menu-style = "minimal">
	<ul>
		<?php
			$cat=$page->find(array(
			"order"=>"ordre ASC",
			"fields"=>"id,name,link",
			"limit"=> 10
			));
		?>
        <?php
			$i=0;
			foreach ($cat as $c) {
			$i++;
		?>
			<li><a href="<?php echo $c["link"];?>"><?php echo $c["name"];?></a></li>
		<?php
		}
		?>
	</ul>
</div>
</nav>