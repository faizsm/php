<?php require "koneksi.php";
    function query($query){
        
        global $db;
        $result=mysqli_query($db,$query);
        $rows =[];
            while($row = mysqli_fetch_assoc($result)){
                $rows[] =$row;

           }
           return $rows;
    }

    function tambah_siswa($data){
        global$db;
        $na =$data["ma"];
        $las=$data["kel"];
        $mat=$data["al"];
        $jurus=$data["jur"];
        $tus=$data["stat"];
        $kolah=$data["sek"];
        $der=$data["gen"];
        $agama=$data["agam"];
        $bpa=$data["bapa"];
    $tambah="INSERT INTO siswa VALUES(
        '',
        '$na',
        '$las',
        '$mat',
        '$jurus',
        '$tus',
        '$kolah',
        '$der',
        '$agama',
        '$bpa'
    )";
            
            mysqli_query($db,$tambah);
            return mysqli_affected_rows($db);
    }
    
    function id_siswa($id){
        return query("SELECT*FROM siswa WHERE id = $id")[0];
    }
    function ubah_siswa($data){
        global $db;
        $id=$data["id"];
        $nam=$data["ma"];
        $kel=$data["kel"];
        $mat=$data["al"];
        $jurus=$data["jur"];
        $tus=$data["stat"];
        $kolah=$data["sek"];
        $der=$data["gen"];
        $agama=$data["agam"];
        $bpa=$data["bapa"];

        $ubah = "UPDATE siswa SET
            nama='$nam',
            kelas='$kel',
            alamat='$mat',
            jurusan='$jurus',
            stat='$tus',
            sekolah='$kolah',
            gender='$der',
            Agama='$agama',
            nama_bapa='$bpa'

            WHERE id ='$id' ";
            mysqli_query($db,$ubah);
            return mysqli_affected_rows($db);
    }

    function hapus_siswa($id){
        global $db;
        mysqli_query($db,"DELETE FROM siswa WHERE id = $id");
        return mysqli_affected_rows($db);
    }

    function cari_siswa($keyword){
        $cari = "SELECT * FROM siswa WHERE
        nama like '%$keyword%' OR
        kelas like '%$keyword%' OR
        alamat like '%$keyword%'OR
        jurusan like '%$keyword%' OR
        stat like '%$keyword%' OR
        sekolah like '%$keyword%' OR
        gender like '%$keyword%' OR
        Agama like '%$keyword%' OR
        nama_bapa like '%$keyword%' ";
        return query($cari);
    }
?>