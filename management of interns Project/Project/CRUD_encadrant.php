<?php
class CRUD_encadrant
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

    function update(encadrant $enc, $id)
    {
        $n = $enc->getNom();
        $p = $enc->getPrenom();
        $ad = $enc->getAdress();
        $d = $enc->getDomaine();
        $t = $enc->getTel();
        $ids =  $enc->getIdstag();

        $sql = "UPDATE encadrant SET nom = :nom, prenom = :prenom , adress = :adress, domaine = :domaine, tel = :tel, idstag = :idstag WHERE iden = :iden";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindParam(':nom', $n, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $p, PDO::PARAM_STR);
        $stmt->bindParam(':adress', $ad, PDO::PARAM_STR);
        $stmt->bindParam(':domaine', $d, PDO::PARAM_STR);
        $stmt->bindParam(':tel', $t, PDO::PARAM_STR);
        $stmt->bindParam(':idstag', $ids, PDO::PARAM_INT);
        $stmt->bindParam(':iden', $id, PDO::PARAM_INT);
        $res = $stmt->execute();
        return $res;
    }

    function delete($id)
    {
        $sql = "DELETE FROM encadrant WHERE iden = ? ";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_STR);
        $res = $stmt->execute();
        return $res;
    }

    function findAll()
    {
        $sql = "select * from encadrant";
        $res = $this->cnx->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

    function allId()
    {
        $sql = "SELECT iden,nom FROM encadrant ";
        $a = $this->cnx->prepare($sql);
        $a->execute();
        $res = $a->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function Recherch($id)
    {
        $sql = "SELECT * FROM encadrant WHERE iden = :id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return ($res = $stmt->fetch(PDO::FETCH_ASSOC));
    }

    public function find($id)
    {
        $sql = "SELECT nom, prenom, adress, domaine, tel FROM encadrant WHERE iden = :id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return ($res = $stmt->fetch(PDO::FETCH_ASSOC));
    }

    function addEn(encadrant $enc)
    {

        $n = $enc->getNom();
        $p = $enc->getPrenom();
        $ad = $enc->getAdress();
        $d = $enc->getDomaine();
        $t = $enc->getTel();
        $ids =  $enc->getIdstag();

        $sql = "INSERT INTO encadrant (nom,prenom,adress,domaine,tel,idstag) VALUES (?,?,?,?,?,?)";
        $e = $this->cnx->prepare($sql);
        $e->bindValue(1, $n, PDO::PARAM_STR);
        $e->bindValue(2, $p, PDO::PARAM_STR);
        $e->bindValue(3, $ad, PDO::PARAM_STR);
        $e->bindValue(4, $d, PDO::PARAM_STR);
        $e->bindValue(5, $t, PDO::PARAM_STR);
        $e->bindValue(6, $ids, PDO::PARAM_INT);
        $res = $e->execute();
        return $res;
    }
}
