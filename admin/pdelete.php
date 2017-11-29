
<?php
	include 'header.php';
	mysql_query("delete from penilaian where id ='".$_GET['id']."'");
	header('location:pview.php');	include 'cek.php';

?>