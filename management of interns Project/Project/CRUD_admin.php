<?php
class CRUD_admin{
    private $cnx ; 

    function __construct()
    {
        $pdo = new bd();
        $this->cnx = $pdo->getConnexion();
        if(!$this->cnx) {
            throw new Exception("Error connecting to the database");
        }
    }
    function find($user,$password){
        $stmt = $this->cnx->prepare("SELECT * FROM admin WHERE user = :name and password = :pw ");
        $stmt->bindParam(':name', $user);
        $stmt->bindParam(':pw', $password);
        $stmt->execute();
        
        $result = $stmt->fetch();
        if($result) {
            return true;
        } else {
            return false;
        }
    }

    function findId($user,$password){
        $stmt = $this->cnx->prepare("SELECT id FROM admin WHERE user = :name and password = :pw ");
        $stmt->bindParam(':name', $user);
        $stmt->bindParam(':pw', $password);
        $stmt->execute();
        
        $result = $stmt->fetch();
        if($result) {
            return $result;
        } else {
            return false;
        }
    }
}
