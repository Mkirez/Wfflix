<?php

class CourseController 
{

	
    public function index()
    {


    	$videos = new videoModel();

    	$videos = $videos->fetchall(1);




    	 // print_r($videos);
      //            die();




        require 'views/course.view.php';
    }

    public function show(){
    	$id = $_GET["id"];

        $videos = new videoModel();

        $video = $videos->fetchById($id);
        if($video == null)
            die("404");
        
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
