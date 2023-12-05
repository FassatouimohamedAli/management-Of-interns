<?php
session_start();
require_once "bd.php";
require_once "CRUD_sujet.php";
require_once "sujet.php";
$crud = new CRUD_sujet();

if (isset($_SESSION['admin_id'])) {

    $id = htmlspecialchars($_POST['id']);
    $t = htmlspecialchars($_POST['titre']);
    $des = htmlspecialchars($_POST['description']);
    $d = htmlspecialchars($_POST['domain']);
    $e = htmlspecialchars($_POST['etat']);
    $enc = htmlspecialchars($_POST['encadrant']);


    $sujet = new sujet($t, $des, $d, $e, $enc);

    $res = $crud->updateSujet($sujet, $id);

    if ($res) {
        echo 1;
    } else {
        echo 0;
    }
}
