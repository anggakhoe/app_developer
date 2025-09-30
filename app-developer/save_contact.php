<?php
$host = "localhost";
$user = "root";      // ganti sesuai user MySQL
$pass = "";          // ganti sesuai password MySQL
$db   = "app_developer"; // ganti sesuai nama database Anda

$conn = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// ambil data dari form
$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$phone   = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

// validasi sederhana
if (empty($name) || empty($email) || empty($message)) {
  echo "<script>alert('Nama, Email, dan Pesan wajib diisi.');history.back();</script>";
  exit;
}

// simpan ke database
$stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $message);

if ($stmt->execute()) {
  echo "<script>alert('Pesan berhasil dikirim!');window.location.href='kontak.php';</script>";
} else {
  echo "<script>alert('Terjadi kesalahan: " . $conn->error . "');history.back();</script>";
}

$stmt->close();
$conn->close();
?>
