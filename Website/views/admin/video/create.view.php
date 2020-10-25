<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Video" ?>
<?php include  __DIR__ . "/../includes/head.view.php" ?>
<body>
<?php include  __DIR__ . "/../includes/nav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Toevoegen Video</h1>
    </div>
</section>
<section class="container">
    <div id="weergaveUsers" class="form-group">
        <div class="wrapper">
            <form action="/admin/video/add" method="post" class="card-body border">
                <div class="form-group">
                    <label>Videonaam</label>
                    <br>
                    <input type="text" name="naam" class="form-control form-control-sm" value="<?= isset($_POST["naam_video"]) ? $_POST["naam_video"] : "" ?>">
                </div>
                <div class="form-group">
                    <label>Video beschrijving</label>
                    <br>
                    <textarea id="summernote" name="beschrijving"></textarea>
                </div>
                <div class="form-group">
                    <label>Afbeelding</label>
                    <br>
                    <input type="text" name="image" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label>Video</label>
                    <br>
                    <input type="text" name="video" class="form-control form-control-sm">
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