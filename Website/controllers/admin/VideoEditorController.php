<?php

class VideoEditorController
{
    public function index()
    {
        $model = new VideoModel();
        $video = $model->all();
        require 'views/admin/admineditvideo.view.php';
    }

    public function editVideo()
    {
        if (!empty($_POST["naam_video"]) and !empty($_POST["videobeschrijving"]) and !empty($_POST["image"]) and !empty($_POST["video"])) {
            $video = new videoModel();
            $video->setId((int)trim($_POST["id"]));
            $video->setVideoName(trim($_POST["naam_video"]));
            $video->setBeschrijving(trim($_POST["videobeschrijving"]));
            $video->setImage(trim($_POST["image"]));
            $video->setVideo(trim($_POST["video"]));{
                if ($video->updateVideo($video)) {
                    header('location: /adminvideo');
                    die();
                } else {
                    echo "Er is helaas iets misgegaan";
                }
            }
        } else {
            echo "Er ontbreken waardes!";
        }
    }

}