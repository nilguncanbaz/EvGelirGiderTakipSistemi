<?php
	session_start();
	
	include "./database/dconfig.php";
	  		if(isset($_POST["giris"])){
				$nick =$_POST["nick"];
				$sifre =$_POST["sifre"];
				
				// print $kAdi.' '.$sifre;
				$query= $database_connection->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
				if($query->rowCount()){
					foreach ($query as $row) {
						if($sifre==$row['sifre']&&$nick==$row['nick']){
							if($row['yetki']==0){
							
							$_SESSION["nick"]=$row["nick"];
							$_SESSION["Ad"]=$row["Ad"];
							$_SESSION["ID"]=$row["id"];
							header("location:public/giris-kullanici.php");
							}
							else {
							 
							  $_SESSION["nick"]=$row["nick"];
							  $_SESSION["Ad"]=$row["Ad"];
							  $_SESSION["ID"]=$row["id"];
							  header("location:dashboard/user.php");

							}
						  }
						
					}
				}
			
			}
			
?>