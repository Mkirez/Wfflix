<?php


class AdminVideoController
{
    public function index()
    {
        $model = new videoModel();
        $videos = $model->all();
        require 'views/admin/video/index.view.php';
    }

    public function create(){
        require 'views/admin/video/create.view.php';
    }

    public function edit()
    {
        if (isset($_GET["id"])) {
            //Get product info
            $video_id = $_GET["id"];
            $video = new VideoModel();
            $video = $video->fetchById($video_id);
            if ($video != null) {
                require 'views/admin/video/edit.view.php';
                return "";
            }
        }
        require 'views/admin/errors/404.view.php';
        return ""; // If Video not found, Return 404
    }

    public function delete()
    {
        $model = new videoModel();
        $id=$_GET["id"];
        $delete = $model->delete($id);
        echo $delete;
    }

    public function AddVideo()
    {
        if (!empty($_POST["naam"]) && !empty($_POST["beschrijving"]) && !empty($_POST["video"]) && !empty($_POST["image"])) {
            $video = new videoModel();
            $video->setVideoName(trim($_POST["naam"]));
            $video->setBeschrijving(trim($_POST["beschrijving"]));
            $video->setVideo(trim($_POST["video"]));
            $video->setImage(trim($_POST["image"]));
            if ($video->store($video)) {
                header('location: /admin/videos');
                die();
            } else {
                echo "Er is helaas iets misgegaan";
            }
        } else {
            echo "Niet alle waardes zijn ingevuld";
        }
    }

    public function editVideo()
    {
        if (!empty($_POST["id"]) && !empty($_POST["naam"]) && !empty($_POST["beschrijving"]) && !empty($_POST["video"]) && !empty($_POST["image"])) {
            $video = new videoModel();
            $video->setId((int)trim($_POST["id"]));
            $video->setVideoName(trim($_POST["naam"]));
            $video->setBeschrijving(trim($_POST["beschrijving"]));
            $video->setVideo(trim($_POST["video"]));
            $video->setImage(trim($_POST["image"]));
            if ($video->updateVideo($video)) {
                header('location: /admin/videos');
                die();
            } else {
                echo "Er is helaas iets misgegaan";
            }

        } else {
            echo "Er ontbreken waardes!";
        }
    }
}