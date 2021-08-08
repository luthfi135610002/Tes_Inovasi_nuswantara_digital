<?php 
//mengkoneksikan database
$koneksi = mysqli_connect("localhost","root","luthfi","employee")or die(mysqli_error());
 
// cek koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>