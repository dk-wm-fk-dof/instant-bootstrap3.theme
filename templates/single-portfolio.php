<?php include('./_head.php'); ?>

<section id="works"></section>
<div class="container">
    <div class="row centered mt mb">
        <div class="col-lg-8 col-lg-offset-2">
            <!--
            <h4>ABOUT THE PROJECT</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            -->
            <?php echo $page->body; ?>
        </div>
        <div class="col-lg-10 col-lg-offset-1 mt">

        <?php
        $img_port = $page->images;
        foreach($img_port as $key):
        ?>
            <?php //<img class="img-responsive" src="assets/img/pr01.jpg"> ?>
            <img class="img-responsive" src="<?=$key->url?>" >
            <br>

        <?php endforeach; ?>

        </div>
    </div><! --/row -->
</div><! --/container -->
    
<?php include('./_foot.php'); ?>