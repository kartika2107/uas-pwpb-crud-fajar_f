<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD Sampe Pusing</title>
</head>
<body>
    <h2>Toko Ayang</h2>
    <br/>
    <a href="index.php">Kembali</a>
    <br/>
    <br/>
    <h3>Edit Data Barang</h3>

    <?php 
    include 'koneksi.php';
    $id_user = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from user where id_user='$id_user'");
	while($d = mysqli_fetch_array($data)){
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Barang</td>
                <td><input type="text" name="barang" value="<?php echo $d['barang']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>