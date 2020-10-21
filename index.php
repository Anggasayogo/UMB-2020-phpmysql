<?php 
include "koneksi.php";


$query = mysqli_query($conection,"SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud With Php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <h3>Crud With Php</h3>
    <a href="tambah.php">Tambah Data</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis kelamin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php //var_dump($data); die; ?>
            <?php $i=1; while($row = mysqli_fetch_array($query)) : ?>
               <tr>
                   <td><?= $i++; ?></td>
                   <td><?= $row['nama'] ?></td>
                   <td><?= $row['jenis_kelamin'] ?></td>
                   <td>
                       <a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a>
                       <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
                   </td>
               </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>