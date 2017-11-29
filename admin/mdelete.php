<?php
	include 'header.php';
	mysql_query("delete from mahasiswa where id ='".$_GET['id']."'");
	header('location:mview.php');	include 'cek.php';

?>