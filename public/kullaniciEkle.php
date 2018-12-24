<?php   
	include "../database/dconfig.php";
	if(isset($_POST["kullaniciEkle"])){		
		$ad =$_POST["ad"];
		$soyad =$_POST["soyad"];
		$nick=$_POST["nick"];
		$ePosta =$_POST["ePosta"];
		$sifre =$_POST["sifre"];
						
		$query=$database_connection->query("INSERT INTO uyeler VALUES (NULL,'$ad','$nick', '$ePosta', '$sifre', '1')", PDO::FETCH_ASSOC);
		if($query->rowCount()){
			echo "Kullanıcı başarılı bir şekilde eklendi..";
			
		}								
	}

	?>
