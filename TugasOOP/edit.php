<?php 	
include('koneksi.php');
$db = new database();
$id_user = $_GET['id'];
if(! is_null($id_user))
{
	$data_user = $db->get_by_id($id_user);
}
else
{
	header('location:tampil.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>
<h3>Update Data User</h3>
<hr/>
<form method="post" action="proses_data.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_user['id']; ?>"/>
<table>
	<tr>
		<td>Id</td>
		<td>:</td>
		<td><input type="text" name="id" value="<?php echo $data_user['id']; ?>"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data_user['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" value="<?php echo $data_user['alamat']; ?>"/></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td>:</td>
		<td><input type="text" name="usia" value="<?php echo $data_user['usia']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>