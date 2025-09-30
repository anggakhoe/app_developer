<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Developer Perumahan - Beranda</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  
  <?php include 'partials/navbar.php'; ?>

  <!-- Hero Section -->
  <header class="hero-section">
    <div class="hero-slide active" style="background-image: url('https://i.pinimg.com/1200x/6d/89/74/6d89742acce395ff8a9564a02ccaee0e.jpg');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content fade-in">
      <h1>KHOCU GROUP</h1>
      <p>Mewujudkan hunian nyaman, aman, dan strategis untuk keluarga modern.</p>
      <a href="produk.php" class="btn btn-primary btn-lg">Lihat Unit Siap Huni</a>
    </div>
  </header>

  <!-- Tentang Kami -->
  <main class="container my-5">
    <section class="row align-items-center mb-5">
      <div class="col-md-6 fade-in">
        <h2 class="mb-3">Tentang Kami</h2>
        <p>
          Kami adalah developer perumahan di Batam yang berfokus pada pembangunan 
          perumahan terjangkau namun berkualitas. Dengan pengalaman bertahun-tahun, 
          kami menawarkan lokasi strategis, desain modern, dan layanan purna jual yang andal.
        </p>
        <ul>
          <li>Lokasi strategis dekat fasilitas umum</li>
          <li>Desain rumah modern dan fungsional</li>
          <li>Pilihan skema pembayaran fleksibel</li>
        </ul>
      </div>
      <div class="col-md-6 text-center fade-in">
        <img 
          src="https://i.pinimg.com/1200x/6d/89/74/6d89742acce395ff8a9564a02ccaee0e.jpg" 
          alt="Perumahan"
          class="img-fluid rounded shadow"
        >
      </div>
    </section>

    <!-- Keunggulan -->
    <section class="row text-center">
      <div class="col-md-4 mb-3 fade-in">
        <div class="feature-card h-100 p-4">
          <div class="feature-icon">🏠</div>
          <h5>Unit Ready</h5>
          <p>Unit siap huni dengan sertifikat lengkap.</p>
        </div>
      </div>
      <div class="col-md-4 mb-3 fade-in">
        <div class="feature-card h-100 p-4">
          <div class="feature-icon">✅</div>
          <h5>Garansi Kualitas</h5>
          <p>Standar bangunan sesuai best practice konstruksi.</p>
        </div>
      </div>
      <div class="col-md-4 mb-3 fade-in">
        <div class="feature-card h-100 p-4">
          <div class="feature-icon">💳</div>
          <h5>Skema Pembayaran</h5>
          <p>Cash bertahap hingga 60x (negosiasi di kantor pemasaran).</p>
        </div>
      </div>
    </section>
  </main>

  <section class="container my-5">
    <div class="cta-section">
      <h3>Berminat Memiliki Hunian Impian?</h3>
      <p>Hubungi tim marketing kami sekarang dan dapatkan penawaran terbaik!</p>
      <a href="kontak.php" class="btn btn-outline-primary btn-lg">Hubungi Kami</a>
    </div>
  </section>

  <?php include 'partials/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/slide.js"></script>
</body>
</html>
