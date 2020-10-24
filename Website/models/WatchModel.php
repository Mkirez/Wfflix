<?php
class WatchModel extends BaseModel
{
    private int $id,$videoId,$userId;

    public function __construct()
    {
        parent::__construct();
    }

    public function CheckWatched($videoId,$userId)
    {
        $query = "SELECT * FROM watch where video_id = :video_id AND user_id = :user_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':video_id',$videoId,PDO::PARAM_INT);
        $stmt->bindParam(':user_id',$userId,PDO::PARAM_INT);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function insertWatch($videoId,$userId)
    {
        $query = "INSERT INTO watch (video_id, user_id) VALUES (:video_id, :user_id)";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindValue(':video_id', $videoId);
            $stmt->bindValue(':user_id',$userId);
            return $stmt->execute();
        endif;
        return false;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return WatchModel
     */
    public function setId(int $id): WatchModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoId(): int
    {
        return $this->videoId;
    }

    /**
     * @param int $videoId
     * @return WatchModel
     */
    public function setVideoId(int $videoId): WatchModel
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return WatchModel
     */
    public function setUserId(int $userId): WatchModel
    {
        $this->userId = $userId;
        return $this;
    }
}

