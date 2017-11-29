<?php
	error_reporting(0);
	include 'header.php';

if($_POST['simpan']<>"")
	{
		mysql_query("insert into fakultas set fakultas='".$_POST['fakultas']."'");
		header("location:fview.php");
	}

	include 'cek.php';
?>
<html lang="en">
 <head>
  <title>fakultas</title>
  <?php
  include '../assest/css/css.php';
  ?>
 </head>
 <body>
	<table>
	<form method='post' action='fadd.php'>
	<tr>
		<td>fakultas</td>
		<td><input type="text" name="fakultas"></td>
	</tr>
	<tr>
		<td><input type="submit" name="simpan" value='simpan' class='tombol'></td>
		<td align='right'><a href='fview.php' class='tombol'><font>kembali</font></a></td>
	</tr>
	</table>
  
 </body>
</html>
