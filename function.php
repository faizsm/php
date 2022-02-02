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
    
    $tambah="INSERT INTO siswa VALUES(
        '',
        '$na',
        '$las'
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
        $kel=$data["las"];

        $ubah = "UPDATE siswa SET
            nama='$nam',
            kelas='$kel'
            WHERE id ='$id' ";
            mysqli_query($db,$ubah);
            return mysqli_affected_rows($db);
    }

    function hapus_siswa($id){
        global $db;
        mysqli_query($db,"DELETE FROM siswa WHERE id = $id");
        return mysqli_affected_rows($db);
    }
?>