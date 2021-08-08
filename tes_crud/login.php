<?php 
//koneksi database
include 'koneksi.php';
 // menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 //pemrosesan data yang dikirim dari form
 if(!empty($username) && !empty($password)){
 $sql = mysql_query("select * from admin where username='$username' and password='$password'");
 $result = mysql_num_rows($sql);
 if ($result){
 echo "Login berhasil, ";
 echo "Klik <a href='crud/index.php'>disini</a> untuk melanjutkan";
 }
 else{
echo"Username dan password salah";
 }}
 else{
 echo"Silahkan isi Username dan Password";
 }

?>
