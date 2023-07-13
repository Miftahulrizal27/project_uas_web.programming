<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Home</title>
  <link rel="stylesheet" href="<?= $this->base_url(); ?>assets/css/halaman.css">
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

  <section class="hero">
    <div class="container">
      <h2>Welcome to Marketplace BADUY</h2>
      <p>Temukan semua yang Anda butuhkan disini</p>
      <form class="search-form">
        <input type="text" placeholder="Search for products">
        <button type="submit">Search</button>
      </form>
    </div>
  </section>

  <section class="product-section">
    <div class="container">
      <h3>Produk</h3>
      <div class="product-list">
        <div class="product-item">
          <img src="https://jubelio-store.s3.ap-southeast-1.amazonaws.com/sustaination/2021/04/01215658/Madu-15-scaled.webp" alt="Product 1">
          <h4>Madu Baduy</h4>
          <p>Madu Merah Murni Baduy Forest 100% Alami Pengganti Gula.</p>
          <a href="detail.php">View Details</a>
        </div>
        <div class="product-item">
          <img src="https://images.tokopedia.net/img/cache/900/product-1/2020/3/27/395739114/395739114_279463cd-720c-4dfa-842f-ab4191e5be76_700_700.jpg" alt="Product 2">
          <h4>Kain Tenun Baduy</h4>
          <p>Kain tenun Suku Baduy dibuat dengan bantuan alam dan proses menenun dilakukan oleh kaum perempuan Suku Baduy. .</p>
          <a href="detail.php">View Details</a>
        </div>
        <div class="product-item">
          <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2021/4/17/48f0ec80-8569-40f2-8862-40e2e4dd05e2.jpg" alt="Product 3">
          <h4>Gula Aren Baduy</h4>
          <p>Gula aren, atau gula merah, atau gula kawung adalah pemanis yang dibuat dari nira yang berasal dari tandan bunga jantan pohon enau.</p>
          <a href="detail.php">View Details</a>
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