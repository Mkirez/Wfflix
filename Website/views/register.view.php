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
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text text-center">
                                <h2>Registreren</h2>
                            </div>
                        </div>
                        <div class="form-group name-group <?= isset($_SESSION["login_incorrect"]) ? 'error' : ''; ?>">
                            <input name="gebruikersnaam" type="text" class="form-control form-control-sm"  id="loremipsum" placeholder="Gebruikersnaam" value="<?= isset($_POST["gebruikersnaam"]) ? $_POST["gebruikersnaam"] : ""?>">
                        </div>

                      


                        <div class="form-group password-group">
                            <input type="text" name="wachtwoord" class="form-control form-control-sm"  id="loremipsum"   placeholder="wachtwoord">
                        </div>
                        <div class="form-group password-group">
                            <input type="text" name="bevestig_wachtwoord" class="form-control form-control-sm"  id="loremipsum"   placeholder="bevestig wachtwoord">
                        </div>
                         <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Invoeren">
                            <input type="reset" class="btn btn-default" value="Reset">
                        </div>
                        <p>Heeft u al een account? <a href="/login">Log dan hier in</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>