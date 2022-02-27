<?php

    include_once 'Person.class.php';

class AdminUser extends Person{
        
    public function __construct($userid,$username,$email,$password,$role)
    {
        parent::__construct($userid,$username,$email,$password,$role);
    }

public function setSession(){
    $_SESSION['role']=1;
    $_SESSION['roleName'] = 'AdminUser';
}
}