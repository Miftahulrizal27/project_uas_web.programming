<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Insert Item</title>
  <link rel="stylesheet" href="<?= $this->base_url(); ?>assets/css/insert.css">
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

  <section class="insert-section">
    <div class="container">
      <div class="insert-container">
        <h2>Insert Barang</h2>
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
            <button type="submit">Insert</button>
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
</body>

</html>