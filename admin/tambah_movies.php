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
    <title>tambah data Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

    <div class="container col-9 ">
    <h1>Tambah Data Movies</h1>

    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $id; ?>" >
    <div class="mb-3">
            <tabel for="nama" class="form-tabel">title</tabel>
            <input type="text" class="form-control" id="nama" Name="nama" value="<?= $mv['title']; ?>" required>
        </div>
        <div class="mb-3">
            <tabel for="nim" class="form-tabel">description</tabel>  
            <input type="text" class="form-control" id="nama" Name="nim" value="<?= $mv['description']; ?>">
        </div>
        <div class="mb-3">
            <tabel for="email" class="form-tabel">tahun rilis</tabel>
            <input type="text" class="form-control" id="nama" Name="email" value="<?= $mv['tahun_rilis']; ?>">
        </div>
        <div class="mb-3">
            <tabel for="jurursan" class="form-tabel">genre</tabel>
            <input type="text" class="form-control" id="nama" Name="jurusan" value="<?= $mv['genre_id']; ?>">
        </div>
        <div class="mb-3">
            <tabel for="jurursan" class="form-tabel">trailer</tabel>
            <input type="text" class="form-control" id="nama" Name="jurusan" value="<?= $mv['trailer_url']; ?>">
        </div>
        <div class="mb-3">
            <tabel for="jurursan" class="form-tabel">poster 1</tabel>
            <input type="text" class="form-control" id="nama" Name="jurusan" value="<?= $mv['poster 1']; ?>">
        </div>
        <div class="mb-3">
            <tabel for="jurursan" class="form-tabel">poster 2</tabel>
            <input type="text" class="form-control" id="nama" Name="jurusan" value="<?= $mv['poster 2']; ?>">
        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

