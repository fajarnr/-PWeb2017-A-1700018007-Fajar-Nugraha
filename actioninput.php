<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include_once("config.php");

	if(isset($_POST['Submit'])) {	
	$nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
	$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
	$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
	$tanggallahir = mysqli_real_escape_string($koneksi, $_POST['tempatlahir']);
	$jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
	$telepone = mysqli_real_escape_string($koneksi, $_POST['telepone']);

	// echo "<pre>";
	// print_r($nik);echo "<br>";
	// print_r($nama);echo"<br>";
	// print_r($alamat);echo "<br>";
	// print_r($tanggallahir);echo "<br>";
	// print_r($jabatan);echo "<br>";
	// print_r($telepone);echo "<br>";
	// echo "</pre>";
	// die();

	if(empty($nik) || empty($nama) || empty($alamat) || empty($tanggallahir) || empty($jabatan) || empty($telepone)) {
				
		if(empty($nik)) {
			echo "<font color='red'>nik field is empty.</font><br/>";
		}
		if(empty($nama)) {
			echo "<font color='red'>nama field is empty.</font><br/>";
		}
		if(empty($alamat)) {
			echo "<font color='red'>almat field is empty.</font><br/>";
		}
		if(empty($tanggallahir)) {
			echo "<font color='red'>tanggal_lahir field is empty.</font><br/>";
		}
		if(empty($jabatan)) {
			echo "<font color='red'>jabatan field is empty.</font><br/>";
		}
		if(empty($telepone)) {
			echo "<font color='red'>telepone field is empty.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else{
		$result = mysqli_query($koneksi, "INSERT INTO users (nik,nama,alamat,tanggal_lahir,jabatan,telepone) VALUES('$nik','$nama','$alamat', '$tanggallahir', '$jabatan' , '$telepone')");

		echo "<font color='green'>Data berhasil di simpan.";
		echo "<br/><a href='header2.php'>kembali ke home</a>";
	}
}

?>
</body>
</html>