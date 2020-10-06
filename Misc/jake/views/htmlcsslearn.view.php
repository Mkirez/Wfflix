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
                    <h1>03 full course></h1>
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
                <iframe width="560" height="315" src="https://www.youtube.com/embed/mU6anWqZJcc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left ">
                        <div class="col controls-right">   <!--Next video-->
                            <a href="/css_learn" id="next_link">&lt;- vorige bekijken</a>                        
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="col controls-right">   <!--Next video-->
                            <a href="/phpintro" id="next_link">op naar PHP! -&gt;</a>
                        </div>
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
                    <h1>Quick rundown of the course</h1>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</li>
                        <li>Labore et dolore magna aliquyam erat, sed diam voluptua.</li>
                        <li>Et ea rebum. Stet clita kasd gubergren</li>
                        <li>Ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</li>
                        <li>Sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</li>
                        <li>Gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum sed diam nonumy eirmod tempor invidunt ut labore et</li>
                        <li>Dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea</li>
                        <li>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
                        <li>Forem ipsum dolor sit ametinvidunt ut labore</li>
                    </ul>
                </div>
            </div>
        </div> 
    </div>
</div>

<?php include "includes/footer.view.php" ?>

</body>
</html>