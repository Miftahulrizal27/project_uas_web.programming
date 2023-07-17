<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $this->base_url('assets/css/'); ?>register1.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="<?= $this->base_url(); ?>">Marketplace Baduy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
  <section class="register-section">
    <div class="container">
      <div class="register-toggle">
        <button class="active" onclick="toggleRegister('seller')">Register Penjual</button>
        <button onclick="toggleRegister('buyer')">Register Pembeli</button>
      </div>
      <div id="seller-register" class="register-form">
        <h2>Register Penjual</h2>
        <form>
          <div class="form-group">
            <label for="seller-name">Nama Lengkap</label>
            <input type="text" id="seller-name" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
            <label for="seller-email">Email</label>
            <input type="email" id="seller-email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="seller-password">Password</label>
            <input type="password" id="seller-password" placeholder="Password" required>
          </div>
          <button type="submit">Register</button>
        </form>
      </div>
      <div id="buyer-register" class="register-form">
        <h2>Register Pembeli</h2>
        <form>
          <div class="form-group">
            <label for="buyer-name">Nama Lengkap</label>
            <input type="text" id="buyer-name" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
            <label for="buyer-email">Email</label>
            <input type="email" id="buyer-email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="buyer-password">Password</label>
            <input type="password" id="buyer-password" placeholder="Password" required>
          </div>
          <button type="submit">Register</button>
        </form>
      </div>
      <p>Already have an account? <a href="login1.php">Login here</a></p>
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
  <script src="script2.js"></script>
</body>

</html>