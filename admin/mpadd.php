<?php
	error_reporting(0);
	include 'header.php';
if($_POST['mmm']<>"")
	{
		mysql_query("insert into mata_pelajaran set mapel='".$_POST['mapel']."','".$_POST['id_jurusan']."'");
		header("location:mpview.php");
	}

	include 'cek.php';
?>
<html lang="en">
 <head>
  <title>mata pelajaran</title>
   <?php
  include '../assest/css/css.php';
  ?>
 </head>
 <body>
	<table>
	<form method='post' action='mpadd.php'>
	<tr>
		<td>mapel</td>
		<td><input type="text" name="mapel"></td>
	</tr>
	<tr>
		<td>jurusan</td>
		<td><select name="id_jurusan">
			<option>pilih
			<?php
				$q=mysql_query("select * from jurusan");
				while($ew=mysql_fetch_array($q))
				{
			?>
			<option value="<?php echo $ew['id'];?>"><?php echo $ew['jurusan'];?>
			<?php
				}
			?>
		</select></td>
	</tr>
	<tr>
		<td><input type="submit" name="mmm" value='simpan' class='tombol'></td>
		<td align='right'><a href='mpview.php' class='tombol'><font>kembali</font></a></td>
	</tr>
	</table>
  
 </body>
</html>
