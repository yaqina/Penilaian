<?php
	error_reporting(0);
	include 'header.php';
if($_POST['simpan']<>"")
	{
		mysql_query("insert into jurusan set jurusan='".$_POST['jurusan']."',id_fakultas='".$_POST['id_fakultas']."'");
		header("location:jview.php");
	}
		include 'cek.php';

?>
<html lang="en">
 <head>
  <title>jurusan</title>
  <?php
  include '../assest/css/css.php';
  ?>
 </head>
 <body>
	<table>
	<form method='post' action='jadd.php'>
	<tr>
		<td>jurusan</td>
		<td><input type="text" name="jurusan"></td>
	</tr>
	<tr>
		<td>fakultas</td>
		<td><select name="id_fakultas">
			<option>pilih
			<?php
				$q=mysql_query("select * from fakultas");
				while($ew=mysql_fetch_array($q))
				{
			?>
			<option value="<?php echo $ew['id'];?>"><?php echo $ew['fakultas'];?>
			<?php
				}
			?>
		</select></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan" value='simpan' class='tombol'></td>
		<td align='right'><a href='jview.php' class='tombol'><font>kembali</font></a></td>
	</tr>
	</table>
  
 </body>
</html>
