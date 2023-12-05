<?php

require_once "bd.php ";
require_once "CRUD_admin.php";
require_once "admin.php";
session_start();

$crud = new CRUD_admin();
$admin = new admin();


$user = htmlspecialchars($_POST['user']);
$pw = htmlspecialchars($_POST['pw']);

$admin->setUser($user);
$admin->setPassword($pw);

$res = $admin->checkLogin();


if ($res) {
    $id = $crud->findId($user, $pw);
    if ($id) {
        $_SESSION['admin_id'] = $id[0];
    }
    $_SESSION['name'] = $user;
    $_SESSION['pw'] = $pw;

    echo 1;
} else {
    echo 0;
}
