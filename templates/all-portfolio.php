<?php

include('./_head.php'); // include header markup ?>

<section id="works"></section>
	<div class="container">
		<h1 class="heading"><?php echo $page->text_4; ?></h1>

		<!--- <div class="row centered mt mb"> -->
		<div class="flex-content row centered mt mb">
        
			<?php 
				///$port = $pages->get("/portfolio/")->children->find("limit=6"); 
                ///$port = $pages->find("template=single-portfolio");
                $port = $pages->find("template=single-portfolio, limit=2, sort=-created");

                foreach ($port as $key)
				{
					//echo $key->title;
					if($key->images != '')
					{
						echo "
						<div class='col-lg-4 col-md-4 col-sm-4 gallery'>
						<a href='{$key->url}'>
							<h4>$key->title</h4>
						</a>
						<a href='{$key->url}'>
							<img src='{$key->images->first()->url}' class='img-responsive'>
						</a>
						</div>";
					}
				}
            ?>
            







        </div><!--/row -->

        <br/>
        <?php
        echo $port->renderPager(array(
            'nextItemLabel' => "Next",
            'previousItemLabel' => "Prev",
            'listMarkup' => "<ul class='MarkupPagerNav'>{out}</ul>",
            'itemMarkup' => "<li class='{class}'>{out}</li>",
            'linkMarkup' => "<a href='{url}'><span>{out}</span></a>"
        )); 
        ?>
        <br />

    </div><!--/container -->
    




<?php include('./_foot.php'); // include footer markup ?>


