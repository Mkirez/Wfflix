<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADSD</title>
</head>
<body>
<h1>Welkom <?= $_SESSION['loggedIn']&['userId']?>bij de ADSD!</h1>
<?php
if ($_SESSION['loggedIn']) :
    echo "Welkom" . $_SESSION['userId'];
endif;
?>
</body>
</html>