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
        	<h1>Calendrier</h1>
        	<?php 
require("model/config.php");
require("model/date.php");
$date= new Date();
$year =	date('Y');
$events = $date -> getEvents($year); // extraction des évènements de la db
$dates = $date -> getAll($year); // création du calendrier année scolaire
?>

	<div class="periods">
        	<div class="year"><?php echo $year; ?></div>
        	<div class="months">
	        	<ul>
	        		<?php foreach ($date->months as $id=>$m){ ?>
	        		<li><a href="#" id="linkMonth<?php echo $id+1?>"><?php echo utf8_encode(substr(utf8_decode($m),0,3)); ?></a></li>
	        		<?php 
		        		}
	        		?>
	        	</ul>
				<br/>
	        	<div>
	        	<?php $dates = current($dates); ?>
	        	<?php foreach($dates as $m=>$days){
		        ?>
		        <div class="month relative" id="month<?php echo $m; ?>">
		        <table>
		        <thead>
		        <tr>
			        <?php foreach ($date->days as $d){ ?>
			        <th><?php echo substr($d,0,3);?></th>
			        <?php 
				        }
			        ?>
		        </tr>
		        </thead>
		        <tbody>
		        <tr>
		        	<?php $end = end($days); foreach ($days as $d=>$w){ ?>
					<?php $time = strtotime("$year-$m-$d");?>
		        	<?php if($d == 1){
					$nb=$w-1;
					if($nb>0){
					?>
					<td colspan="<?php echo $w-1; ?>" class="padding"></td>
					<?php
						}
						}
					?>
		        	<td <?php if($time == strtotime(date('Y-m-d'))){?> class="today"<?php }?>>
					<div class="relative">
					<div class="day"><?php echo $d;?></div>
					</div>
					
					<div class="daytitle">
						<?php echo $date->days[$w-1];?>,&nbsp;<?php echo $d;?>&nbsp;<?php echo $date->months[$m-1];?>
					</div>
					<ul class="events">
						<?php if(isset($events[$time])){
							foreach($events[$time] as $e){
							?>
							<li><?php echo $e;?></li>
							<?php
							}
							}
							?>
					</ul>
					</td>
		        	<?php  if ($w ==7){?>
		        	<tr></tr>
		        	<?php 
		        	}
			        }
			        ?>
					<?php
					if($end != 7){
					?>
						<td colspan="<?php echo 7-$end; ?>" class="padding"></td>
					<?php
					}
					?>
		        </tr>
		        </tbody>
		        </table>
		        </div>
		        <?php	
	        	}
	        	?>
				<br class="clearfloat" />
        	
			</div>
			</div>
			</div>				
	</div>
        </section>
        </div><!--/span-->
      </div><!--/row-->
      <footer>
		<hr>
		<div class="wrap">
			<p class="text-center">©2013 CMS  - All Rights Reserved - Legal Mentions - Privacy Policy - Web Development by mEhz</p>
		</div>
	</footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
<script src="js/tinymce/tiny_mce.js" type="text/javascript"></script>
<script type="text/javascript">
tinyMCE.init({
        theme : "advanced",
        mode : "textareas"
});

</script>
<script>
jQuery(function($){
	var date = new Date();
	var nmonth = date.getMonth();
	var nday = date.getDate();
	var today = (nmonth+1) + "-" + nday;
	if(nmonth >= 7){
	 var current = nmonth-1;
		$("#year1").addClass("active" + nmonth);
		$("#year2").removeClass("active");
	}
	else{
	 var current = nmonth+1;
		$("#year1").removeClass("active+nmonth");
		$("#year2").addClass("active " + nmonth);
	}
	$(".month ."+today).addClass("today");
	$(".month").hide();
	$("#month"+current).show();
	$(".months a#linkMonth"+current).addClass("active");
	$(".months a").click(function(){
		var month = $(this).attr("id").replace("linkMonth","");
		if(month != current){
			$("#month"+current).slideUp();
			$("#month"+month).slideDown();
			$(".months a").removeClass("active");
			$(".months a#linkMonth"+month).addClass("active");
			$("#year1").addClass("active");
			current = month;
		}
		return false;
	});
}); 
</script>
</body>
</html>