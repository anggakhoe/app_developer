<?php
$units = [
  [
    'judul' => 'Valleyside - 7.5x12.5 (3KT / 2KM)',
    'deskripsi' => 'When Home Meets Holiday',
    'harga' => 'Rp 1.800.000.000',
    'gambar' => 'https://serenitycentral.id/images/412x512/7d56a88e858dffb7235186be7515da10166d87bb.jpg'
  ],
  [
    'judul' => 'Hill Side - 6x12 (2KT / 1KM)',
    'deskripsi' => 'Incomparable Back To Nature Luxury Villa & Resort based in Sekupang, Batam.',
    'harga' => 'Rp 880.000.000',
    'gambar' => 'https://serenitycentral.id/images/412x512/247ffac65c838d902a60531f566dcc31cb107a14.jpg'
  ],
  [
    'judul' => 'Beachside - 7x12 (3KT /2KM)',
    'deskripsi' => 'The First Blue Ocean Resort Investment in Batam.',
    'harga' => 'Mulai Rp 2.650.000.000',
    'gambar' => 'https://serenitycentral.id/images/412x512/0d7d75170d31767eed13f0f4b5a1616aadf2f3e3.jpg'
  ],
];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Developer Perumahan - Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <?php include 'partials/navbar.php'; ?>

  <main class="container my-5">
    <h1>Produk & Layanan</h1>
    <p class="mb-4">Berikut adalah beberapa unit yang kami tawarkan.</p>

    <div class="row">
      <?php foreach($units as $u): ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="<?php echo $u['gambar']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($u['judul']); ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($u['judul']); ?></h5>
            <p class="card-text"><?php echo htmlspecialchars($u['deskripsi']); ?></p>
          </div>
          <div class="card-footer">
            <strong><?php echo htmlspecialchars($u['harga']); ?></strong>
            <a href="kontak.php" class="btn btn-sm btn-success float-end">Hubungi Kami</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </main>

  <?php include 'partials/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
