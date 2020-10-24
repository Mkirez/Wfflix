<?php

class BaseModel
{
    protected PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=wfdomp',
                'root',
                'St34ck5#Nice',
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (PDOException $e) {
            die(var_dump($e->getMessage()));
        }
    }
}