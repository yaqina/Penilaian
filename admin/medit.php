<?php
error_reporting(0);
	include 'header.php';
include 'cek.php';
	if($_POST['edit']<>""){
		mysql_query("update mahasiswa set id_jurusan='".$_POST['id_jurusan']."',nim='".$_POST['nim']."',nama='".$_POST['nama']."',alamat='".$_POST['alamat']."',no_telp='".$_POST['no_telp']."',no_hp='".$_POST['no_hp']."',hobi='".$_POST['hobi']."' where id='".$_GET['id']."'");

		header('location:mview.php');
			

}
?>

<html>
    <head>
        <title>mahasiswa</title>
        <?php
		  include '../assest/css/css.php';
		 ?>
    </head>
	
    
    <body>
	
        <table align='center'>
            <?php
				$q=mysql_query("select * from mahasiswa where id='".$_GET['id']."'");
				while($ew=mysql_fetch_array($q)){
            ?>
            <form method="post" action="medit.php?id=<?php echo $_GET['id'];?>">
                
                <tr>
                    <td>nim</td>
                    <td><input type='text' name='nim' value='<?php echo $ew['nim'];?>'></td>
                </tr>
				  <tr>
                    <td>nama</td>
                    <td><input type='text' name='nama' value='<?php echo $ew['nama'];?>'></td>
                </tr>
				  <tr>
                    <td>alamat</td>
                    <td><input type='text' name='alamat' value='<?php echo $ew['alamat'];?>'></td>
                </tr>
				  <tr>
                    <td>no_telp</td>
                    <td><input type='text' name='no_telp' value='<?php echo $ew['no_telp'];?>'></td>
                </tr>
				  <tr>
                    <td>no_hp</td>
                    <td><input type='text' name='no_hp' value='<?php echo $ew['no_hp'];?>'></td>
                </tr>
				  <tr>
                    <td>hobi</td>
                    <td><input type='text' name='hobi' value='<?php echo $ew['hobi'];?>'></td>
                </tr>
				
				<tr>
                    <td>jurusan</td>
                    <td>
                       <select name="id_jurusan">
						<option value="">
						<?php
							$q = @mysql_query("select * from jurusan");
							while ($eww = @mysql_fetch_array($q))
							{
						?>
						<option value="<?php echo $eww["id"];?>"
						<?php
							if ($eww["id"]==$ew["id_jurusan"])
							{
								echo "selected";
							}
						?>>
						<?php echo $eww["jurusan"];?>
						<?php
							}
						?>
					</select>
                    </td>
                </tr>
				
                
                 
                
                 
                
                <tr>
                    <Td>
                        <input type='submit' name='edit' value='Edit' class='tombol'>
						<td align='right'><a href='mview.php' class='tombol'><font>kembali</font></a></td>
                    </Td>
                </tr>
                
        </table>
        <?php
            }
            ?>
    </body>
</html>