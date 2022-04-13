<?php
session_start();
require '_includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update data</title>
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <form action="ubahData-berhasil.php" method="POST">
                    <h1 class="h1">Ubah data anda di nama dan NPM</h1>

                    <div class="mb-3">
                        <label for="input-nama" class="form-label">Nama : </label>
                        <input type="text" name="nama_baru" id="input-nama" class="form-control" placeholder="Ubah nama anda" required="required">
                    </div>

                    <div class="mb-3">
                        <label for="input-npm" class="form-label">NPM:</label>
                        <input type="text" name="npm_baru" id="input-npm" class="form-control" placeholder="Ubah NPM anda" required="required">
                    </div>

                    <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

</body>

</html>