<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="register.css">
</head>

<body>
  <div class="container">
    <div class="register-container">
      <h1>Register</h1>
      <form>
        <div class="form-group">
          <label for="register-username">Username</label>
          <input type="text" id="register-username" required>
        </div>
        <div class="form-group">
          <label for="register-email">Email</label>
          <input type="email" id="register-email" required>
        </div>
        <div class="form-group">
          <label for="register-password">Password</label>
          <input type="password" id="register-password" required>
        </div>
        <div class="form-group">
          <label for="register-confirm-password">Confirm Password</label>
          <input type="password" id="register-confirm-password" required>
        </div>
        <div class="form-group">
          <button type="submit">Register</button>
        </div>
      </form>
      <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
  </div>
</body>

</html>
