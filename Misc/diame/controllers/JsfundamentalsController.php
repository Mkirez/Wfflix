<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welkom " . $_SESSION['username'] . "!";
} else {
    echo "<HTML><a href='/login'>Log in om deze pagina te zien.</a></HTML>";
}

class JsfundamentalsController
{
    public function index()
    {
        require 'views/jsfundamentals.views.php';
    }
}