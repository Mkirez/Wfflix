<!DOCTYPE html>
<html>

<?php
$title = "Home";
include "includes/head.view.php"
?>

<body>
<?php include "includes/nav.view.php" ?>


<div class="wrapper">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-left text-white">
                    <h1><?= $video->getVideoname(); ?></h1>
                </div>
            </div>
    </div>
    <div class="space">
    </div>

    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="embed-responsive embed-responsive-16by9">
                   <iframe width="560" height="315" src="<?= $video->getVideo(); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                </div>
                <div class="row">
                    <div class="col-md-6 text-left ">
                        <?php if(isset($previous)){ ?>
                        <div class="col controls-right">   <!--Next video-->
                            <a href="<?= $previous ?>" id="next_link">&lt;- vorige video</a>                        
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-6 text-right">
                        <?php if(isset($next)){ ?>
                        <div class="col controls-right">   <!--Next video-->
                            <a href="<?= $next ?>" id="next_link">volgende video -&gt;</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space">
    </div>

    <div class="container-fluid">
        <div class="under-wrapper">
            <div class="row">
                <div class="col-md-12 text-white">
                    <?= $video->getBeschrijving(); ?>
                </div>
            </div>
        </div> 
    </div>
</div>

<?php include "includes/footer.view.php" ?>

</body>
</html>