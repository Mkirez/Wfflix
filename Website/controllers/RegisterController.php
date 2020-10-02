<?php
class RegisterController
{
    public function index()
    {
        require 'views/register.view.php';
    }
}

// St34ck5#Nice

define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '100%Renzo'); 
define('DB_NAME', 'wfflix');

try{
    $PDO = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: geen verbinding. " . $e->getMessage());
}

$gebruikersnaam = $wachtwoord = $bevestig_wachtwoord = "";
$gebruikersnaam_err = $wachtwoord_err = $bevestig_wachtwoord_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["gebruikersnaam"]))) {
        $gebruikersnaam_err = "Voer een gebruikersnaam in.";
    } else {
        $sql = "SELECT id FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam";

        if ($stmt = $PDO->prepare($sql)) {
            $stmt->bindParam(":gebruikersnaam", $param_gebruikersnaam, PDO::PARAM_STR);

            $param_gebruikersnaam = trim($_POST["gebruikersnaam"]);

            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $gebruikersnaam_err = "Dit gebruikersnaam bestaat al.";
                } else {
                    $gebruikersnaam = trim($_POST["gebruikersnaam"]);
                }
            } else {
                echo "Oeps! Er ging iets mis.";
            }

            unset($stmt);
        }
    }

    if (empty(trim($_POST["wachtwoord"]))) {
        $wachtwoord_err = "Voer uw wachtwoord in.";
    } elseif (strlen(trim($_POST["wachtwoord"])) < 6) {
        $wachtwoord_err = "Wachtwoord moet ten minste 6 tekens bevatten.";
    } else {
        $wachtwoord = trim($_POST["wachtwoord"]);
    }
    if (empty(trim($_POST["bevestig_wachtwoord"]))) {
        $bevestig_wachtwoord_err = "Bevestig a.u.b. uw wachtwoord.";
    } else {
        $bevestig_wachtwoord = trim($_POST["bevestig_wachtwoord"]);
        if (empty($wachtwoord_err) && ($wachtwoord != $bevestig_wachtwoord)) {
            $bevestig_wachtwoord_err = "Wachtwoord komt niet overeen.";
        }
    }

    if (empty($gebruikersnaam_err) && empty($wachtwoord_err) && empty($bevestig_wachtwoord_err)) {

        $sql = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES (:gebruikersnaam, :wachtwoord)";

        if ($stmt = $PDO->prepare($sql)) {
            $stmt->bindParam(":gebruikersnaam", $param_gebruikersnaam, PDO::PARAM_STR);
            $stmt->bindParam(":wachtwoord", $param_wachtwoord, PDO::PARAM_STR);

            $param_gebruikersnaam = $gebruikersnaam;
            $param_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

            if ($stmt->execute()) {
                header("location: login.view.php");
            } else {
                echo "Er ging iets mis. Probeer het later nog eens";
            }
            unset($stmt);
        }
    }
    unset($PDO);
}