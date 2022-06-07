<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$barang = $_POST['barang'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi,"update user set nama='$nama', barang='$barang', alamat='$alamat' where id_user='$id_user'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>