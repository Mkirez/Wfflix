<!doctype html>
<html lang="en">
<?php $title = "Registreer" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<div class="wrapper">
    <div class="container max-container">
        <div class="row">
            <div class="col-md-12">
                <div class="login_inner">
                    <form action="/register" method="post">
                        <div class="error" style="color: red; font-size: 22px;">
                            <?= isset($_SESSION["register_incorrect"]) ? $_SESSION["register_incorrect"] : ''; ?>
                        </div>
                        <div class="has_icon form-group name-group <?= isset($_SESSION["login_incorrect"]) ? 'error' : ''; ?>">
                            <span class="fa fa-user form-control-register"></span>
                            <input name="gebruikersnaam" type="text" class="form-control form-control-sm"  id="loremipsum" placeholder="Gebruikersnaam" value="<?= isset($_POST["gebruikersnaam"]) ? $_POST["gebruikersnaam"] : ""?>">
                        </div>

                      


                        <div class=" has_icon form-group password-group">
                            <span class="fa fa-shield form-control-register"></span>
                            <input type="text" name="wachtwoord" class="form-control form-control-sm"  id="loremipsum"   placeholder="wachtwoord">
                        </div>

                        <div class="has_icon form-group password-group">
                            <span class="fa fa-shield form-control-register"></span>
                            <input type="text" name="bevestig_wachtwoord" class="form-control form-control-sm"  id="loremipsum"   placeholder="bevestig wachtwoord">
                        </div>

                         <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary register_button" value="Invoeren">
                            </div>
                       </div>

                        <div class="row">
                            <div class="col-md-12 text-center text-block">
                                 <p style="font-size: 13px;">already have a account? &nbsp;<a href='/login'>login</a>.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "includes/footer.view.php" ?>
</body>
</html>