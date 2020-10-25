<?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<!doctype html>
<html lang="en">
<?php $title = "Users" ?>
<?php include  __DIR__ . "/../includes/head.view.php" ?>
<body>
<?php include  __DIR__ . "/../includes/nav.view.php" ?>

<section id="page-title">
    <div class="container clearfix">
        <h1 class="float-left">Gebruikers</h1>
        <a class="button button-3d float-right" href="/admin/users/create">Gebruiker toevoegen</a>
    </div>
</section>
<div class="container">
    <div id="weergaveUsers" class="form-group">
        <table id="Usertable" border="1" class="table-sm table-striped table-bordered" style="width:100%; height:60px;">
            <tr>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; width: 40px;">
                    #
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; width: 40px;">
                    Gebruiker
                </th>
                <th style="white-space: nowrap; height: 50px; text-overflow:ellipsis; overflow: hidden;">
                    Video's watched
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Created at
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Edit
                </th>
                <th style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">
                    Delete
                </th>
            </tr>
            <?php foreach ($users as $userInfo) { ?>
                <tr id="user_<?= $userInfo->getId(); ?>">
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden;">
                        <?= $userInfo->getId(); ?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden;">
                        <?= $userInfo->getUsername(); ?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden;">
                        <?= (new WatchModel())->fetchTotalWatchedByUserId($userInfo->getId())?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden;">
                        <?= date("d-m-Y", strtotime($userInfo->getCreatedAt())); ?>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden;">
                        <button data-user_id="<?= $userInfo->getId(); ?>"
                                data-user_name="<?= $userInfo->getUsername(); ?>"
                                class="edit_user">Edit User
                        </button>
                    </td>
                    <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden;">
                        <button data-user_id="<?= $userInfo->getId(); ?>"
                                data-user_name="<?= $userInfo->getUsername(); ?>"
                                class="delete_user">Delete User
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php include  __DIR__ . "/../includes/footer.view.php" ?>
<script>
    $("#Usertable").on("click", ".delete_user", function () {
        var user_id = $(this).data("user_id");
        var user_name = $(this).data("user_name");
        var confirmation = confirm('Weet u zeker dat u gebruiker: ' + user_name + ' wilt verwijderen?');

        if (confirmation == true) {
            $.ajax({
                url: '/admin/users/delete?id=' + user_id,
                type: 'DELETE',
                success: function (result) {
                    // Do something with the result
                    if (result === "1") {
                        $("#Usertable").find("#user_" + user_id).remove();
                    }
                }
            });
        }
    });
    $("#Usertable").on("click", ".edit_user", function () {
        var user_id = $(this).data("user_id");
        var user_name = $(this).data("user_name");
        var confirmation = confirm('Weet u zeker dat u gebruiker: ' + user_name + ' wilt modificeren?');

        if (confirmation == true) {
            window.location.href = '/admin/users/edit?id=' + user_id
        }
    });
</script>

</body>
</html>
<!-- <?php } else {
    header('location:/dashboard');
} ?> -->
