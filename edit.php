<?php
	include_once("config.php");

	if(isset($_POST['update'])) 
	{
	$id = mysqli_real_escape_string($koneksi, $_POST['id']);	
	$nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
	$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
	$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
	$tanggallahir = mysqli_real_escape_string($koneksi, $_POST['tempatlahir']);
	$jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
	$telepone = mysqli_real_escape_string($koneksi, $_POST['telepone']);

/*	echo "<pre>";
	print_r($id);echo "<br>";
	print_r($nik);echo "<br>";
	print_r($nama);echo"<br>";
	print_r($alamat);echo "<br>";
	print_r($tanggallahir);echo "<br>";
	print_r($jabatan);echo "<br>";
	print_r($telepone);echo "<br>";
	echo "</pre>";
	die();*/

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
		// $result = mysqli_query($koneksi, "UPDATE users SET nik='$nik', name='$name',alamat='$alamat', tanggal_lahir='$tanggal_lahir', jabatan='$jabatan', telepone='$telepone' WHERE id=$id");

		$result = mysqli_query($koneksi, "UPDATE users SET nik='$nik',nama='$nama',alamat='$alamat', tanggal_lahir='$tanggallahir', jabatan='$jabatan', telepone='$telepone' WHERE id=$id");

		header("Location: view.php");
	}
}

?>

<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($koneksi, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nik = $res['nik'];
	$nama = $res['nama'];
	$alamat = $res['alamat'];
	$tanggallahir = $res['tanggal_lahir'];
	$jabatan = $res['jabatan'];
	$telepone = $res['telepone'];
}
?>

<html>
<head>
    <title>edit data</title>
</head>
<body>
    <!-- <a href="view.php"></a> -->
    <br><br>

    <form action="edit.php" method="post" name="form1">
        <table width="25%" border="0" align="center">
            <tr>
                <td height="40">&nbsp;</td>
                <td>&nbsp;</td>
                <td><font size="4" color="blue"><b>MASUKAN DATA KARYAWAN</b></font></td>
            </tr>
            <tr>
                <td height="40">&nbsp;</td>
                <td>nik</td>
                <td><input type="text" name="nik" value="<?php echo $nik ?>" size="30"></td>
            </tr>
            <tr>
                <td height="40">&nbsp;</td>
                <td>nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama ?>" size="30"></td>
            </tr>
            <tr>
                <td height="40">&nbsp;</td>
                <td>alamat</td>
                <td><textarea type="text" name="alamat" rows="4" cols="27"><?php echo $alamat ?></textarea></td>
            </tr>
            <tr>
                <td height="40">&nbsp;</td>
                <td>tempat/tanggal lahir</td>
                <td><input type="text" name="tempatlahir" value="<?php echo $tanggallahir ?>" size="30"></td>
            </tr>
            <tr>
                <td height="40">&nbsp;</td>
                <td>jabatan</td>
                <td><input type="text" name="jabatan" value="<?php echo $jabatan ?>" size="30"></td>
            </tr>
            <tr>
                <td height="40">&nbsp;</td>
                <td>telepone</td>
                <td><input type="text" name="telepone" value="<?php echo $telepone ?>" size="30"></td>            
            </tr>
            <tr>
                <td height="60">&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="Submit" name="update" value="update">&nbsp;&nbsp;&nbsp;
            </tr>

        </table>
    </form>

</body>
</html>