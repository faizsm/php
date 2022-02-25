<?php require "../koneksi.php";
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
        $na =$data["nisn"];
        $las=$data["nama"];
        $mat=$data["jenis_kelamin"];
        $jurus=$data["jurusan"];
        $tus=$data["sekolah"];
    $tambah="INSERT INTO siswa VALUES(
        '',
        '$na',
        '$las',
        '$mat',
        '$jurus',
        '$tus'
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
        $na =$data["nisn"];
        $las=$data["nama"];
        $mat=$data["jenis_kelamin"];
        $jurus=$data["jurusan"];
        $tus=$data["sekolah"];
        $ubah = "UPDATE siswa SET
            nisn='$na',
            nama='$las',
            jenis_kelamin='$mat',
            jurusan='$jurus',
            sekolah='$tus'

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
        nisn like '%$keyword%' OR
        nama like '%$keyword%' OR
        jenis_kelamin like '%$keyword%'OR
        id_jurusan like '%$keyword%' OR
        id_sekolah like '%$keyword%' ";
        return query($cari);
    }
?>