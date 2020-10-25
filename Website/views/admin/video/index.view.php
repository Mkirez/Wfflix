<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Videos" ?>
<?php include  __DIR__ . "/../includes/head.view.php" ?>
<body>
<?php include  __DIR__ . "/../includes/nav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Videos</h1>
        <a class="button button-3d float-right" href="/admin/video/create">Video Toevoegen</a>
    </div>
</section>
<div class="container">
    <div id="weergaveUsers" class="form-group">
        <table id="VideoTable" border="1" class="table-sm table-striped table-bordered" style="width:100%; height:60px;">
            <tr>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Afbeelding
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Title
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Video
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Total Watches
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Edit
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Delete
                </th>
            </tr>
            <?php foreach ($videos as $videoInfo){ ?>
                <tr id="video_<?= $videoInfo->getId(); ?>">
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <div  style="width: 64px;height: 64px;" >
                            <img src="<?= $videoInfo->getImage(); ?>" style="height: 100%; width: auto;">
                        </div>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <?= $videoInfo->getVideoName(); ?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <?= $videoInfo->getVideo(); ?>
                    </td>
                    <td>
                        <?= (new WatchModel())->fetchTotalWatchedByVideoId($videoInfo->getId())?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <button data-video_id="<?= $videoInfo->getId(); ?>"
                                data-video_name="<?= $videoInfo->getVideoName(); ?>"
                                class="edit_video">Edit Video
                        </button>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                        <button data-video_id="<?= $videoInfo->getId(); ?>"
                                data-video_name="<?= $videoInfo->getVideoName(); ?>"
                                class="delete_video">Delete Video
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

<?php include  __DIR__ . "/../includes/footer.view.php" ?>
<script>
    $("#VideoTable").on("click", ".delete_video", function () {
        var video_id = $(this).data("video_id");
        var video_name = $(this).data("video_name");
        var confirmation = confirm('Weet u zeker dat u product: ' + video_name + ' wilt verwijderen?');

        if (confirmation == true) {
            $.ajax({
                url: '/admin/video/delete?id=' + video_id,
                type: 'DELETE',
                success: function (result) {
                    // Do something with the result
                    if (result === "1") {
                        $("#VideoTable").find("#video_" + video_id).remove();
                    }
                }
            });
        }
    });
    $("#VideoTable").on("click", ".edit_video", function () {
        var video_id = $(this).data("video_id");
        var video_name = $(this).data("video_name");
        var confirmation = confirm('Weet u zeker dat u product: ' + video_name + ' wilt modificeren?');

        if (confirmation == true) {
            window.location.href = '/admin/video/edit?id=' + video_id
        }
    });
</script>

</body>
</html>
<!-- <?php } else {
    header('location:/dashboard');
} ?> -->