<?php 

session_start();
require_once 'src/Model/UserModel.php';

class AuthController{
    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];


            $userModel = new UserModel();
            if($userModel->validateUser($username,$password)){
                $_SESSION['loggedin'] = true;
                header('location: home.php');
            } else{
                $error = "Invalid username or password";
                include './public/views/loginForm.php';
            }
        }
    }

    public function logout(){
        session_destroy();
        header('location: index.php');
    }
}

?>