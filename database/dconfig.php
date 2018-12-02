<?php
	  
		$server="localhost";
		$kullaniciAdi="root";
		$sifre = "";


			try{
				$database_connection = new PDO("mysql:host=$server;dbname=ev-gelir-gider;charset=utf8",$kullaniciAdi,$sifre);
				$database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo" Baglanti basarili..";
			}catch(PDOException $e){

				echo $e->getMessage();
			}
	
?>


