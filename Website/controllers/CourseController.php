<?php



class CourseController 
{

	
    public function index()
    {


    	$videos = new videoModel();

    	$videos = $videos->fetchall();




    	 // print_r($videos);
      //            die();




        require 'views/course.view.php';
    }
}

?>
