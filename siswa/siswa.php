<?php
require "../koneksi.php";
require "../function/function_siswa.php";
$siswa=query("SELECT*FROM siswa");
if (isset($_POST["cari"])){
    $siswa=cari_siswa($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>data siswa </title>
</head>
<body>
    <h1>Data Siswa</h1><br>
    <a href="tambah_siswa.php">Tambah Data Siswa</a><br><br>
    <form action=""method="post">
        <input type="text" name="keyword"size="25" placeholder="masukan keyword" >
        <button type="submit" name="cari"> Cari </button>
</form><br>
    <table border="1">
        <?php $i = 1; ?>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>alamat</th>
            <th>jurusan</th>
            <th>status</th>
            <th>sekolah</th>
            <th>gender</th>
            <th>agama</th>
            <th>Nama Bapa</th>
            <th>Aksi</th>
        </tr>
    <?php foreach ($siswa as $s):?>
    <tr>
        <td align="center"><?php echo $i; ?></td>
        <td><?= $s ["nama"]; ?></td>
        <td><?= $s ["kelas"]; ?></td>
        <td><?= $s ["alamat"]; ?></td>
        <td><?= $s ["jurusan"];?></td>
        <td><?= $s ["stat"];?></td>
        <td><?= $s ["sekolah"];?></td>
        <td><?= $s ["gender"];?></td>
        <td><?= $s ["Agama"];?></td>
        <td><?= $s ["nama_bapa"]; ?></td>
        <td> <a href="ubah_siswa.php?id=<?=$s["id"];?>">UBAH</a> |
         <a href="siswa_hapus.php?id=<?=$s["id"];?>">Hapus</a>
    </td>
    </td>
    </tr>
    <?php $i++; ?> 
    <?php endforeach;?>
    </table>
</body>
</html> 