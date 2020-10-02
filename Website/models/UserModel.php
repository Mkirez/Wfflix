<?php
class UserModel extends BaseModel
{
    private int $id;
    private string $gebruikersnaam, $wachtwoord;
    private $created_at, $updated_at;

    public function __construct()
    {
        parent::__construct();
    }

    public function findByEmail(string $email)
    {
        $query = "SELECT * FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam";

            if ($stmt = $this->pdo->prepare($query)) :
                $stmt->bindParam(':gebruikersnaam',$gebruikersnaam, PDO::PARAM_STR);
                $stmt->execute();
                $data = $stmt->fetch();
                if ($data !== false) :
                        $this->id = $data['id'];
                        $this->gebruikersnaam = $data['gebruikersnaam'];
                        $this->wachtwoord = $data['wachtwoord'];
                        $this->created_at = $data['created_at'];
                        $this->updated_at = $data['updated_at'];
                    endif;
            endif;
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
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->gebruikersnaam;
    }

    /**
     * @param string $gebruikersnaam
     */
    public function setName(string $gebruikersnaam): void
    {
        $this->gebruikersnaam = $gebruikersnaam;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->wachtwoord;
    }

    /**
     * @param string $wachtwoord
     */
    public function setPassword(string $wachtwoord): void
    {
        $this->wachtwoord = $wachtwoord;
    }

    /**
     * @return mixed
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreated_at($created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }



}