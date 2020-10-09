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
<div class="container">
    <div class="col-md-12">
        <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class="form-control" placeholder="Search" id="myinput" type="text"  placeholder="Search..." >
        </div>

    </div>
</div>

<div class="wrapper">
    <div class="container-fluid">
                
        <div class="row" id="card">

            <?php foreach($videos as $video) { ?>              
               <div class="col-sm-12 col-xs-12 col-md-4 portfolio-thumbnail ">
                <div class="inner2" id="card">
                  <a href="">
                        <img src="<?= $video->getImage(); ?>">
                    </a>
                    <h2 class="text-white"><b><?= $video->getVideoname(); ?></b></h2> 
                    <p class="text-white"><?= $video->getId(); ?></p>        
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>








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