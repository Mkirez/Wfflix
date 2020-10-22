<!DOCTYPE html>
<html>

<?php
$title = "Home";
include "includes/head.view.php"
?>

<body>
<?php include "includes/nav.view.php" ?>





<div class="space">
</div>
<?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<div class="container-fluid">
    <div class="col-md-6">
        <div class="form-group has-search" id="searchbalk">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class="form-control" placeholder="Search" id="myinput" type="text"  placeholder="Search..." >
        </div>

    </div>
</div>


    <div class="container-fluid">
                
        <div class="row" id="card">

            <?php foreach($videos as $video) { ?>              
               <div class="col-sm-12 col-xs-12 col-md-4 portfolio-thumbnail ">
                <div class="inner2" id="card">
                  <a href="/video?id=<?= $video->getId(); ?>">
                        <img src="<?= $video->getImage(); ?>">
                    </a>
                    <h2 class="text-white"><b><?= $video->getVideoname(); ?></b></h2> 
                    <p class="text-white">Lorem Ipsum
Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.  </p>        
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>


<?php }else{ ?>
    <div class="space">
    </div>

    <div class="container ">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12 text-center not-loggedin">
                    <h1><a href="/login" >log in&nbsp;</a>om de courses te bekijken</h1>
                </div>
        </div>
    </div>

<?php } ?>





<?php include "includes/footer.view.php" ?>

</body> 
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#myinput").on("keyup",function(){
    var value = $(this).val().toLowerCase();
    $("#card div").filter(function(){
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);

    });
  });
    });
</script>