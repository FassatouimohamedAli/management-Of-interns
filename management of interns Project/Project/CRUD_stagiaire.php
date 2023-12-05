<?php

class CRUD_stagiaire
{
    private $cnx;
    function __construct()
    {
        $pdo = new bd();
        $this->cnx = $pdo->getConnexion();
        if (!$this->cnx) {
            throw new Exception("Error connecting to the database");
        }
    }

    function allId()
    {
        $sql = "SELECT idstag,nom FROM stagiaire ";
        $a = $this->cnx->prepare($sql);
        $a->execute();
        $res = $a->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    function find($id)
    {
        $sql = "SELECT * FROM stagiaire WHERE idstag = ?";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    function findAll()
    {
        $sql = "SELECT * FROM stagiaire";
        $stmt = $this->cnx->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_NUM);
    }

    function update($id, $state)
    {
        $sql = "UPDATE stagiaire SET etat= ? WHERE idstag = ? ";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(1, $state, PDO::PARAM_STR);
        $stmt->bindValue(2, $id, PDO::PARAM_STR);
        $res = $stmt->execute();
        return $res;
    }

    function add(stagiaire $stag)
    {
        $n = $stag->getNom();
        $p = $stag->getPrenom();
        $c = $stag->getCin();
        $ad = $stag->getAdress();
        $t = $stag->getTel();
        $niv = $stag->getNiveau();
        $s = $stag->getScolarite();

        $sql = "INSERT INTO stagiaire (nom,prenom,cin,adress,tel,niveau,scolarite) VALUES (:nom,:prenom,:cin,:adress,:tel,:niveau,:scolarite)";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindParam(':nom', $n, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $p, PDO::PARAM_STR);
        $stmt->bindParam(':cin', $c, PDO::PARAM_STR);
        $stmt->bindParam(':adress', $ad, PDO::PARAM_STR);
        $stmt->bindParam(':tel', $t, PDO::PARAM_STR);
        $stmt->bindParam(':niveau', $niv, PDO::PARAM_STR);
        $stmt->bindParam(':scolarite', $s, PDO::PARAM_STR);
        $res = $stmt->execute();
        return $res;
    }
}
