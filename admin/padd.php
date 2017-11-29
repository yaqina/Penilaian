<?php
	error_reporting(0);
	include 'header.php';
	include 'cek.php';

if($_POST['simpan']<>"")
	{
		mysql_query("insert into penilaian set id_mahasiswa='".$_POST['id_mahasiswa']."',id_mapel='".$_POST['id_mapel']."',nilai='".$_POST['nilai']."',tgl_ujian='".$_POST['tgl_ujian']."'");
		header("location:pview.php");


	}
?>
<html lang="en">
 <head>
  <title>penilaian</title>
  <?php
  include '../assest/css/css.php';
  ?>
 </head>
 <body>
	<table>
	<form method='post' action='padd.php'>
	
	<tr>
		<td>nama</td>
		<td><select name="id_mahasiswa">
			<option>pilih
			<?php
				$q=mysql_query("select * from mahasiswa");
				while($ew=mysql_fetch_array($q))
				{
			?>
			<option value="<?php echo $ew['id'];?>"><?php echo $ew['nama'];?>
			<?php
				}
			?>
		</select></td>
	</tr>
	<tr>
		<td>mapel</td>
		<td><select name="id_mapel">
			<option>pilih
			<?php
				$q=mysql_query("select * from mata_pelajaran");
				while($ew=mysql_fetch_array($q))
				{
			?>
			<option value="<?php echo $ew['id'];?>"><?php echo $ew['mapel'];?>
			<?php
				}
			?>
		</select></td>
	</tr>
	<tr>
		<td>nilai</td>
		<td><input type="number" max="100" name="nilai"></td>
	</tr>
	<tr>
		<td>tanggal ujian</td>
		<td><input type="date" name="tgl_ujian"></td>
	</tr>
	<tr>
		<td><input type="submit" name="simpan" value='simpan' class='tombol'></td>
		<td align='right'><a href='pview.php' class='tombol'><font>kembali</font></a></td>
	</tr>
	</table>
  
 </body>
</html>
