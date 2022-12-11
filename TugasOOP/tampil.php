<?php 	
include('koneksi.php');
$db = new database();
$data = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA USER</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<a href="tambah_data.php">Tambah Data</a>
<table class="table table-striped">
		<tr>
		<td class="table-primary">No</th>
		<td class="table-primary">Id</th>
		<td class="table-primary">Nama</th>
		<td class="table-primary">Alamat</th>
		<td class="table-primary">Usia</th>
		<td class="table-primary">Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['usia']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">Update</a>
					<a href="proses_data.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>