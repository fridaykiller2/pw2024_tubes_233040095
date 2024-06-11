<?php
require '../functions/functions.php';
// Jika tombol tambah ditekan
if(isset($_POST['tambah'])) {
  // jika data berhasil ditambahkan
  if(tambah($_POST) > 0){
 echo "<script>
        alert('data berhasil ditambah!');
        document.location.href = '../movie.php';
      </script>";
  }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lihat Data Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

    <div class="container col-9 ">
    <h1>Lihat Data Users</h1>

    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $id; ?>" >
    <div class="mb-3">
            <tabel for="nama" class="form-tabel">usernmame</tabel>
            <input type="text" class="form-control" id="nama" Name="nama" value="<?= $user['username']; ?>" required>
        </div>
        <div class="mb-3">
            <tabel for="nim" class="form-tabel">password</tabel>  
            <input type="text" class="form-control" id="nama" Name="nim" value="<?= $user['password']; ?>">
        </div>
        <div class="mb-3">
            <tabel for="email" class="form-tabel">role</tabel>
            <input type="text" class="form-control" id="nama" Name="email" value="<?= $user['role']; ?>">
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

