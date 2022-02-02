<?php
require 'function.php';
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
    alert ('Data Gagal Dirubah');
    document.location.href=ubah_siswa.php;
    </script>
    ";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah data siswa</title>
</head>
<body>
    <h1>Ubah Data Siswa</h1>
    <form action="" method="post">
        <ul>    
         <input type="hidden" name= "id" value="<?=$sis ["id"];?>">
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name ="ma" id="nama" required value ="<?=$sis ["nama"];?>">
            </li>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name ="las" id="kelas" required value ="<?=$sis ["kelas"];?>">
            </li>
            <li>
                <button type="submit" name="submit">
                    UBAH DATA
                </button>
            </li>
        </ul>
    </form>
</body>
</html>