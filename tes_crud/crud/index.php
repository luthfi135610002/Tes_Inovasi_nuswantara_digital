<!DOCTYPE html>
<html>
<body>
	<h2>DATA EMPLOYEES</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH KARYAWAN</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>nama</th>
			<th>Company</th>
			<th>Email</th>
			<th>OPSI</th>
		</tr>
		<?php 
		//koneksi database
		include 'koneksi.php';
		$no = 1;
		//pemanggilan data yang tersimpan di tabel employee
		$data = mysqli_query($koneksi,"select * from employee");
		while($d = mysqli_fetch_array($data)){
			?>
		<!-- menempatkan data yang di panggil dari database -->
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['com']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td>
				<!-- link untuk edit dan hapus dengan mengambil dari bagian id -->
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>