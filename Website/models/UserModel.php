<?php
class UserModel extends BaseModel
{
    private int $id;
    private string $username, $password;
    private $createdAt, $updatedAt;

    public function __construct()
    {
        parent::__construct();
    }

    public function findByEmail(string $email) : void
    {
        $query = "SELECT * FROM gebruikers WHERE gebruikersnaam = :username";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam(':username', $email, PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetch();
            if($data !== false) :
                $this->id = $data['id'];
                $this->username = $data['gebruikersnaam'];
                $this->password = $data['wachtwoord'];
                $this->createdAt = $data['created_at'];
                $this->updatedAt = $data['updated_at'];
            endif;
        endif;
    }

    public function checkExistingUsername(string $username) : bool
    {
        $query = "SELECT * FROM gebruikers WHERE gebruikersnaam = :username";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount() == 0;
        endif;
    }

    public function fetchById($id)
    {
        $query = "SELECT * FROM gebruikers WHERE id = :id";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam('id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch();
            if($data !== false) :
                $this->load($data);
                return $this;
            endif;
        endif;
    }

    public function find($id)
    {
        $query = "SELECT * FROM gebruikers WHERE id = :id";

        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch();
            if($data !== false) :
                $this->id = $data['id'];
                $this->username = $data['gebruikersnaam'];
                $this->password = $data['wachtwoord'];
                $this->createdAt = $data['created_at'];
                $this->updatedAt = $data['updated_at'];
            endif;
        endif;
    }

     public function find2($username)
    {
        $query = "SELECT * FROM gebruikers WHERE gebruikersnaam = '$username'";

        if ($stmt = $this->pdo->prepare($query)) :
           $stmt->bindParam(':username', $username, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch();
            if($data !== false) :
                $this->id = $data['id'];
                $this->username = $data['gebruikersnaam'];
               //$this->username='test';
                $this->password = $data['wachtwoord'];
                $this->createdAt = $data['created_at'];
                $this->updatedAt = $data['updated_at'];

               //echo $this->username;
               // exit;
            endif;
        endif;
    }

    public function store(UserModel $user)
    {
        $query = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES (:gebruikersnaam, :wachtwoord)";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindValue(':gebruikersnaam', $user->getUserName());
            $stmt->bindValue(':wachtwoord', password_hash($user->getPassword(),PASSWORD_DEFAULT));
            return $stmt->execute();
        endif;
        return false;
    }

    public function updateUser(UserModel $user){
        $query = "UPDATE gebruikers SET 
                    gebruikersnaam = :gebruikersnaam, 
                    wachtwoord = :wachtwoord 
                    WHERE id = :id";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindValue(':id', $user->getId(), PDO::PARAM_INT);
            $stmt->bindValue(':gebruikersnaam', $user->getUserName());
            $stmt->bindValue(':wachtwoord', password_hash($user->getPassword(),PASSWORD_DEFAULT));
            return $stmt->execute();
        endif;
        return false;
    }

    public function delete($id)
    {
        if ($id != null) {
            $stmt = $this->pdo->prepare('SELECT * FROM gebruikers WHERE id = ?');
            $stmt->execute([$id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$user) {
                return "0";
            }
            $stmt = $this->pdo->prepare('DELETE FROM gebruikers WHERE id = ?');
            $stmt->execute([$id]);
            return "1";
        } else {
            return "0";
        }
    }

    public function all()
    {
        $query = 'SELECT * FROM gebruikers';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = array();
        while($data = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $user = new UserModel();
            $user->load($data);
            $result[]=$user;
        }
        return $result;
    }

    private function load($data)
    {
        $this->setId($data['id']);
        $this->setUsername($data['gebruikersnaam']);
        $this->setPassword($data['wachtwoord']);
        $this->setCreatedAt($data['created_at']);
        $this->setUpdatedAt($data['updated_at']);
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
    public function getUserName(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUserName(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}