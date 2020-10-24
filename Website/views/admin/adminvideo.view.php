<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Products" ?>
<?php include "includes/dashboardhead.view.php" ?>
<body>
<?php include "includes/dashboardnav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Videos</h1>
        <a class="button button-3d float-right" href="/adminvideo/create">Add Video</a>
    </div>
</section>
<div id="weergaveVideos" class="form-group">
    <table id="VideoTable" border="1" class="table-sm table-striped table-bordered" style="width:100%; height:60px;">
        <tr>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Video ID:
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Video beschrijving:
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Video afbeelding:
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Video:
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Edit
            </th>
            <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                Delete
            </th>
        </tr>
    </table>
    <table id="VideoContent" border=1 class="table-sm" style="width:100%">
        <?php foreach ($video as $videoInfo){ ?>
        <tr id="video_<?= $videoInfo->getId(); ?>">
            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                <?= $videoInfo->getId(); ?>
            </td>
            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                <?= $videoInfo->getVideoName(); ?>
            </td>
            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                <?= $videoInfo->getImage(); ?>
            </td>
            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                <?= $videoInfo->getVideo(); ?>
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
    <script src="asset/js/jquery.min.js"></script>
    <script>
        $("#VideoContent").on("click", ".delete_video", function () {
            var video_id = $(this).data("video_id");
            var video_name = $(this).data("video_name");
            var confirmation = confirm('Weet u zeker dat u product: ' + video_name + ' wilt verwijderen?');

            if (confirmation == true) {
                $.ajax({
                    url: '/adminvideo?id=' + video_id,
                    type: 'DELETE',
                    success: function (result) {
                        // Do something with the result
                        if (result === "1") {
                            $("#VideoContent").find("#video_" + video_id).remove();
                        }
                    }
                });
            }
        });
        $("#VideoContent").on("click", ".edit_video", function () {
            var video_id = $(this).data("video_id");
            var video_name = $(this).data("video_name");
            var confirmation = confirm('Weet u zeker dat u product: ' + video_name + ' wilt modificeren?');

            if (confirmation == true) {
                window.location.href = '/admineditvideo?id=' + video_id
            }
        });
    </script>
</body>
</html>
<!-- <?php } else {header('location:/dashboard');} ?> -->