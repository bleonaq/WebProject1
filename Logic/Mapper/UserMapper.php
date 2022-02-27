<?php
include_once 'dbh.class.php';

class UserMapper extends Dbh
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn=$this->getConnection();
    }

    public function getUserByID($userId)
    {
        $query="SELECT * from user where userid=:id";
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(":id",$userId);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return  $result;
    }

    public function getUserByUsername($username)
    {
        $query="SELECT * from user where username=:username";
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(":username",$username);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUserByRole($role){
        $query="SELECT * from user where role=:role";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        return $result=$stmt->fetchAll();
    }

    public function getNrUsers(){
        $query="SELECT count(*) as nrUsers from user";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        return $result=$stmt->fetchAll();
    }

    public function getAllUsers()
    {
        $query="SELECT * from user";
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }

    public function insertUser(\SimpleUser $user)
    {
        $query="INSERT INTO user(username,password,email,role) VALUES(:name,:pass,:email,:role)";

        $stmt=$this->conn->prepare($query);

        $username=$user->getUsername();
        $pass=$user->getPassword();
        $email=$user->getEmail();
        $role=$user->getRole();

        $passwordEncrypted=password_hash($pass,PASSWORD_BCRYPT);

        $stmt->bindParam(":name",$username);
        $stmt->bindParam(":pass",$passwordEncrypted);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":role",$role);
        $stmt->execute();
    }

    public function deleteUser($userId)
    {
    }
}
