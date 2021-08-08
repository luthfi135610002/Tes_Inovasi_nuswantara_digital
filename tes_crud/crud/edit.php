<!DOCTYPE html>
<html>
<body>
 
	<h2>DATA EMPLOYEES</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA employee</h3>
 
	<?php
	//koneksi database
	include 'koneksi.php';
	$id = $_GET['id'];
	//pemanggilan data yang tersimpan di tabel employee dengan id
	$data = mysqli_query($koneksi,"select * from employee where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<!-- form untuk mengedit bagian isi database -->
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>com</td>
					<td><input type="text" name="com" value="<?php echo $d['com']; ?>"></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
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