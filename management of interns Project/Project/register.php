<?php
require_once "bd.php";
require_once "CRUD_stagiaire.php";
require_once "stagiaire.php";
$crud = new CRUD_stagiaire();


$n = htmlspecialchars($_POST['n']);
$p = htmlspecialchars($_POST['p']);
$c = htmlspecialchars($_POST['c']);
$ad = htmlspecialchars($_POST['ad']);
$t = htmlspecialchars($_POST['t']);
$niv = htmlspecialchars($_POST['nv']);
$s = htmlspecialchars($_POST['s']);


$stag = new stagiaire($n, $p, $c, $ad, $t, $niv, $s);

$res = $crud->add($stag);

if ($res) {

    echo 1;
} else {

    echo 0;
}
