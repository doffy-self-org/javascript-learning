<?php
// Use __DIR__ to get the absolute path of the current file's directory
require_once __DIR__ . '/../../src/Controller/AuthController.php';

$controller = $_GET['controller'] ?? 'auth'; // Default to 'auth' controller
$action = $_GET['action'] ?? 'login'; // Default action is 'login'

if ($controller === 'auth') {
    $authController = new AuthController();

    if ($action === 'login') {
        $authController->login();
    } elseif ($action === 'logout') {
        $authController->logout();
    }
}
