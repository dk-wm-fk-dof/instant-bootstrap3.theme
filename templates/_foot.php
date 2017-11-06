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






<?php 
	    // JS SCRIPTS AND STYLE CSS WILL ONLY LOADED ON THE CONTACT PAGE
	    if ($page->template->name == 'contact'): ?>

			<?php
			//already exist in _head.php
        	///<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			?>

			<link href="<?php echo $config->urls->templates?>form-style.css" rel="stylesheet">

			<?php
			//already exist in upper line
        	///<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			?>

			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

           <script type="text/javascript">
           //VALIDATION
           $(function () {
                 $.validate({
                   lang: 'en'
                 });
           })

           // input
            $(".input-contact input, .textarea-contact textarea").focus(function () {
                $(this).next("span").addClass("active");
            });
            $(".input-contact input, .textarea-contact textarea").blur(function () {
                if ($(this).val() === "") {
                    $(this).next("span").removeClass("active");
                }
           });
           </script>

  <?php endif; ?>







</body>
</html>