<!DOCTYPE html>
<html>

<?php
$title = "Home";
include "includes/head.view.php";

?>


<body>
<?php include "includes/nav.view.php" ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="inner" id="inner-form">
                    <form action="/contact" method="POST">
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text text-center">
                                <h2>WE LIKE TO HEAR FROM YOU!</h2>
                            </div>
                        </div>
                        <div class="form-group name-group has_icon">
                            <span class="fa fa-user form-control-register"></span>
                            <input name="name" type="text" class="form-control form-control-sm"  id="loremipsum" placeholder="name">
                        </div>
                        <div class="form-group email-group has_icon">
                            <span class="fa fa-envelope form-control-register"></span>
                            <input type="text" name="subject" class="form-control form-control-sm"  id="loremipsum" 	placeholder="subject">
                        </div>
                        <div class="form-group achternaam-group has_icon">
                            <span class="fa fa-phone form-control-register"></span>
                            <input type="text" class="form-control form-control-sm" id="loremipsum" name="e-mail" placeholder="e-mail">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="loremipsum" rows="3" placeholder="message"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success" placeholder="lorem ipsum">Submit</button>
                        <!-- <?php if (isset($_POST['submit'])) { ?>
                            <h3>Thanks we'll be in touch</h3>
                         <?php } ?> -->
                    </form>
                </div>
            </div>
            <div class="col-md-6 img">
                <div class="inner">

                    <img src="/asset/img/image.jpeg">
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>