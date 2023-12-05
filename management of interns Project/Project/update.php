<?php
require_once "bd.php";
require_once "CRUD_stagiaire.php";
session_start();
$crud = new CRUD_stagiaire();

if (isset($_SESSION['admin_id'])) {
    $id = $_POST['id'];
    $state = $_POST['state'];
    $mod = $crud->update($id, $state);
    if ($mod) {
        echo 1;
    } else {
        echo 0;
    }
}
