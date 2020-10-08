<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welkom " . $_SESSION['username'] . "!";
} else {
    echo "<HTML><a href='/login'>Log in om deze pagina te zien.</a></HTML>";
}

class HtmlcsslearnController
{
    public function index()
    {
        require 'views/htmlcsslearn.view.php';
    }
}