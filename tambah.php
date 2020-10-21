<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>

     <form method="POST" action="">
         <div>
            <label>Input Nama</label>
            <input type="text" name="nama" placeholder="Input Nama "/>
         </div>
         <div>
            <label>Pilih Jenis Kelamin</label>
            <select name="jenis_kelamin">
                <option value="null">----PILIH----</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
         </div>

         <button type="submit" name="submit">Submit</button>
     </form>

</body>
</html>


<?php 
include "koneksi.php";
if(isset($_POST['submit'])){
    // ambil smua inputan
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    
    // simpan data ke databse
    $query = mysqli_query($conection,"INSERT INTO mahasiswa (nama,jenis_kelamin) VALUES ('$nama','$jenis_kelamin') ");
    if($query){
        echo "<script> alert('Data Berhasil dimasukan ke DB !');</script>";
	    echo "<script> location='index.php'; </script>";
    }else{
        echo "Data gagal di masukan ke databse";
    }
}