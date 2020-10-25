<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Edit User" ?>
<?php include  __DIR__ . "/../includes/head.view.php" ?>
<body>
<?php include  __DIR__ . "/../includes/nav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Wijzigen gebruiker</h1>
    </div>
</section>
<section class="container">
    <div id="weergaveUsers" class="form-group">
        <div class="wrapper">
            <form action="/admin/users/edit" method="POST" class="card-body border">
                <h2>Edit User #<?= $user->getId(); ?></h2>
                <div class="hide">
                    <input class="hidden" type="hidden" name="id"
                           id="id" value="<?= $user->getId(); ?>">
                </div>
                <div class="form-group">
                    <label>Gebruikersnaam</label>
                    <br>
                    <input type="text" name="gebruikersnaam" class="form-control form-control-sm" value="<?= $user->getUserName(); ?>">
                </div>
                <div class="form-group">
                    <label>Wachtwoord</label>
                    <br>
                    <input type="text" name="wachtwoord" class="form-control form-control-sm">
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
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

</body>
</html>
<!-- <?php } else {
    header('location:/dashboard');
} ?> -->