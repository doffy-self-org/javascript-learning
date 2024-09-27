<!-- /public/views/dashboard.php -->
<?php
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="container">
        <h1>Access Complete</h1>
        <p>Welcome to the dashboard!</p>
        <a href="index.php?action=logout" class="btn-logout">Logout</a>
    </div>
</body>
</html>
