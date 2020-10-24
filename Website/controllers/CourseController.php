<?php

class CourseController 
{

	
    public function index()
    {
    	$videos = new videoModel();
    	$videos = $videos->fetchall();
        require 'views/course.view.php';
    }

    public function show(){
    	$id = $_GET["id"];

        $videos = new videoModel();

        $video = $videos->fetchById($id);
        if($video == null)
            die("404");

        //Add User Watch
        if(!(new WatchModel())->CheckWatched($video->getId(),$_SESSION['user_id'])) {
            (new WatchModel())->insertWatch($video->getId(), $_SESSION['user_id']);
        }

        if( $videos->fetchById($id + 1) != null){
            $next = "/video?id=" . $videos->fetchById($id + 1)->getId();
        }
        
        if( $videos->fetchById($id - 1) != null){
            $previous = "/video?id=" . $videos->fetchById($id - 1)->getId();
        }

        require 'views/video.view.php';
    }
}

?>
