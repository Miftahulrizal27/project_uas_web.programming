<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="detail.css">
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

  <section class="detail-section">
    <div class="container">
      <div class="product-container">
        <div class="product-image">
          <img src="https://jubelio-store.s3.ap-southeast-1.amazonaws.com/sustaination/2021/04/01215658/Madu-15-scaled.webp" alt="Product 1">
        </div>
        <div class="product-info">
          <h2>Madu Baduy</h2>
          <p>Madu Merah dari Baduy Forest, berasal dari hutan badui yang dibambil secara bertanggung jawab.
Madu Merah (Red Honey) memiliki rasa manis natural yang berasal dari buah durian, duku, dan bunga lainnya di hutan liar Baduy, Banten. 
Sehingga kandungan nutrisinya kompleks tidak seperti madu ternak yang biasanya hanya terdiri dari satu macam bunga. 
Selain itu Madu Merah dari Baduy Forest dapat menggantikan gula pasir untuk penggunaan sehari-hari..</p>
          <div class="harga">Harga: 50.000-150.000</div>
          <button>Beli</button>
        </div>
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
