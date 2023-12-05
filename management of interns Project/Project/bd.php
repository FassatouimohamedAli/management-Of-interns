<?php
class bd
{

    function getConnexion()
    {
        $dsn = "mysql:host=localhost;dbname=gestion_stagiaire";
        $user = "root";
        $pw = "";
        $cnx = new PDO($dsn, $user, $pw);
        return $cnx;
    }
}
