
<!-- deze folder word gebruiikt als voorbeeld -->




<!-- alex login -->
<section class="body">
    <div class="col-md-6">
        <div class="wrapper">
            <h2>Inloggen</h2>
            <p>Vul uw gegevens in om in te loggen.</p>
            <form action="/login" method="post">
                <div class="error" style="color: #ff0000; font-size: 22px;">
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
                    <input type="submit" name="submit" class="btn btn-primary" value="Login">
                </div>
                <p>Heeft u geen account? <a href='/register'>Registreer dan nu</a>.</p>
            </form>
        </div>
</section>


<!-- registratie alex -->
<section class="body">
    <div class="col-md-6">
    <div class="wrapper">
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
            <input type="submit" class="btn btn-primary" value="Invoeren">
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
        <p>Heeft u al een account? <a href="/login">Log dan hier in</a>.</p>
    </form>
</div>
</section>