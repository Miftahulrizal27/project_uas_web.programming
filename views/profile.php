<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Profile</title>
  <link rel="stylesheet" href="<?= $this->base_url(); ?>assets/css/profile.css">
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


  <section class="profile-section">
    <div class="container">
      <div class="profile-container">
        <div class="profile-image">
          <img src="https://i.pinimg.com/736x/71/01/7d/71017d2c0810a0c624a5e25c1bd53124.jpg" alt="Profile Picture">
        </div>
        <div class="profile-info">
          <h2>Miftahul Rizal</h2>
          <p>Location: Rangkasbitung-Lebak-Banten</p>
          <p>Email: miftahulriza27@gmail.com</p>
          <p>Phone: 0877712345</p>
          <button class="edit-button">Edit Profile</button>
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