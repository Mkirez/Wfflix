<?php


class AdminVideoController
{
    public function index()
    {
        $model = new videoModel();
        $products = $model->all();
        require 'views/admin/adminvideo.view.php';
    }

    public function create(){
        require 'views/admin/video_create.view.php';
    }

    public function delete()
    {
        $model = new videoModel();
        $id=$_GET["id"];
        $delete = $model->delete($id);
        echo $delete;
    }

    public function AddProduct()
    {
        if (!empty($_POST["naam_video"]) && !empty($_POST["videobeschrijving"]) && !empty($_POST["image"]) && !empty($_POST["video"])) {
            $video = new videoModel();
            $video->setVideoName(trim($_POST["naam_video"]));
            $video->setBeschrijving(trim($_POST["videobeschrijving"]));
            $video->setImage(trim($_POST["image"]));
            $video->setVideo(trim($_POST["video"]));{
                if ($video->store($video)) {
                    header('location: /adminvideo');
                    die();
                } else {
                    echo "Er is helaas iets misgegaan";
                }
            }
        } else {
            echo "Niet alle waardes zijn ingevuld";
        }
    }
}