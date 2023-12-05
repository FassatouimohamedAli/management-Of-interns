<?php
session_start();
require_once "bd.php";
require_once "CRUD_sujet.php";
require_once "sujet.php";
$crud = new CRUD_sujet();

if (isset($_SESSION['admin_id'])) {

    $sujet = new sujet(
        htmlspecialchars($_POST['titre']),
        htmlspecialchars($_POST['description']),
        htmlspecialchars($_POST['domain']),
        htmlspecialchars($_POST['etat']),
        htmlspecialchars($_POST['encadrant'])
    );
    $res = $crud->addSujet($sujet);
    if ($res) {
        echo 1;
    } else {
        echo 0;
    }
}
