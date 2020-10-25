<?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Dashboard" ?>
<?php include  __DIR__ . "/includes/head.view.php" ?>
<body>
<?php include  __DIR__ . "/includes/nav.view.php" ?>

    <section id="page-title">
        <div class="container clearfix">
            <h1 class="float-left">Dashboard</h1>
        </div>
    </section>

<?php include  __DIR__ . "/../includes/footer.view.php" ?>

</body>
</html>
<?php }else{header('location:/login');} ?>
