<?php
require_once './src/connection.php';

class UserModel{
    private $conn;

    public function __contructor(){
        $this->conn = new Connection();
    }

    public function validateUser($username, $password){
        $connection = $this->conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $connection->bindParam(':username', $username);
        $connection->bindParam(':password', $password);
        $connection->execute();

        return $connection->rowCount()>0;
    }
}

?>