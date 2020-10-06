<?php
class videoModel extends BaseModel
{

    //
    private int $videoID;
    private string $naam_video;
    private string $image;

  

    public function __construct()
    {
        parent::__construct();
    }

    public function fetchall()
    {
        $query = "SELECT * FROM video";

            if ($stmt = $this->pdo->prepare($query)) :


              
                $stmt->execute();
                $data = $stmt->fetchall(); // data ophalen en bij fetch kun je 1 rij ophalen 

                $videoarray = []; // lege array aanmaken



                foreach ($data as $row) { //loopt over alle records over de database
                        
                    // rijen omzetten in classes 
                    $video = new videoModel();
                    $video->setId($row['videoID']); 
                    $video->setVideoName($row['naam_video']); 
                    $video->setImage($row['image']); 

                    $videoarray[] = $video;
                   





                }
                //return array
                return $videoarray;



                endif;


    }




    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->videoID;
    }

    /**
     * @param int $id
     */
    public function setId(int $videoID): void
    {
        $this->videoID = $videoID;
    }


    public function setVideoName(string $videoName): void
    {
        $this->naam_video = $videoName;

    }

    /**
     * @return int
     */

     public function getVideoname(): string
    {
        return $this->naam_video;
    }
    
      public function getImage(): string
    {
        return $this->image;
    }


    public function setImage(string $image): void
    {
        $this->image = $image;

    }
    



}

