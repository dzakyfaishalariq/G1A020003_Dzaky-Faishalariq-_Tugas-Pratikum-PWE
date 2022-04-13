<?php
/*
    author :Dzaky Faishaalriq
    NPM    :G1A020003
    Kelas  :A
    tugas pembuatan from update nama dan npm 
*/
session_start();
require '_includes/db.php';
$db = PWE_DB::connect();
$query = $db->prepare("SELECT*FROM anggota WHERE id = ?");
$query->execute([$_SESSION['id']]);
$data = $query->fetch(PDO::FETCH_ASSOC);
if (isset($_SESSION['is_login']) || isset($_SESSION['is_ubah'])) :
?>

    <!doctype html>
    <html lang="en">

    <head>
        <title>Dasbor UKM XYZ</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
    </head>

    <body>
        <div class="container py-3">
            <header>
                <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                        <img src="images/himatif_6000_small.png" alt="Logo" class="img-fluid" style="width: 5%;">
                        <span class="fs-4">UKM XYZ</span>
                    </a>

                    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                        <a class="py-2 text-dark text-decoration-none" href="logout.php">Logout</a>
                    </nav>
                </div>

                <div class="dasbor-header p-3 pb-md-4 mx-auto text-center">
                    <h6>Selamat Datang:</h6>
                    <h1 class="display-4 fw-normal"><?php echo $data['nama']; ?></h1>
                    <br>
                    <h1 class="display-4 fw-normal"><?php echo $data['npm']; ?></h1>
                    <p class="fs-5 text-muted">Ini halaman dasbor yang hanya bisa diakses jika sudah login.</p>
                    <a href="ubahData.php">Ubah data</a>
                </div>
            </header>
        </div>

    </body>

    </html>

<?php else : ?>
    <!-- karena belum login, arahkan ke halaman login -->
    <?php header('Location: login.php'); ?>
<?php endif; ?>