<!DOCTYPE html>
<html>
<body>
 	<h2>CRUD DATA EMPLOYEE</h2>
	<br/>
	<!-- link untuk kembali ke bagian index.php -->
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA EMPLOYEE</h3>
	<!-- form pengisian tambah karyawan -->
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>COMPANY</td>
				<td><input type="text" name="com"></td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>