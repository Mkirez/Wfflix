<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Video" ?>
<?php include  __DIR__ . "/../includes/head.view.php" ?>
<body>
<?php include  __DIR__ . "/../includes/nav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Wijzigen Video</h1>
    </div>
</section>
<section class="container">
    <div id="weergaveUsers" class="form-group">
        <div class="wrapper">
            <form action="/admin/video/edit" method="POST" class="card-body border">
                <input type="text" name="id" hidden value="<?= $video->getId() ?>">
                <div class="form-group">
                    <label>Videonaam</label>
                    <br>
                    <input type="text" name="naam" class="form-control form-control-sm"
                           value="<?= $video->getVideoname() ?>">
                </div>
                <div class="form-group">
                    <label>Video beschrijving</label>
                    <textarea id="summernote" name="beschrijving"><?= $video->getBeschrijving() ?></textarea>
                </div>
                <div class="form-group">
                    <label>Afbeelding</label>
                    <br>
                    <input type="text" name="image" class="form-control form-control-sm"
                           value="<?= $video->getImage()  ?>">
                </div>
                <div class="form-group">
                    <label>Video</label>
                    <br>
                    <input type="text" name="video" class="form-control form-control-sm"
                           value="<?= $video->getVideo()  ?>">
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
        $('#summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['help', ['help']]
            ],
        });
    });
</script>

</body>
</html>
<!-- <?php } else {
    header('location:/dashboard');
} ?> -->