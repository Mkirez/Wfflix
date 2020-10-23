<!doctype html>
<html lang="en">
<?php $title = "Edit Video" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <?php foreach ($video as $videoInfo) {
            } ?>
            <h2>Edit Contact #<?= $videoInfo->getId(); ?></h2>
            <form action="/admineditvideo" method="post">
                <div class="hide">
                    <input class="hidden" type="hidden" name="id"
                           id="id" value="<?= isset($_POST["id"]) ? $_POST["id"] : $videoInfo->getId(); ?>">
                </div>
                <div class="form-group">
                    <label for="naam_video">Naam video:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="naam_video"
                           value="<?= isset($_POST["naam_video"]) ? $_POST["naam_video"] : $videoInfo->getVideoName() ?>"
                           id="naam_video">
                </div>
                <div class="form-group">
                    <label for="videobeschrijving">videobeschrijving:</label>
                    <br>
                    <input class="form-control-sm" type="text" name="videobeschrijving"
                           id="videobeschrijving">
                </div>
                <div class="form-group">
                    <label for="image">Video afbeelding:</label>
                    <br>
                    <input class="form-control-sm" type="image" name="image"
                           id="image">
                </div>
                <div class="form-group">
                    <label for="video">video:</label>
                    <br>
                    <input class="form-control-sm" type="file" name="video"
                           id="video">
                </div>
                <div>
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>