<?php
	include 'header.php';

	mysql_query("delete from fakultas where id ='".$_GET['id']."'");
	header('location:fview.php');
	include 'cek.php';
?>