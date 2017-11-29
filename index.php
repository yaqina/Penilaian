<?php
	error_reporting();
	include 'admin/header.php';
	
	?>
	
<html>
<head>
	<title>login</title>
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
			color: #555555;
			font-size: 20px; 
			font-weight: normal;
			background-image: url("assest/picture/gallery_06.png");
			background-repeat: no-repeat;
			background-position: right top;
			margin-right: 1000px;
		}
		a 
		{
			text-decoration: none;
			color: red;
		}
		
	</style>
	
</head>
<body>	
	
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "  Login Gagal !! Username dan Password Salah !!";
			}
		}
		?>
		
			<form action="c.php" method="post"><br><br><br><br><br>
			<table align='center'>
			<tr>
				<td colspan='2'>
				
					<h3 align='center'>SILAHKAN LOGIN</h3>
				</td>
			</tr>
					
						<tr>
						<td>
						<input type="text" class="form-control" placeholder="Username" name="uname">
						</td>
						
					
						
						<td>
						<input type="password" class="form-control" placeholder="Password" name="pass">
						</td>
						</tr>
						
					<br>
						<tr>
						<td colspan='2' align='right'>
						<input type="submit" class="btn btn-primary" value="Login" >
						</td>
						</tr>
			</table>
					
			</form>
		
</body>
</html>