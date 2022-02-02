<?php
require "function.php";
if(isset($_POST["submit"])){
    if(tambah_siswa($_POST)>0){
        echo"
        <script>
            alert('data berhasil ditambah');
            document.location.href = 'siswa.php';
        </script>";

    }else{
        echo"
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'tambah_siswa.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tambah data siswa</title>
</head>
<body>
    <h1>tambah data siswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="lnama">Nama :</label>
                <input type="text" name="ma" id="lnama" required>
            </li>
            <li>
                <label for="lkelas">kelas :</label>
                <input type="text" name="kel" id="lkelas" required>
            </li>
            <li><button type="submit" name="submit">Tambah</button></li>
        </ul>
    </form>    
</body>
</html>