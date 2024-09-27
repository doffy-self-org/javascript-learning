<!-- /public/views/loginForm.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Login Form</h2>
  <form id="loginForm" action="index.php?controller=auth&action=login" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Login</button>
  </form>

  <div id="error-message" style="color: red;">
    <?php if (isset($error)) { echo $error; } ?>
  </div>

  <script src="js/script.js"></script>
</body>
</html>
