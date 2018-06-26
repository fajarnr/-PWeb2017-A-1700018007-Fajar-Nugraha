<?php

include_once("config.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>tampil data</title>
  	<style type="text/css">

	body {
    font-family:    Arial, Helvetica, sans-serif;
	}
    #halaman { width:100%; height: 100%;}
    #header { height:50px; background-color: #006400;padding: 15px; margin-top: 10px; border-radius:15px; }
    .warnafontheader{
        color:  black;
        vertical-align: center;
        text-align: center; text-align: center; text-align: left;   ;
    }
</style>
</head>
<body>
	<div id="halaman">
    <div id="header">
    <h3 class="warnafontheader">DATA KARYAWAN</h3>

		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr bgcolor="#FFA600" height="40">
            <th width="">NO</th>&nbsp;
            <th width="">NIK</th>&nbsp;
            <th width="">NAMA</th>&nbsp;
            <th width="">ALAMAT</th>&nbsp;
            <th width="">TEMPAT/TANGGAL LAHIR</th>&nbsp;
            <th width="">JABATAN</th>&nbsp;
            <th width="">TELEPONE</th>&nbsp;
            <th width="">ACTION</th>&nbsp;
        </tr>
        <tr bgcolor="#DFE6EF">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>

          	<?php
        	$res = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id DESC");  ?>

        	<?php $nomor = 1;
        	if (is_array($res) || is_object($res)) { ?>

        		<?php foreach ($res as $value) { ?>
		        <tr bgcolor="#DFE6EF" align="center">

		            <td><?php echo $nomor?></td>
		            <td><?php echo $value['nik']?></td>
		            <td><?php echo $value['nama']?></td>
		            <td><?php echo $value['alamat']?></td>
		            <td><?php echo $value['tanggal_lahir']?></td>
		            <td><?php echo $value['jabatan']?></td>
		            <td><?php echo $value['telepone']?></td>
		            <td>
		            	<a href="<?php echo "edit.php".'?id='.$value['id'] ?>">Edit</a>
		            	<a href="<?php echo "delete.php".'?id='.$value['id'] ?>">Delete</a>
		            </td>

		        </tr>
            <tr bgcolor="#DFE6EF">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
		        <?php $nomor++; ?>
            <?php } ?>

			<?php } ?>
			<?php echo "<br/><a href='header2.php'>kembali ke home</a>"; ?>

</table>
</body>
</html>
