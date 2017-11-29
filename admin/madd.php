<?php
	error_reporting(0);
include 'header.php';
include 'cek.php';
if ($_POST["simpan"]<>"")
{
	$qry_insert="insert into mahasiswa (nim,id_jurusan,nama,alamat,no_telp,no_hp,hobi)
	values('".$_POST["nim"]."','".$_POST["id_jurusan"]."','".$_POST["nama"]."','".$_POST["alamat"]."','".$_POST["no_telp"]."','".$_POST["no_hp"]."','".$_POST["hobi"]."')";
	$insert= mysql_query($qry_insert) or die (mysql_error());
	header("location:mview.php");
		

}
?>

<html>
<head>
	<title>mahasiswa</title>
	 <?php
  include '../assest/css/css.php';
  ?>
</head>
<body>
		<table>
			<form method="post">
				<tr>
					<td>nim</td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td>nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>no_telp</td>
					<td><input type="text" name="no_telp"></td>
				</tr>
				<tr>
					<td>no_hp</td>
					<td><input type="text" name="no_hp"></td>
				</tr>
				<tr>
					<td>hobi</td>
					<td><input type="text" name="hobi"></td>
				</tr>
				<tr>
				<td>JURUSAN</td>
					<td>
						<select name="id_jurusan">
							<option value="">PILIH
								<?php
									$q_jurusan = mysql_query("select * from jurusan");
									while ($d_jurusan = mysql_fetch_array($q_jurusan))
									{
										?>
										<option value="<?php echo $d_jurusan["id"];?>"><?php echo $d_jurusan["jurusan"];?>
											<?php
									}
									?>
						
						</select>
				<tr>
					<td><input type="submit" name="simpan" value="SIMPAN" class='tombol'></td>
					<td align='right'><a href='mview.php' class='tombol'><font>kembali</font></a></td>
				</tr>
			</form>
		</table>
</body>
</html>