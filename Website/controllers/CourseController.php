<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welkom " . $_SESSION['username'] . "!";
} else {
    echo "<HTML><a href='/login'>Log in om deze pagina te zien.</a></HTML>";
}

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
