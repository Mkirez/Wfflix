<?php
class AdminLogoutController
{
    public function logout()
    {
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            unset($_SESSION['loggedIn']);
            header("location:/admin");
        }
        exit;
    }
}