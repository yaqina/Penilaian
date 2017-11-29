<?php
	error_reporting();
	include 'header.php';
?>
<html>
 <head>
  <title>mahasiswa</title>
 <style>
		table
		{
			background-color: #;
			border: 10px solid #CCCCCC;
			border-radius: 5px;
		}

		td 
		{
			padding: 10px;
		}

		body
		{
			color: #000000;
			font-size: 20px; 
			font-weight: normal;
			background-image: url("gallery_06.png");
			background-repeat: no-repeat;
			background-position: right top;
			margin-right: 1000px;
		}
		a 
		{
			text-decoration: none;
			color: red;
		}
		.t
		{
			border:0px solid;
			background-color:#;
			color: red;
		}
	
		
		.bor
		{
			border-bottom:1px solid #cccccc;
			
			color:white;
			border-radius:5px;

		}
		.td
		{
			background-color:#a55e0e;
			color:white;
			
		}
		.ho
		{
			border-radius:100px;
		}
		.ho:hover
		{
			
			background-color:#ff8000;
			color:white;
		}
	</style>
 </head>
 <body>
 <table align='center' >
	<tr>
		<td><font size='10px'>mahasiswa</font>
				<table align='right' class='ho'>
				<tr>
					<th><a href='madd.php'><font>add</font></a></th>
				</tr>
				</table>
		</td>
	</tr>
	<tr>
			<td>
			<?php
				include 'open.php';
			?>
			</td>
	</tr>

	<tr>
		<td>
					<table >
					<tr class='td'>
						<td class='bor'>no</td>
						<td class='bor'>nim</td>
						<td class='bor'>nama</td>
						<td class='bor'>alamat</td>
						<td class='bor'>no_telp</td>
						<td class='bor'>no_hp</td>
						<td class='bor'>hobi</td>
						<td class='bor'>jurusan</td>
						<td class='bor'>action</td>
					</tr>
					<?php
						 $q=mysql_query
						 ("SELECT k.id as id, k.nim as nim,k.nama as nama,k.alamat as alamat,k.no_telp as no_telp,k.no_hp as no_hp,k.hobi as hobi, s.jurusan as jurusan from jurusan s  ,mahasiswa k where k.id_jurusan=s.id ");
										
						while($ew=mysql_fetch_array($q))
						{
							$no++
					?>
					<tr>
						<td align='center'><b><?php echo $no?>.</b></td>
						<td align='center'><b><?php echo $ew['nim'];?></b></td>
						<td align='center'><b><?php echo $ew['nama'];?></b></td>
						<td align='center'><b><?php echo $ew['alamat'];?></b></td>
						<td align='center'><b><?php echo $ew['no_telp'];?></b></td>
						<td align='center'><b><?php echo $ew['no_hp'];?></b></td>
						<td align='center'><b><?php echo $ew['hobi'];?></b></td>
						<td align='center'><b><?php echo $ew['jurusan'];?></b></td>
						<td align='center'>	
							<b><a class='ho' href="medit.php?id=<?php echo $ew['id']?>">edit</a>//<b>
							<b><a class='ho' href="mdelete.php?id=<?php echo $ew['id']?>">hapus</a><b>
						</td>
					</tr>
					<?php
					  }
					?>
					</table>
	
		</td>
	</tr>
	
	</table>
 </body>
</html>
