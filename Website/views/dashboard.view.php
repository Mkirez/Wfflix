<?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include "includes/dashhead.view.php" ?>
<body>
    <?php include "includes/dashnav.view.php" ?>
    <h3 style="text-align: left;">Dashboard</h3>
    <?php 
    ?>
</body>
</html>
<!-- <?php }else{header('location:/login');} ?> -->
