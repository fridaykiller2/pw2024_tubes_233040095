<?php
session_start();
require "../functions/functions.php";
$movies = query("SELECT * FROM movies");
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
                  <a class="nav-link active text-white" href="dasboard.html"><i class="fa-solid fa-gauge mr-2"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Movie</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link  text-white" href="#">user</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Genre</a><hr class="bg-secondary">
                </li>
               
              </ul>
        </div>
        <div class="col-md-10 p-5 pt-5">
        <div class="container">
        <h1>Daftar Movies</h1>
        <a href="tambah.php" class="btn btn-primary">tambah data Movies </a>

        <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">tahun rilis</th>
        <th scope="col">genre</th>
        <th scope="col">trailer</th>
        <th scope="col">poster 1</th>
        <th scope="col">poster 2</th>
        <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $i = 1; 
    ?>
    <?php foreach ($movies as $mv): ?>
    <tr>
      <th scope="row"><?= $i++ ?></th>
      <td><?= $mv['title']; ?></td>
      <td><?= $mv['description']; ?></td>
      <td><?= $mv['tahun_rilis']; ?></td>
      <td><?= $mv['genre_id']; ?></td>
      <td><?= $mv['trailer_url']; ?></td>
      <td><img src="../img/<?= $mv["poster 1"] ?>" alt="" width="100"></td>
      <td><img src="../img/<?= $mv["poster 2"] ?>" alt="" width="100"</td>
      <td>
        <a href="ubah_movie.php?id=<?= $mv ['id']; ?>" class="badge text-bg-warning text-decoration-none">ubah</a>
        <a href="hapus_movie.php?id=<?= $mv ['id']; ?>" onclick="return confirm('yakin?');" class="badge text-bg-danger text-decoration-none">hapus</a>

      </td>  
    </tr>
    <?php endforeach; ?>
    </tbody>

    </table>

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