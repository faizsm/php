<?php
require '../function/function_siswa.php';
$sis =id_siswa($_GET["id"]);
if (isset($_POST["submit"])){
if (ubah_siswa($_POST)>0){
    echo"
    <script>
    alert('Data Berhasil Dirubah');
    document.location.href='siswa.php';
    </script>
    ";
}else{
    echo "
    <script>
    alert ('Data Gagal Dirubah');;
    document.location.href='siswa.php';
    </script>
    ";
   }
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
<h1>Tambah Data Siswa</h1>
<form action="" method="post">
<input type="hidden" name= "id" value="<?=$sis ["id"];?>">
<div class="form-floating mb-3">
  <input type="text" class="form-control" name= "ma"id="lnama" placeholder="nama" value ="<?=$sis ["nama"];?>">
  <label for="lnama">Nama</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name= "kel"id="lkelas" placeholder="kelas" value ="<?=$sis ["kelas"];?>">
  <label for="lkelas">kelas</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name= "al"id="alamat" placeholder="alamat" value ="<?=$sis ["alamat"];?>">
  <label for="alamat">Alamat</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name= "jur"id="jurusan" placeholder="jurusan" value ="<?=$sis ["jurusan"];?>">
  <label for="jurusan">jurusan</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name= "stat"id="status" placeholder="status" value ="<?=$sis ["stat"];?>">
  <label for="status">Status</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name= "sek"id="sekolah" placeholder="sekolah" value ="<?=$sis ["sekolah"];?>">
  <label for="sekolah">Sekolah</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name= "gen"id="gender" placeholder="gender" value ="<?=$sis ["gender"];?>">
  <label for="gender">Gender</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name= "agam"id="Agama" placeholder="agama" value ="<?=$sis ["Agama"];?>">
  <label for="Agama">Agama</label> 
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name= "bapa" id="nama_bapa" placeholder="nama_bapa" value ="<?=$sis ["nama_bapa"];?>">
  <label for="nama_bapa">Nama Orang Tua</label>
</div>
<button type="submit" name="submit" class="btn btn-outline-dark">UBAH</button>
</form>
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