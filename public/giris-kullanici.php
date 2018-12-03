<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title img=>Gelir & Gider Takip Sistemi - Kullanıcı</title>
</head>
<body>

               	<?php 
				session_start();
				if(!isset($_SESSION["ID"])) {
					echo'yönlendiriliyor..';
					header("location:../index.php");
				}
				else{
					include("kullanici-index.php");
				}
				
				?>
  
</body>
</html>