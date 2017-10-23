<?php

include('./_head.php'); // include header markup ?>

<section id="works"></section>
	<div class="container">
		<h1 class="heading"><?php echo $page->text_4; ?></h1>
		
		<!-- <div class="row centered mt mb"> -->
		<div class="flex-content row centered mt mb">
		
			<?php 
				$port = $pages->get("/portfolio/")->children->find("limit=6"); 
				foreach ($port as $key)
				{
					//echo $key->title;
					if($key->images != '')
					{
						$opt_img = array(
							'quality' => 1,
							'upscaling' => false,
							'cropping' => 'southeast'
						);
						///$img = $key->image->size($x, $y, $opt_img);
						////$img = $key->image->first()->size($x, $y, $opt_img);
						/////$img = $key->images->first()->size('100', 'auto', $opt_img);
						$img = $key->images->first()->size('360', 'auto', $opt_img);

						echo "
						<div class='col-lg-4 col-md-4 col-sm-4 gallery'>
						<a href='{$key->url}'>
							<h4>$key->title</h4>
						</a>
						<a href='{$key->url}'>
							<img src='{$img->url}' class='img-responsive' width='$img->width' alt='$img->description' />
						</a>
						</div>";
					}

					







				}
			?>
		</div><!--/row -->
	</div><!--/container -->

<?php include('./_foot.php'); // include footer markup ?>


