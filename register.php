<?php
require_once "config.php";

$gebruikersnaam = $wachtwoord = $bevestig_wachtwoord = "";
$gebruikersnaam_err = $wachtwoord_err = $bevestig_wachtwoord_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["gebruikersnaam"]))){
        $gebruikersnaam_err = "Voer een gebruikersnaam in.";
    } else{
        $sql = "SELECT id FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam";

        if($stmt = $PDO->prepare($sql)){
            $stmt->bindParam(":gebruikersnaam", $param_gebruikersnaam, PDO::PARAM_STR);

            $param_gebruikersnaam = trim($_POST["gebruikersnaam"]);

            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $gebruikersnaam_err = "Dit gebruikersnaam bestaat al.";
                } else{
                    $gebruikersnaam = trim($_POST["gebruikersnaam"]);
                }
            } else{
                echo "Oeps! Er ging iets mis.";
            }

            unset($stmt);
        }
    }

    if(empty(trim($_POST["wachtwoord"]))){
        $wachtwoord_err = "Voer uw wachtwoord in.";
    } elseif(strlen(trim($_POST["wachtwoord"])) < 6){
        $wachtwoord_err = "Wachtwoord moet ten minste 6 tekens bevatten.";
    } else{
        $wachtwoord = trim($_POST["wachtwoord"]);
    }
    if(empty(trim($_POST["bevestig_wachtwoord"]))){
        $bevestig_wachtwoord_err = "Bevestig a.u.b. uw wachtwoord.";
    } else{
        $bevestig_wachtwoord = trim($_POST["bevestig_wachtwoord"]);
        if(empty($wachtwoord_err) && ($wachtwoord != $bevestig_wachtwoord)){
            $bevestig_wachtwoord_err = "Wachtwoord komt niet overeen.";
        }
    }

    if(empty($gebruikersnaam_err) && empty($wachtwoord_err) && empty($bevestig_wachtwoord_err)){

        $sql = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES (:gebruikersnaam, :wachtwoord)";

        if($stmt = $PDO->prepare($sql)){
            $stmt->bindParam(":gebruikersnaam", $param_gebruikersnaam, PDO::PARAM_STR);
            $stmt->bindParam(":wachtwoord", $param_wachtwoord, PDO::PARAM_STR);

            $param_gebruikersnaam = $gebruikersnaam;
            $param_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

            if($stmt->execute()){
                header("location: login.php");
            } else{
                echo "Er ging iets mis. Probeer het later nog eens";
            }
            unset($stmt);
        }
    }
    unset($PDO);
}
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
        <p>Heeft u al een account? <a href="login.php">Log dan hier in</a>.</p>
    </form>
</div>
</body>
</html>