<?php
include '_includes/db.php';

$pd = PWE_DB::connect();

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$password = $_POST['password'];

$password = md5($password);

// memasukan data ke database
$query = $pd->prepare('INSERT INTO `anggota` (`id`, `nama`, `npm`, `email`, `password`)
    VALUES (NULL, ?, ?, ?, ?)');
// hasilnya akan keluar bolean
$insert = $query->execute([$nama, $npm, $email, $password]);
// ===========================
//pengecekan apakah data berhasil dimasukkan
if ($insert) {
    echo '<script>alert("Pendaftaran berhasil!");</script>';
    header('Location: berhasil-daftar.php');
} else {
    echo '<script>alert("Pendaftaran gagal!");</script>';
}
