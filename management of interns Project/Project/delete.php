<?php
require_once "bd.php";
require_once "CRUD_encadrant.php";
session_start();

$crud= new CRUD_encadrant();

if(isset($_SESSION['admin_id'])){
    $id = $_POST['id'] ;

    $del = $crud->delete($id); 
    if($del){
        echo 1 ; 
    } else  {echo 0 ;}
}
?>