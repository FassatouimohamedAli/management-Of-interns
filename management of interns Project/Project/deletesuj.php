<?php
require_once "bd.php";
require_once "CRUD_sujet.php";
session_start();

$crud= new CRUD_sujet();

if(isset($_SESSION['admin_id'])){
    $id = $_POST['id'] ;

    $del = $crud->deletesujet($id); 
    if($del){
        echo 1 ; 
    } else  {echo 0 ;}
}
