<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$com = $_POST['com'];
$email = $_POST['email'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into employee (nama,com,email) values ('$nama','$com','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>