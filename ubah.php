<?php 
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($conection,"SELECT * FROM mahasiswa WHERE id=$id ");
$response = mysqli_fetch_row($query);
$data = ['laki-laki','perempuan'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>

     <form method="POST" action="">
         <input type="hidden" name="id" value="<?= $id ?>"/>
         <div>
            <label>Input Nama</label>
            <input type="text" name="nama" value="<?= $response[1] ?>"/>
         </div>
         <div>
            <label>Pilih Jenis Kelamin</label>
            <select name="jenis_kelamin">
                <?php foreach($data as $row) : ?>
                <option value="<?= $row ?>"
                 <?= $row == $response[2] ? "selected" : null ?>
                ><?= $row ?></option>
                <?php endforeach; ?>
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
    $query = mysqli_query($conection,"UPDATE mahasiswa SET nama='$nama',jenis_kelamin='$jenis_kelamin' WHERE id='$id' ");
    if($query){
        echo "<script> alert('Data Berhasil diupdate ke DB !');</script>";
	    echo "<script> location='index.php'; </script>";
    }else{
        echo "Data gagal di masukan ke databse";
    }
}