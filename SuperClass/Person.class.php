<?php

    abstract class Person{
        private $userid;
        private $username;
        private $email;
        private $password;
        private $role;


            public function __construct($userid,$username,$email,$password,$role)
            {
                $this->userid=$userid;
                $this->username=$username;
                $this->email=$email;
                $this->password=$password;
                $this->role=$role;
            }

            public function getUsername(){
                return $this->username;
            }

            public function getUser_id(){
                return $this->userid;
            }
            
            public function getEmail(){
                return $this->email;
            }

            public function getPassword(){
                return $this->password;
            }

            public function getRole(){
                return $this->role;
            }
        

        abstract function setSession();
    }
