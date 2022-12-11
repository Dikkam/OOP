<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "crudoop";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from user");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function tambah_data($id,$nama,$alamat,$umur)
	{
		mysqli_query($this->koneksi,"insert into user values ('$id','$nama','$alamat','$umur')");
	}

	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from user where id='$id'");
		return $query->fetch_array();
	}
	function update_data($nama,$alamat,$usia,$id)
	{
		$query = mysqli_query($this->koneksi,"update user set nama='$nama',alamat='$alamat',usia='$usia' where id='$id'");
	}
	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from user where id='$id'");
	}
}
?>