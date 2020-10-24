<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Products" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Toevoegen Video</h1>
    </div>
</section>
<section class="container">
    <div id="weergaveUsers" class="form-group">
        <div class="wrapper">
            <form action="/adminvideo" method="post" class="card-body border">
                <div class="form-group">
                    <label>Videonaam</label>
                    <br>
                    <input type="text" name="naam_video" class="form-control form-control-sm"
                           value="<?= isset($_POST["naam_video"]) ? $_POST["naam_video"] : "" ?>">
                </div>
                <div class="form-group">
                    <label>Video beschrijving</label>
                    <br>
                    <input type="text" name="videobeschrijving" class="form-control form-control-sm"
                </div>
                <div class="form-group">
                    <label>Video afbeelding</label>
                    <br>
                    <input name="image" type="file" class="inputFile" />
                </div>
                <div class="form-group">
                    <label>Video</label>
                    <br>
                    <input type="file" name="video" class="inputFile">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-outline-danger" value="Reset">
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
<!-- <?php } else {
    header('location:/dashboard');
} ?> -->