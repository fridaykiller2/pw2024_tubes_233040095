<?php
require '../functions/functions.php';

$id = $_GET['id'];
$mv = query("SELECT * FROM movies WHERE id = $id")[0];
if(isset($_POST['ubah'])) {
  if(ubah($_POST) > 0){
 echo "<script>
        alert('data berhasil diubah!');
        document.location.href = '../movie.php';
      </script>";
  }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin/admin.css">
    <link rel="stylesheet" href="../dasboard/css/all.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-yellow bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN </a>
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

          <div class="icon ml-4">
            <h5>
                <i class="fa-solid fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fa-solid fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
                <i class="fa-solid fa-right-from-bracket mr-3" data-toggle="tooltip" title="Sing Out"></i>
            </h5>
          </div>
        </div>
      </nav>

      <div class="row no-gustters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active text-white" href="dashboard.php"><i class="fa-solid fa-gauge mr-2"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="dashboard_movies.php">Movie</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link  text-white" href="users.php">user</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Genre</a><hr class="bg-secondary">
                </li>
               
              </ul>
        </div>
        <div class="col-md-10 p-5 pt-5">
        <div class="container col-9 ">
    <h1>Ubah Data Movies</h1>

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
        </div>
        <button type="submit" name="ubah" class="btn btn-primary">ubah Data</button>
    </form>

    </div>
        </div>
      </div>

 
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="admin/admin.js"></script>
  </body>
</html>