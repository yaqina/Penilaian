<?php
	include 'header.php';
	mysql_query("delete from jurusan where id ='".$_GET['id']."'");
	header('location:jview.php');
		include 'cek.php';

?>