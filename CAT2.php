<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="CAT2.css">
    <script>
      function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
          passwordInput.type = "text";
        } else {
          passwordInput.type = "password";
        }
      }
    </script>
  </head>
  <body>
    <h1>Login Form</h1>
    <div class="container">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="checkbox" onclick="togglePasswordVisibility()"> Show password

        <input type="submit" value="Login">
      </form>
      <div class="button-container">
        <a href="index.php" class="register-button">Register</a>
      </div>
    </div>
  </body>
</html>