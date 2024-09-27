<?php


$controller = $_GET['controller'] ?? 'auth';
$action = $_GET['action'] ?? 'login';

if($controller === 'auth'){
    require_once './src/controller/AuthController.php';
    $authController = new AuthController();

    if($action === 'login'){
        $authController->login();
    }else{
        $authController->logout();
    }
}
?>