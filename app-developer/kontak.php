<?php
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Developer Perumahan - Kontak</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <?php include 'partials/navbar.php'; ?>

  <main class="container my-5">
    <h1>Kontak Kami</h1>
    <p>Alamat: Jl. Imam bonjol, Kota Batam,Kepulauan Riau. Telepon: 0853-6306-6751</p>

    <div class="row">
      <div class="col-md-6">
        <form id="contactForm" action="save_contact.php" method="post" novalidate>
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="150">
            <div class="invalid-feedback">Nama wajib diisi.</div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required maxlength="150">
            <div class="invalid-feedback">Masukkan email yang valid.</div>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Telepon (opsional)</label>
            <input type="tel" class="form-control" id="phone" name="phone" maxlength="50">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            <div class="invalid-feedback">Pesan tidak boleh kosong.</div>
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
        <div id="result" class="mt-3"></div>
      </div>

      <div class="col-md-6">
        <h5>Lokasi Kantor</h5>
        <div class="ratio ratio-16x9">
          <iframe src="https://maps.google.com/maps?q=Jl.+Contoh+No.123&amp;output=embed" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </main>

  <?php include 'partials/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
