<?php 

		include "../database/dconfig.php";
	  	if(isset($_POST["kategoriEkle"])){
			$kategoriad =$_POST["kategoriad"];
			
				$query=$database_connection->query("INSERT INTO turler VALUES (NULL,'$kategoriad')", PDO::FETCH_ASSOC);
				if($query->rowCount()){
					echo "Kategori başarılı bir şekilde eklendi..";
		
					
				}
			
			
		
		}

	?>
