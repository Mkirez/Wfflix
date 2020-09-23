<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$gebruikersnaam = $wachtwoord = "";
$gebruikersnaam_err = $wachtwoord_err = "";

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: home.view.php");
    exit;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["gebruikersnaam"]))){
        $gebruikersnaam_err = "Voer uw gebruikersnaam in.";
    } else{
        $gebruikersnaam = trim($_POST["gebruikersnaam"]);
    }

    if(empty(trim($_POST["wachtwoord"]))){
        $wachtwoord_err = "Voer uw wachtwoord in.";
    } else{
        $wachtwoord = trim($_POST["wachtwoord"]);
    }

    if(empty($gebruikersnaam_err) && empty($wachtwoord_err)){

        $sql = "SELECT id, gebruikersnaam, wachtwoord FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam";

        if($stmt = $PDO->prepare($sql)){
            $stmt->bindParam(":gebruikersnaam", $param_gebruikersnaam, PDO::PARAM_STR);

            $param_gebruikersnaam = trim($_POST["gebruikersnaam"]);

            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $gebruikersnaam = $row["gebruikersnaam"];
                        $hashed_wachtwoord = $row["wachtwoord"];
                        if(password_verify($wachtwoord, $hashed_wachtwoord)){

                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["gebruikersnaam"] = $gebruikersnaam;

                            header("location: welcome.php");
                        } else{
                            $wachtwoord_err = "Het wachtwoord is onjuist.";
                        }
                    }
                } else{
                    $gebruikersnaam_err = "Geen gebruiker gevonden met deze naam.";
                }
            } else{
                echo "Oeps! Er ging iets mis, probeer het later nog eens.";
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
    <title>Inloggen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Inloggen</h2>
        <p>Vul uw gegevens in om in te loggen.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($gebruikersnaam_err)) ? 'error' : ''; ?>">
                <label>Gebruikersnaam</label>
                <input type="text" name="username" class="form-control" value="<?php echo $gebruikersnaam; ?>">
                <span class="help-block"><?php echo $gebruikersnaam_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Wachtwoord</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $wachtwoord_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Heeft u geen account? <a href="register.php">Registreer dan nu</a>.</p>
        </form>
    </div>
</body>
</html>