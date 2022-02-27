<?php

include_once 'Person.class.php';


class SimpleUser extends Person{
            
    public function __construct($userid,$username,$email,$password,$role)
    {
        parent::__construct($userid,$username,$email,$password,$role);
    }



public function setSession(){
    $_SESSION['role']=0;
    $_SESSION['roleName'] = 'SimpleUser';
}

}