<?php
session_start();
require_once "bd.php";
require_once "CRUD_encadrant.php";
require_once "encadrant.php";
$crud = new CRUD_encadrant();

if (isset($_SESSION['admin_id'])) {
    $enc = new encadrant(
        htmlspecialchars($_POST['firstName']),
        htmlspecialchars($_POST['lastName']),
        htmlspecialchars($_POST['email']),
        htmlspecialchars($_POST['domain']),
        htmlspecialchars($_POST['phoneNumber']),
        htmlspecialchars($_POST['stagiaire'])
    );
    $res = $crud->addEn($enc);
    if ($res) {
        echo 1;
    } else {
        echo 0;
    }
}
