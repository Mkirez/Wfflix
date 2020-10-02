<?php
class LoginController
{
    public function index()
    {
        require 'views/login.view.php';
    }
}

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}

$gebruikersnaam = $wachtwoord = "";
$gebruikersnaam_err = $wachtwoord_err = "";

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: home.view.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["username"]))) {
        $gebruikersnaam_err = "Voer uw gebruikersnaam in.";
    } else {
        $gebruikersnaam = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $wachtwoord_err = "Voer uw wachtwoord in.";
    } else {
        $wachtwoord = trim($_POST["password"]);
    }

    if (empty($gebruikersnaam_err) && empty($wachtwoord_err)) {


        $sql = "SELECT id, gebruikersnaam, wachtwoord FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam";

        if ($stmt = $PDO->prepare($sql)) {

            $stmt->bindParam(":gebruikersnaam", $gebruikersnaam, PDO::PARAM_STR);

            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $gebruikersnaam = $row["gebruikersnaam"];
                        $hashed_wachtwoord = $row["wachtwoord"];
                        if (password_verify($wachtwoord, $hashed_wachtwoord)) {

                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["gebruikersnaam"] = $gebruikersnaam;
                            header("location: welcome.php");
                        } else {
                            $wachtwoord_err = "Het wachtwoord is onjuist.";
                        }
                    }
                } else {
                    $gebruikersnaam_err = "Geen gebruiker gevonden met deze naam.";
                }
            } else {
                echo "Oeps! Er ging iets mis, probeer het later nog eens.";
            }

            unset($stmt);
        }
    }

    unset($PDO);
}