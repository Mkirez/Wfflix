<?php
class videoModel extends BaseModel
{

    //
    private int $videoID;
    private string $naam_video;
    private string $beschrijving;
    private string $image;
    private string $video;

  

    public function __construct()
    {
        parent::__construct();
    }

    public function fetchall()
    {
        $query = "SELECT * FROM video";

            if ($stmt = $this->pdo->prepare($query)){

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
            }
    }


    public function fetchById($id)
    {
        $query = "SELECT * FROM video where videoID = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch();
        if ($data){
            $video = new videoModel();
            $video->setId($data['videoID']); 
            $video->setVideoName($data['naam_video']); 
            $video->setBeschrijving($data['videobeschrijving']); 
            $video->setImage($data['image']); 
            $video->setVideo($data['video']); 
            return $video;
        }else{
            return null;
        }
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
    
    public function getBeschrijving(): string
    {
        return $this->beschrijving;
    }


    public function setBeschrijving(string $beschrijving): void
    {
        $this->beschrijving = $beschrijving;
    }

      public function getImage(): string
    {
        return $this->image;
    }


    public function setImage(string $image): void
    {
        $this->image = $image;

    }
    
    public function getVideo(): string
    {
        return $this->video;
    }


    public function setVideo(string $video): void
    {
        $this->video = $video;
    }
}

