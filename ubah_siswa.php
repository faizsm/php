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
    alert ('Data Gagal Dirubah');;
    document.location.href='siswa.php';
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
                <label for="lnama">Nama :</label>
                <input type="text" name="ma" id="lnama" required value ="<?=$sis ["nama"];?>">
            </li>
            <li>
                <label for="lkelas">kelas :</label>
                <input type="text" name="kel" id="lkelas" required value ="<?=$sis ["kelas"];?>">
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="al" id="alamat" required value ="<?=$sis ["alamat"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jur" id="jurusan" required value ="<?=$sis ["jurusan"];?>">
            </li>
            <li>
                <label for="status">Status :</label>
                <input type="text" name="stat" id="status" required value ="<?=$sis ["stat"];?>">
            </li>
            <li>
                <label for="sekolah">Sekolah :</label>
                <input type="text" name="sek" id="sekolah" required value ="<?=$sis ["sekolah"];?>">
            </li>
            <li>
                <label for="gender">Gender :</label>
                <input type="text" name="gen" id="gender" required value ="<?=$sis ["gender"];?>">
            </li>
            <li>
                <label for="Agama">Agama :</label>
                <input type="text" name="agam" id="Agama" required value ="<?=$sis ["Agama"];?>">
            </li>
            <li>
                <label for="nama_bapa">nama ayah :</label>
                <input type="text" name="bapa" id="nama_bapa" required value ="<?=$sis ["nama_bapa"];?>">
            </li>
                <button type="submit" name="submit">
                    UBAH DATA
                </button>
            </li>
        </ul>
    </form>
</body>
</html>
