<?php
$gebruikersnaam = $wachtwoord = $bevestig_wachtwoord = "";
$gebruikersnaam_err = $wachtwoord_err = $bevestig_wachtwoord_err = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registreren</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Registreren</h2>
    <p>Vul a.u.b. dit formulier in om u te registreren.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group <?php echo (!empty($gebruikersnaam_err)) ? 'has-error' : ''; ?>">
            <label>Gebruikersnaam</label>
            <input type="text" name="gebruikersnaam" class="form-control" value="<?php echo $gebruikersnaam; ?>">
            <span class="help-block"><?php echo $gebruikersnaam_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($wachtwoord_err)) ? 'has-error' : ''; ?>">
            <label>Wachtwoord</label>
            <input type="password" name="wachtwoord" class="form-control" value="<?php echo $wachtwoord; ?>">
            <span class="help-block"><?php echo $wachtwoord_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($bevestig_wachtwoord_err)) ? 'has-error' : ''; ?>">
            <label>Bevestig wachtwoord</label>
            <input type="password" name="bevestig_wachtwoord" class="form-control" value="<?php echo $bevestig_wachtwoord; ?>">
            <span class="help-block"><?php echo $bevestig_wachtwoord_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Invoeren">
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
        <p>Heeft u al een account? <a href="login.view.php">Log dan hier in</a>.</p>
    </form>
</div>
</body>
</html>