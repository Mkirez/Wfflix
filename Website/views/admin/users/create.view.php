<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Users" ?>
<?php include  __DIR__ . "/../includes/head.view.php" ?>
<body>
<?php include  __DIR__ . "/../includes/nav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Toevoegen Gebruiker</h1>
    </div>
</section>
<section class="container">
    <div id="weergaveVideo" class="form-group">
        <div class="wrapper">
            <form action="/admin/users/add" method="post" class="card-body border">
                <div class="form-group">
                    <label>Username</label>
                    <br>
                    <input type="text" name="gebruikersnaam" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <br>
                    <input type="password" name="wachtwoord" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-outline-danger" value="Reset">
                </div>
            </form>
        </div>
    </div>
</section>
<?php include  __DIR__ . "/../includes/footer.view.php" ?>
</body>
</html>
<!-- <?php } else {
    header('location:/dashboard');
} ?> -->