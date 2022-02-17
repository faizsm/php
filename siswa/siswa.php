<?php
require "../koneksi.php";
require "../function/function_siswa.php";
$siswa=query("SELECT*FROM siswa");
if (isset($_POST["cari"])){
    $siswa=cari_siswa($_POST["keyword"]);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <h1> DATA SISWA SMKN 907 MARS</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aplikasi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../siswa/siswa.php">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../guru/guru.php">Guru</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<a class="btn mt-3 mb-3  btn-dark" href="tambah_siswa.php" role="button">Tambah Data Siswa</a>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" action="" method="post">
      <input class="form-control me-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
    </form>
  </div>
</nav>

<table  class="table table-dark table-striped">
  <thead>
      <?php $i = 1; ?>
    <tr class="table-dark">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">alamat</th>
      <th scope="col">jurusan</th>
      <th scope="col">status</th>
      <th scope="col">sekolah</th>
      <th scope="col">gender</th>
      <th scope="col">agama</th>
      <th scope="col">nama_bapa</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php foreach ($siswa as $s): ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?= $s ["nama"]; ?></td>
        <td><?= $s ["kelas"]; ?></td>
        <td><?= $s ["alamat"]; ?></td>
        <td><?= $s ["jurusan"];?></td>
        <td><?= $s ["stat"];?></td>
        <td><?= $s ["sekolah"];?></td>
        <td><?= $s ["gender"];?></td>
        <td><?= $s ["Agama"];?></td>
        <td><?= $s ["nama_bapa"]; ?></td>
        <td><a class="btn btn-primary" href="ubah_siswa.php?id=<?=$s["id"];?>" role="button">Ubah</a>
            <a class="btn btn-primary" href="siswa_hapus.php?id=<?=$s["id"];?>" role="button">Hapus</a></td>
    </td>
  </tbody>
    <?php $i++; ?> 
    <?php endforeach;?>
</table>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../asset/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>