<?php 
	
session_start();
	error_reporting(0);
	include 'header.php';
	include 'cek.php';
	?>
<head>
	  	<style>
	body
	{
		background-image: url("../assest/picture/gallery_06.png");
			background-repeat: no-repeat;
			background-position: right top;
			
	}
	.n
	{
		border:1px;
		padding:1px;
		border-radius:5px;s

	}
	.w
	{
		text-decoration:none;
		color: #555555;
		font-size: 15px; 
		font-weight: normal;
		
		border-radius: 5px;
		border-right:1px solid #cccccc;
		border-bottom:0px solid;
		border-top:0px solid;
		border-left:0px solid;
	}
		.t:hover
		{
			background-color:#ff8000;
			color:white;
		}
		
	</style>



</head>
<body>
<table class='n' width='100% '>
<tr >
<td>
	<table width='100%' class='w and t' >
					<tr>
						<td align='center'>
							<a href='fview.php'><font color='red'>fakultas</font</a>
						</td>
					</tr>
	</table>
</td>
<td>
	<table width='100%' class='w and t' >
			<tr>
						<td align='center'>
							<a href='jview.php'><font color='red'>jurusan</font</a>
						</td>
			</tr>
		</table>
	</td>
	<td>
	<table width='100%' class='w and t'>
			<tr>
						<td align='center'>
							<a href='mview.php'><font color='red'>mahasiswa</font</a>
						</td>
			</tr>
	</table >
	</td>
	<td>
	<table width='100%' class='w and t'>
		<tr>
						<td align='center'>
							<a href='mpview.php'><font color='red'>mata pelajaran</font</a>
						</td>
		</tr>
	</table >
	</td>
	<td>
	<table width='100%' class='w and t'>
		<tr>
						<td align='center'>
							<a href='pview.php'><font color='red'>penilaian</font></a>
						</td>
					</tr>
		</table>
		<td>
		<table width='100%' class='n and t'>
		<tr>
						<td align='center'>
							<a href='keluar.php'><font color='red'>logout</font></a>
						</td>
					</tr>
		</table>
		</td>
</td>
</tr>
	</table>

</body>