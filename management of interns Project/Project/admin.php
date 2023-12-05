<?php
class admin {
private $user , $password ; 

function setUser($user){
    $this->user=$user;
}
function setPassword($password){
    $this->password=$password;
}

function getUser(){
    return $this->user;
}

function getPassword(){
    return $this->password;
}

public function checkLogin() {
    require_once "bd.php";
    require_once "CRUD_admin.php";
   $crud = new CRUD_admin();
    $res = $crud->find($this->user, $this->password);
    if($res) {
        return true;
    } else {
        return false;
    }
}


} 
?>