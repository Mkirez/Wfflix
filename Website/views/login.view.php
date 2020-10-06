<!DOCTYPE html>
<html>

<?php
$title = "Login";
include "includes/head.view.php"
?>

<body>
<?php include "includes/nav.view.php" ?>
<div class="wrapper">
    <div class="container">
        <h2>Inloggen</h2>
        <p>Vul uw gegevens in om in te loggen.</p>
        <form action="/login" method="post">
            <div class="error" style="color: red; font-size: 22px;">
                <?= isset($_SESSION["login_incorrect"]) ? $_SESSION["login_incorrect"] : ''; ?>
            </div>
            <div class="form-group <?= isset($_SESSION["login_incorrect"]) ? 'error' : ''; ?>">
                <label>Gebruikersnaam</label>
                <input type="text" name="username" class="form-row" value="<?= isset($_POST["username"]) ? $_POST["username"] : ""?>">
            </div>
            <div class="form-group">
                <label>Wachtwoord</label>
                <input type="password" name="password" class="form-row">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Heeft u geen account? <a href='/register'>Registreer dan nu</a>.</p>
        </form>
    </div>
</div>

<?php include "includes/footer.view.php" ?>

</body>
</html>