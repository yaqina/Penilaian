<?php
	error_reporting(0);
	include 'header.php';
?>
<html>
 <head>
  <title>penilaian</title>
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
			border-bottom:1px solid #a55e0e;
			
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
		<td><font size='10px'>penilaian</font>
				<table align='right' class='ho'>
				<tr>
					<th><a href='padd.php'><font>add</font></a></th>
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
					<tr class='td '>
						<td class='bor'>no</td>
						<td class='bor'>mahasiswa</td>
						<td class='bor'>mapel</td>
						<td class='bor'>nilai</td>
						
						<td class='bor'>tanggal ujian</td>
						
						<td class='bor'>action</td>
					</tr>
					<?php
						 $q=mysql_query
						 ("SELECT p.id ,n.nama ,s.mapel,p.nilai  ,p.tgl_ujian  FROM penilaian p,mahasiswa n,mata_pelajaran s WHERE	n.id=p.id_mahasiswa AND s.id=p.id_mapel;");

							
						while($ew=mysql_fetch_array($q))
						{
							$no++

						
					?>
					<tr>
						<td align='center'><b><?php echo $no?>.</b></td>
						<td align='center'><b><?php echo $ew['nama'];?></b></td>
						<td align='center'><b><?php echo $ew['mapel'];?></b></td>
						<td align='center'><b><?php echo $ew['nilai'];?></b></td>
						
						<td align='center'><b><?php echo $ew['tgl_ujian'];?></b></td>
					
						<td align='center'>	
							<b><a class='ho' href="pedit.php?id=<?php echo $ew['id']?>">edit</a>//
							<b><a class='ho' href="pdelete.php?id=<?php echo $ew['id']?>">hapus</a>
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
