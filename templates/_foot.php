<div id="social">
<div class="container">
	<div class="row centered">

		<?php /*
		<div class="col-lg-2">
			<a href="#"><i class="fa fa-dribbble"></i></a>
		</div>
		<div class="col-lg-2">
			<a href="#"><i class="fa fa-facebook"></i></a>
		</div>
		<div class="col-lg-2">
			<a href="#"><i class="fa fa-twitter"></i></a>
		</div>
		<div class="col-lg-2">
			<a href="#"><i class="fa fa-linkedin"></i></a>
		</div>
		<div class="col-lg-2">
			<a href="#"><i class="fa fa-instagram"></i></a>
		</div>
		<div class="col-lg-2">
			<a href="#"><i class="fa fa-tumblr"></i></a>
		</div> */
		?>

		<?php foreach ($options->rep_1 as $key){
		echo 
		"<div class='col-lg-2'>
			<a href='{$key->text_url}' target='_blank'><i class='{$key->select_icon->title}'></i></a>
		</div>";
		} ?>

	</div><!--/row -->
</div><!--/container -->
</div><!--/social -->



<div id="footerwrap">
<div class="container">
	<div class="row centered">
		<div class="col-lg-4">
			<?php /// <p><b>WEB DESIGNER, DEVELOPER & GAME ADDICT</b></p> ?>
			<p><b><?=$options->text_2;?></b></p>
		</div>
	
		<div class="col-lg-4">
			<p><?=$options->text_3;?></p>
		</div>
		<div class="col-lg-4">
			<p><?=$options->text_4;?></p>
		</div>
	</div>
</div>
</div><!--/footerwrap -->




<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo $config->urls->templates?>assets/js/bootstrap.min.js"></script>
</body>
</html>