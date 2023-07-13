<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="insert.css">
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
              <a class="nav-link" href="halaman.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Detail Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="insert.php">Tambah Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Profile.php">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="insert-section">
    <div class="container">
      <div class="insert-container">
        <h2>Tambah Barang</h2>
        <form>
          <div class="form-group">
            <label for="item-name">Nama Barang</label>
            <input type="text" id="item-name" required>
          </div>
          <div class="form-group">
            <label for="item-price">Harga</label>
            <input type="text" id="item-price" required>
          </div>
          <div class="form-group">
            <label for="item-description">Deskripsi Barang</label>
            <textarea id="item-description" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <label for="item-image">Gambar Barang</label>
            <input type="file" id="item-image" required>
          </div>
          <div class="form-group">
            <button type="submit">Tambah</button>
          </div>
        </form>
      </div>
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
</body>

</html>
