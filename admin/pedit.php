<?php
error_reporting(0);
	include 'header.php';
include 'cek.php';
	if($_POST['edit']<>""){
		mysql_query("update penilaian set id_mahasiswa='".$_POST['id_mahasiswa']."',id_mapel='".$_POST['id_mapel']."',nilai='".$_POST['nilai']."',tgl_ujian='".$_POST['tgl_ujian']."' where id='".$_GET['id']."'");

		header('location:pview.php');	

}
?>

<html>
    <head>
        <title>penilaian</title>
		  	 <?php
  include '../assest/css/css.php';
  ?>
    </head>
	
    
    <body>
	
        <table align='center'>
            <?php
				$q=mysql_query("select*from penilaian where id='".$_GET['id']."'");
				while($ew=mysql_fetch_array($q)){
            ?>
            <form method="post" action="pedit.php?id=<?php echo $_GET['id'];?>">
                
              
				
				<tr>
                    <td>nama</td>
                    <td>
                       <select name="id_mahasiswa">
						<option value="">
						<?php
							$q = @mysql_query("select * from mahasiswa");
							while ($eww = @mysql_fetch_array($q))
							{
						?>
						<option value="<?php echo $eww["id"];?>"
						<?php
							if ($eww["id"]==$ew["id_mahasiswa"])
							{
								echo "selected";
							}
						?>>
						<?php echo $eww["nama"];?>
						<?php
							}
						?>
					</select>
                    </td>
                </tr>
				      <td>mapel</td>
                    <td>
                       <select name="id_mapel">
						<option value="">
						<?php
							$q = @mysql_query("select * from mata_pelajaran");
							while ($eww = @mysql_fetch_array($q))
							{
						?>
						<option value="<?php echo $eww["id"];?>"
						<?php
							if ($eww["id"]==$ew["id_mapel"])
							{
								echo "selected";
							}
						?>>
						<?php echo $eww["mapel"];?>
						<?php
							}
						?>
					</select>
                    </td>
                </tr>
				  <tr>
                    <td>nilai</td>
                    <td><input type='number' max="100" name='nilai' value='<?php echo $ew['nilai'];?>'></td>
                </tr>
				 <tr>
                    <td>tanggal ujian</td>
                    <td><input type='date' name='tgl_ujian' value='<?php echo $ew['tgl_ujian'];?>'></td>
                </tr>
                
                 
                
                 
                
                <tr>
                    <Td>
                        <input type='submit' name='edit' value='Edit' class='tombol'>
						<td align='right'><a href='pview.php' class='tombol'><font>kembali</font></a></td>
                    </Td>
                </tr>
                
        </table>
        <?php
            }
            ?>
    </body>
</html>