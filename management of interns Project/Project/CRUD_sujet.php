<?php

class CRUD_sujet
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
    public function RecherchSujet($id)
    {
        $sql = "SELECT * FROM sujet WHERE ids = :id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return ($res = $stmt->fetch(PDO::FETCH_ASSOC));
    }

    function deletesujet($id)
    {
        $sql = "DELETE FROM sujet WHERE ids = ? ";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_STR);
        $res = $stmt->execute();
        return $res;
    }


    function findAll()
    {
        $sql = "SELECT * FROM sujet";
        $stmt = $this->cnx->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_NUM);
    }

    function updateSujet(Sujet $sujet, $id)
    {
        $t = $sujet->getTitre();
        $des = $sujet->getDescription();
        $d = $sujet->getDomaine();
        $e = $sujet->getEtat();
        $i = $sujet->getIden();

        $sql = "UPDATE sujet SET titre = :titre, description = :description , domaine = :domaine , etat = :etat, iden = :iden  WHERE ids = :ids";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindParam(':titre', $t, PDO::PARAM_STR);
        $stmt->bindParam(':description', $des, PDO::PARAM_STR);
        $stmt->bindParam(':domaine', $d, PDO::PARAM_STR);
        $stmt->bindParam(':etat', $e, PDO::PARAM_STR);
        $stmt->bindParam(':iden', $i, PDO::PARAM_INT);
        $stmt->bindParam(':ids', $id, PDO::PARAM_INT);
        $res = $stmt->execute();
        return $res;
    }

    function addSujet(sujet $sujet)
    {
        $t = $sujet->getTitre();
        $des = $sujet->getDescription();
        $d = $sujet->getDomaine();
        $e = $sujet->getEtat();
        $i = $sujet->getIden();

        $sql = "INSERT INTO sujet (titre,description,domaine,etat,iden) VALUES ('$t','$des','$d','$e',$i)";
        $res = $this->cnx->query($sql);
        return $res;
    }
}
