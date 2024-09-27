<?php
// /src/Controller/AuthController.php
session_start();

// Use __DIR__ to get the absolute path of the current directory and navigate to the model directory
require_once __DIR__ . '/../Models/UserModel.php'; // Adjust path as needed

class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new UserModel();
            if ($userModel->validateUser($username, $password)) {
                $_SESSION['loggedin'] = true;
                header('Location: dashboard.php'); // Redirect to dashboard after login
            } else {
                $error = "Invalid username or password.";
                include __DIR__ . '/../../public/views/loginForm.php'; // Make sure this path is correct
            }
        }
    }

    public function logout() {
        session_destroy();
        header('Location: index.php'); // Redirect to login after logout
    }
}
?>