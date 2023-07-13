<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Product Details</title>
  <link rel="stylesheet" href="<?= $this->base_url(); ?>assets/css/detail.css">
</head>

<body>
  <header>
    <div class="container">
      <h1>Marketplace</h1>
      <nav>
        <ul>
          <li><a href="<?= $this->base_url(); ?>">Beranda</a></li>
          <li><a href="<?= $this->base_url('detail'); ?>">Detail Barang</a></li>
          <li><a href="<?= $this->base_url('insert'); ?>">Tambah Barang</a></li>
          <li><a href="<?= $this->base_url('profile'); ?>">Profile</a></li>
        </ul>
      </nav>
    </div>
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
</body>

</html>