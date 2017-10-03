<?php

include('./_head.php'); // include header markup ?>

<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<h1>My Portfolio</h1>
			<?php 
				$port = $pages->get("/portfolio/")->children->find("limit=6"); 
				foreach ($port as $key)
				{
					//echo $key->title;
					if($key->images != '')
					{
						echo "
					<div class='col-lg-4 col-md-4 col-sm-4 gallery'>
					<a href='{$key->url}'>
					<img src='{$key->images->first()->url}' class='img-responsive'>
					</a>
					</div>";
					}
				}
			?>
		</div><!--/row -->
	</div><!--/container -->

<?php include('./_foot.php'); // include footer markup ?>


