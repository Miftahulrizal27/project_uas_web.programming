<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="login1.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Marketplace Baduy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Detail Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Tambah Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="login-section">
    <div class="container">
      <div class="login-toggle">
        <button class="active" onclick="toggleLogin('seller')">Login Penjual</button>
        <button onclick="toggleLogin('buyer')">Login Pembeli</button>
      </div>
      <div id="seller-login" class="login-form">
        <h2>Login Penjual</h2>
        <form>
          <div class="form-group">
            <label for="seller-email">Email</label>
            <input type="email" id="seller-email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="seller-password">Password</label>
            <input type="password" id="seller-password" placeholder="Password" required>
          </div>
          <button type="submit">Login</button>
        </form>
      </div>
      <div id="buyer-login" class="login-form">
        <h2>Login Pembeli</h2>
        <form>
          <div class="form-group">
            <label for="buyer-email">Email</label>
            <input type="email" id="buyer-email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="buyer-password">Password</label>
            <input type="password" id="buyer-password" placeholder="Password" required>
          </div>
          <button type="submit">Login</button>
        </form>
      </div>
      <p>Don't have an account? <a href="register1.php">Register here</a></p>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 Marketplace BADUY. All rights reserved.</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="script1.js"></script>
</body>

</html>
=======
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="login1.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Marketplace Baduy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Detail Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Tambah Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="login-section">
    <div class="container">
      <div class="login-toggle">
        <button class="active" onclick="toggleLogin('seller')">Login Penjual</button>
        <button onclick="toggleLogin('buyer')">Login Pembeli</button>
      </div>
      <div id="seller-login" class="login-form">
        <h2>Login Penjual</h2>
        <form>
          <div class="form-group">
            <label for="seller-email">Email</label>
            <input type="email" id="seller-email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="seller-password">Password</label>
            <input type="password" id="seller-password" placeholder="Password" required>
          </div>
          <button type="submit">Login</button>
        </form>
      </div>
      <div id="buyer-login" class="login-form">
        <h2>Login Pembeli</h2>
        <form>
          <div class="form-group">
            <label for="buyer-email">Email</label>
            <input type="email" id="buyer-email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="buyer-password">Password</label>
            <input type="password" id="buyer-password" placeholder="Password" required>
          </div>
          <button type="submit">Login</button>
        </form>
      </div>
      <p>Don't have an account? <a href="register1.php">Register here</a></p>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 Marketplace BADUY. All rights reserved.</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="script1.js"></script>
</body>

</html>
>>>>>>> Stashed changes
