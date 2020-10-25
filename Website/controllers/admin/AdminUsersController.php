<?php


class AdminUsersController
{
    public function index()
    {
        $model = new UserModel();
        $users = $model->all();
        require 'views/admin/users/index.view.php';
    }

    public function create(){
        require 'views/admin/users/create.view.php';
    }

    public function edit()
    {
        if (isset($_GET["id"])) {
            //Get product info
            $user_id = $_GET["id"];
            $user = new UserModel();
            $user = $user->fetchById($user_id);
            if ($user != null) {
                require 'views/admin/users/edit.view.php';
                return "";
            }
        }
        require 'views/admin/errors/404.view.php';
        return ""; // If Video not found, Return 404
    }


    public function delete()
    {
        $model = new UserModel();
        $id=$_GET["id"];
        $delete = $model->delete($id);
        echo $delete;
    }

    public function AddUser()
    {
        if (!empty($_POST["gebruikersnaam"]) && !empty($_POST["wachtwoord"])) {
            $user = new UserModel();
            $user->setUserName(trim($_POST["gebruikersnaam"]));
            $user->setPassword(trim($_POST["wachtwoord"]));
            if ($user->checkExistingUsername($user->getUserName()) != null) {
                if ($user->store($user)) {
                    header('location: /admin/users');
                    die();
                } else {
                    echo "Er is helaas iets misgegaan";
                }
            } else {
                echo "Deze gebruikersnaam bestaat al";
            }
        } else {
            echo "Niet alle waardes zijn ingevuld";
        }
    }

    public function editUser()
    {
        if (!empty($_POST["gebruikersnaam"]) and !empty($_POST["wachtwoord"])) {
            $user = new UserModel();
            $user->setId((int)trim($_POST["id"]));
            $user->setUserName(trim($_POST["gebruikersnaam"]));
            $user->setPassword(trim($_POST["wachtwoord"]));
            if ($user->updateUser($user)) {
                header('location: /admin/users');
                die();
            } else {
                echo "Er is helaas iets misgegaan";
            }
        } else {
            echo "Er ontbreken waardes!";
        }
    }
}