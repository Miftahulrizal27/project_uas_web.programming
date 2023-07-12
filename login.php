<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="container">
    <div class="login-container">
      <h1>Login</h1>
      <form>
        <div class="form-group">
          <label for="login-username">Username</label>
          <input type="text" id="login-username" required>
        </div>
        <div class="form-group">
          <label for="login-password">Password</label>
          <input type="password" id="login-password" required>
        </div>
        <div class="form-group">
          <button type="submit">Login</button>
        </div>
      </form>
      <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
  </div>
</body>

</html>
