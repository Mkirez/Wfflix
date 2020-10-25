<?php
class AdminAuthController
{
    public function index()
    {
        require 'views/admin/auth/login.view.php';
    }

    public function login(){
        // POST LOGIN
        $user =  new UserModel();
        if(!$user->checkExistingUsername($_POST['username'])) {
            $user->findByEmail($_POST['username']);
            if (password_verify($_POST['password'], $user->getPassword())) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['ADMIN_USER'] = true;
                $_SESSION['userId'] = $user->getId();
                header("location:/admin/dashboard");
            } else {
                $_SESSION['login_incorrect'] = "Password or username not correct";
                header('location:/admin/login');
                require 'views/admin/auth/login.view.php';
            }
        } else {
            $_SESSION['login_incorrect'] = "Password or username not correct";
            header('location:/admin/login');
            require 'views/admin/auth/login.view.php';
        }
    }

    public function logout()
    {
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            unset($_SESSION['loggedIn']);
            unset($_SESSION['ADMIN_USER']);
            header("location:/admin/login");
        }
        exit;
    }
}