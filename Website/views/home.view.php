
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
                <div class="col-md-12 text-center">
                    <div class="zebi text-b">
                        <h1 >WELCOME <?php echo $_SESSION['userId']; ?><br> 
                            TO CODE WITH WFFLIX.
                        </h1>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="gezeik text-b">
                        <p>
                            Develop more than skills.Give your team the<br>
                            knowledge, experience, and confidence <br>
                            they need to tackle any problem.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">

</div>

 <?php }else{ ?>
<div class="wrapper">
    <div class="w3-container w3-center w3-animate-left text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="zebi text-b">
                        <h1 >JOIN THE MILLIONS LEARNING<br>
                            TO CODE WITH WFFLIX.
                        </h1>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="gezeik text-b">
                        <p>
                            Develop more than skills.Give your team the<br>
                            knowledge, experience, and confidence <br>
                            they need to tackle any problem.
                        </p>
                        <a href="/register" type="button" class="btn btn-success btn-lg">register</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="space">
 
</div>

<?php } ?>


<?php include "includes/footer.view.php" ?>

</body>
</html>