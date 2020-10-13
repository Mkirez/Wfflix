<?php
class AuthController
{
    public function login()
    {
        require "views/login.view.php";
    }

    public function checkLogin()
    {
        $user = new UserModel();
        $user->findByEmail($_POST['email']);
        if ($_POST['password'] == $user->getPassword()) :
            $_SESSION['loggedIn'] = true;
            $_SESSION['UserId'] = $user->getId();
            endif;
            header('location: /');
    }
}