<?php
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Developer Perumahan - Profil</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/style.css">

  <style>
    .section-header {
      text-align: center;
      margin-bottom: 3rem;
    }
    .section-header h1 {
      font-weight: 700;
      color: #198754;
    }
    .card-custom {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform .3s ease, box-shadow .3s ease;
      background: #fff;
    }
    .card-custom:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    .icon-box {
      font-size: 2.5rem;
      color: #198754;
      margin-bottom: 1rem;
      text-align: center;
    }
    .hero-profil {
      position: relative;
      height: 60vh;
      background: url('https://i.pinimg.com/1200x/6d/89/74/6d89742acce395ff8a9564a02ccaee0e.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
    }
    .hero-profil::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0,0,0,0.5);
    }
    .hero-profil .content {
      position: relative;
      text-align: center;
      z-index: 2;
    }
    .hero-profil h1 {
      font-size: 3rem;
      font-weight: 700;
    }
    .hero-profil p {
      font-size: 1.2rem;
    }
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body>
  <?php include 'partials/navbar.php'; ?>

  <header class="hero-profil">
    <div class="content">
      <h1>Profil Perusahaan</h1>
      <p>Sekilas tentang Developer Khocu</p>
    </div>
  </header>

  <!-- Konten Profil -->
  <main class="container my-5">
    <div class="section-header">
      <h1>Tentang Kami</h1>
      <p class="text-muted">Developer terpercaya sejak 2015</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="card card-custom h-100 p-4">
          <div class="icon-box">🏠</div>
          <h4 class="text-center">Sejarah Singkat</h4>
          <p class="text-muted text-center">
            Developer Perumahan Khocu Property didirikan pada tahun 2015 dengan tujuan menyediakan hunian bernilai bagi keluarga muda dan menengah. 
            Berawal dari proyek skala kecil, kini berkembang ke kawasan perumahan modern.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-custom h-100 p-4">
          <div class="icon-box">✨</div>
          <h4 class="text-center">Visi</h4>
          <p class="text-muted text-center">
            Menjadi developer terpercaya yang menghadirkan hunian berkualitas dengan harga terjangkau serta pelayanan terbaik bagi seluruh pelanggan.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-custom h-100 p-4">
          <div class="icon-box">🎯</div>
          <h4 class="text-center">Misi</h4>
          <ul class="text-muted">
            <li>Membangun hunian yang aman, nyaman, dan estetis.</li>
            <li>Menyediakan layanan purna jual yang responsif.</li>
            <li>Mengutamakan kepuasan pelanggan & transparansi transaksi.</li>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <section class="container my-5">
    <div class="cta-section">
      <h3>Bergabung Bersama Kami</h3>
      <p>Jadikan Khocu Property sebagai pilihan tepat untuk hunian impian Anda.</p>
      <a href="kontak.php" class="btn btn-outline-light btn-lg">Hubungi Kami</a>
    </div>
  </section>

  <?php include 'partials/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
