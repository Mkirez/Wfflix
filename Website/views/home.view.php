<!DOCTYPE html>
<html>

<?php
$title = "Home";
include "includes/head.view.php"
?>


<body>
<?php include "includes/nav.view.php" ?>


<?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<div class="wrapper">
    <div class="w3-container w3-center w3-animate-left text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <div class="zebi text-b">
                        <h1 >WELCOME <?php echo $_SESSION['naam']; ?><br> 
                            TO CODE WITH WFFLIX
                        </h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <div class="gezeik text-b">
                        <p>
                            Develop more than skills. Give your team the<br>
                            knowledge, experience, and confidence <br>
                            they need to tackle any problem.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


 <?php }else { ?>
<div class="wrapper">
    <div class="w3-container w3-center w3-animate-left text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <div class="zebi text-b">
                        <h1 >JOIN THE MILLIONS LEARNING<br>
                            TO CODE WITH WFFLIX
                        </h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <div class="gezeik text-b">
                        <p>
                            Develop more than skills. Give your team the<br>
                            knowledge, experience, and confidence <br>
                            they need to tackle any problem.
                        </p>
                    
                    </div>
                    <a href="#wrapper2">
                        <i aria-hidden="true" class="fa fa-arrow-down scroll"></i>
                    </a>
                </div>          
            </div>
        </div>
    </div>
</div>
<div class="space">
</div>




<div class="card bg-dark text-white">
  <img class="card-img" src="../asset/img/apple_imac_free_mockup.png" alt="Card image">

      <div class="card-img-overlay" id="wrapper2">
        <div class="inner-wrapper">
            <div class="row">
                <div class="col-md-12 text-center" >
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="card-title">It’s time to start
                                investing in yourself
                            </h2>   
                        </div>
                
                        <div class="col-md-12" >
                            <span>Because learning to code might be<br> the easiest way to change your career.
                            </span>
                        </div>
                        <div class="col-md-12">

                         <a href="/register" type="button" class="btn btn-outline-success btn-lg" id="space-button1">register!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
</div>


<?php } ?>


<?php include "includes/footer.view.php" ?>

</body>
</html>