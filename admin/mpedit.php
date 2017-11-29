<?php
error_reporting(0);
	include 'header.php';
include 'cek.php';
	if($_POST['edit']<>""){
		mysql_query("update mata_pelajaran set id_jurusan='".$_POST['id_jurusan']."',mapel='".$_POST['mapel']."' where id='".$_GET['id']."'");

		header('location:mpview.php');	

}
?>

<html>
    <head>
        <title>mata pelajaran</title>
		  	 <?php
  include '../assest/css/css.php';
  ?>
    </head>
	
    
    <body>
	
        <table align='center'>
            <?php
				$q=mysql_query("select * from mata_pelajaran where id='".$_GET['id']."'");
				while($ew=mysql_fetch_array($q)){
            ?>
            <form method="post" action="mpedit.php?id=<?php echo $_GET['id'];?>">
                
                <tr>
                    <td>mapel</td>
                    <td><input type='text' name='mapel' value='<?php echo $ew['mapel'];?>'></td>
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
						<td align='right'><a href='mpview.php' class='tombol'><font>kembali</font></a></td>
                    </Td>
                </tr>
                
        </table>
        <?php
            }
            ?>
    </body>
</html>