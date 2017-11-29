<?php
	include 'header.php';
	error_reporting(0);
	if($_POST['edit']<>""){
		mysql_query("update fakultas set fakultas='".$_POST['fakultas']."' where id='".$_GET['id']."'	");
		header('location:fview.php');
	}
	include 'cek.php';
?>

<html>
	<head>
		<title>fakultas</title>
	 <?php
  include '../assest/css/css.php';
  ?>
	</head>
	<body>
		<table>
		<?php
			$q=mysql_query("select * from fakultas where id='".$_GET['id']."'	");
			while($ew=mysql_fetch_array($q)){
		?>
		<form method='post' action='fedit.php?id=<?php echo $_GET['id'];?>'>
		<tr>
			<td>fakultas</td>
			<td><input type="text" name="fakultas" value='<?php echo $ew['fakultas'];?>'></td>
		</tr>
		<tr>
			<td><input type="submit" name='edit' value='edit' class='tombol'></td>
			<td align='right'><a href='fview.php' class='tombol'><font>kembali</font></a></td>
		</tr>
		</table>
		<?php
			}
		?>
	</body>
</html>