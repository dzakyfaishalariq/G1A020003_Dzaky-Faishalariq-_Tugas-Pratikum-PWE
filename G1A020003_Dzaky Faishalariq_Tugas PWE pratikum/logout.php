<?php
session_start();

if (isset($_SESSION['is_login'])) {
    // menghapus session
    session_destroy();

    header('Location: login.php');
} else {
    echo 'Kamu belum login';
}
