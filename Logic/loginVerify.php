<?php 
    include_once '../SuperClass/AdminUser.php';
    include_once '../SuperClass/SimpleUser.php';
    include_once '../Logic/Mapper/UserMapper.php';
    
    session_start();

    if (isset($_POST['login-btn'])) {
        $login = new LoginLogic($_POST);
        $login->verifyData();
    }else if(isset($_POST['registerBtn'])){
        $register=new RegisterLogic($_POST);
        $register->registerUser();
    }
     else {
        header("Location:../HTMLfiles/index.php");
    }
    
    class LoginLogic
    {
        private $username = "";
        private $password = "";
    
        public function __construct($formData)
        {
            $this->username = $formData['username'];
            $this->password = $formData['password'];
        }
    
        public function verifyData()
        {
            if ($this->variablesNotDefinedWell($this->username, $this->password)) {
                header("Location:../HTMLfiles/Register.php?error=r=wrongPw");
            } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
                header('Location:../HTMLfiles/index.html?success=loggedin');
            } else
                header("Location:../HTMLfiles/LoginUsers.php?error=r=SQLERROR");
        }
    
        private function variablesNotDefinedWell($username, $password)
        {
            if (empty($username) || empty($password)) {
                return true;
            }
            return false;
        }
    
        private function usernameAndPasswordCorrect($username, $password)
        {
            $mapper = new UserMapper();
            $user = $mapper->getUserByUsername($username);

            /*

            if ($user==null) {
                return false;
            }

            if (password_verify($password,$user['password'])) {
                return true;
            }else{
                return false;
            }

            */

            if ($user == null || count($user) == 0) return false;
            else if (password_verify($password, $user['password'])){
                if ($user['role'] == 1) {
                    $obj = new AdminUser($user['userId'], $user['username'], $user['password'],$user['email'], $user['role']);
                    $obj->setSession();
                } else {
                    $obj = new SimpleUser($user['userId'], $user['username'], $user['password'], $user['role'], $user['email']);
                    $obj->setSession();
                }
                return true;
            }
            else{
                return false;
            }

        }

    }

    class RegisterLogic{

        private $username = "";
        private $password = "";
        private $email = "";
    
        public function __construct($formData)
        {
            $this->username = $formData['username'];
            $this->password = $formData['password'];
            $this->email = $formData['email'];
        }

        public function registerUser(){
            $user=new SimpleUser($this->userId,$this->username,$this->email,$this->password,0);
            $mapper=new UserMapper;
            $mapper->insertUser($user);

            sleep(5);

            header('Location:../HTMLfiles/LoginUsers.php?success=Registered');
        }
    }
    