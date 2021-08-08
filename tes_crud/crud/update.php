<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$com = $_POST['com'];
$email = $_POST['email'];
 
// update data ke database
mysqli_query($koneksi,"update employee set nama='$nama', com='$com', email='$email' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>