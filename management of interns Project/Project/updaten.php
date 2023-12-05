<?php
require_once "bd.php";
require_once "CRUD_encadrant.php";
require_once "encadrant.php";
session_start();
$crud = new CRUD_encadrant();
if (isset($_SESSION['admin_id'])) {



    $n = htmlspecialchars($_POST['firstName']);
    $p = htmlspecialchars($_POST['lastName']);
    $ad = htmlspecialchars($_POST['email']);
    $d =  htmlspecialchars($_POST['domain']);
    $t =  htmlspecialchars($_POST['phoneNumber']);
    $s = htmlspecialchars($_POST['stagiaire']);

    $id = $_POST['id'];
    $enc = new encadrant($n, $p, $ad, $d, $t, $s);

    //var_dump($enc);

    $upe = $crud->update($enc, $id);
    
    if ($upe) {
        echo 1;
    } else {
        echo 0;
    }
}
