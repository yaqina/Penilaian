<?php
	include 'header.php';
	mysql_query("delete from mata_pelajaran where id ='".$_GET['id']."'");
	header('location:mpview.php');	include 'cek.php';

?>