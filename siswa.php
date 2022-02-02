<?php
require "koneksi.php";
require "function.php";
$siswa=query("SELECT*FROM siswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>data siswa </title>
</head>
<body>
    <h1>Data Siswa</h1><br>
    <a href="tambah_siswa.php">Tambah Data Siswa</a><br><br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    <?php foreach ($siswa as $s):?>
    <tr>
        <td><?= $s ["nama"]; ?></td>
        <td><?= $s ["kelas"]; ?></td>
        <td> <a href="ubah_siswa.php?id=<?=$s["id"];?>">UBAH</a> |
         <a href="siswa_hapus.php?id=<?=$s["id"];?>">Hapus</a>
    </td>
    </td>
    </tr>
    <?php endforeach;?>
    </table>
    
</body>
</html>