<!DOCTYPE html>
<html>

<?php
$title = "Register";
include "includes/head.view.php"
?>

<body>
<?php include "includes/nav.view.php" ?>
<div class="wrapper">
    <div class="container" style="color: #FFCB05;">
        <h2>Registreren</h2>
        <p>Vul a.u.b. dit formulier in om u te registreren.</p>
        <div class="error" style="color: red; font-size: 22px;">
            <?= isset($_SESSION["register_incorrect"]) ? $_SESSION["register_incorrect"] : ''; ?>
        </div>
        <form action="/register" method="post">
            <div class="form-group">
                <label>Gebruikersnaam</label>
                <input type="text" name="gebruikersnaam" class="form-row" value="<?= isset($_POST["gebruikersnaam"]) ? $_POST["gebruikersnaam"] : ""?>">
            </div>
            <div class="form-group">
                <label>Wachtwoord</label>
                <input type="password" name="wachtwoord" class="form-row">
            </div>
            <div class="form-group ">
                <label>Bevestig wachtwoord</label>
                <input type="password" name="bevestig_wachtwoord" class="form-row">
            </div>
            <div class="form-group">
                <input type="submit" style="color: white" class="btn btn-primary" value="Invoeren">
                <input type="reset" style="color: lightgreen" class="btn btn-default" value="Reset">
            </div>
            <p>Heeft u al een account? <a href="/login" style="color:lightgreen">Log dan hier in</a>.</p>
        </form>
    </div>
</div>

<?php include "includes/footer.view.php" ?>

</body>
</html>