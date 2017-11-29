<?php
error_reporting(0);
	include 'header.php';
include 'cek.php';
	if($_POST['edit']<>""){
		mysql_query("update jurusan set id_fakultas='".$_POST['id_fakultas']."',jurusan='".$_POST['jurusan']."' where id='".$_GET['id']."'");

		header('location:jview.php');
		
			

}
?>

<html>
    <head>
        <title>jurusan</title>
		  	 <?php
  include '../assest/css/css.php';
  ?>
    </head>
	
    
    <body>
	
        <table align='center'>
            <?php
				$q=mysql_query("select*from jurusan where id='".$_GET['id']."'");
				while($ew=mysql_fetch_array($q)){
            ?>
            <form method="post" action="jedit.php?id=<?php echo $_GET['id'];?>">
                
                <tr>
                    <td>jurusan</td>
                    <td><input type='text' name='jurusan' value='<?php echo $ew['jurusan'];?>'></td>
                </tr>
				
				<tr>
                    <td>fakultas</td>
                    <td>
                       <select name="id_fakultas">
						<option value="">
						<?php
							$q = @mysql_query("select * from fakultas");
							while ($eww = @mysql_fetch_array($q))
							{
						?>
						<option value="<?php echo $eww["id"];?>"
						<?php
							if ($eww["id"]==$ew["id_fakultas"])
							{
								echo "selected";
							}
						?>>
						<?php echo $eww["fakultas"];?>
						<?php
							}
						?>
					</select>
                    </td>
                </tr>
				
                
                 
                
                 
                
                <tr>
                    <Td>
                        <input type='submit' name='edit' value='Edit' class='tombol'>
						<td align='right'><a href='jview.php'class='tombol' ><font>kembali</font></a></td>
                    </Td>
                </tr>
                
        </table>
        <?php
            }
            ?>
    </body>
</html>