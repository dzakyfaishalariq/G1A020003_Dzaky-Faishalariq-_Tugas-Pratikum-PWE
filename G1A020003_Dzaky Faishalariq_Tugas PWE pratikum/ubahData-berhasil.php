<?php
/*
    author :Dzaky Faishaalriq
    NPM    :G1A020003
    Kelas  :A
    tugas pembuatan from update nama dan npm 
*/
session_start();
include '_includes/db.php';

if (isset($_POST['ubah'])) {
    $db = PWE_DB::connect();
    $nama_baru = $_POST['nama_baru'];
    $npm_baru = $_POST['npm_baru'];
    $query = $db->prepare('UPDATE `anggota` SET `nama` = ?, `npm` = ? WHERE `id` = ?');
    $query->execute([$nama_baru, $npm_baru, $_SESSION['id']]);

    if ($query->rowCount() > 0) {
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['is_ubah'] = true;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['npm'] = $data['npm'];
        echo "<script>Data berhasil diubah yaitu </script>";
        header('Location: dasbor.php');
    } else {
        echo 'Gagal';
    }
}
