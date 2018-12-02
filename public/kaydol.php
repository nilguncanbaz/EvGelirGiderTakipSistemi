<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css"  href="../css/style.css">
	<title>EHGGTS- Kayıt</title>
</head>
<body>
<center>
		
	<h3 class="icerik">Ev-Hane Gelir Gider Takip Sistemi - Kayıt</h2>
	<form method= "POST" action="" name="frm2">
		<div class="icerik">
		
		
		Ad* : <input type="text" class="kutu" name="ad" required> </br>
		Soyad* : <input type="text" class="kutu" name="soyad" required> </br>
		Nick* :  <input type="text" class="kutu" name="nick" required> </br>
		E-Posta* : <input type="email" class="kutu" name="eposta" required> </br>
		Şifre* : <input type="password" class="kutu" name="sifre" required> </br>
		<input id="kayitID" class="buton-class" type="submit" name="kayit" value="KAYIT"></br>	

		</div>
		
	</form>
	
	
	<?php session_start();
		include "../database/dconfig.php";
	  	if(isset($_POST["kayit"])){
			$ad =$_POST["ad"];
			$soyad =$_POST["soyad"];
			$nick=$_POST["nick"];
			$eposta =$_POST["eposta"];
			$sifre =$_POST["sifre"];
			
				$query= $database_connection->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
				/*{
					foreach ($query as $row) {
						if($nick==$row['nick']){
							echo "Başka bir nick giriniz..";
							header("location:kaydol.php");
						}
						if($eposta==$row['eposta']){
							echo "Başka bir e-posta giriniz..";
							header("location:kaydol.php");
						}
						
					}
				}
				$query2=$database_connection->query("SELECT * FROM aileler", PDO::FETCH_ASSOC);
				if($query2->rowCount()){
					foreach ($query2 as $row){
						if($soyad==$row['baslik']){
							$aileID=row['id'];
							break;
						}
						else{
							$database_connection->query("INSERT INTO aileler(id,baslik) VALUES(NULL,'$soyad')", PDO::FETCH_ASSOC);
							//$aileID=row['id'];
						}
					}
				}
				*/
				$query3=$database_connection->query("INSERT INTO uyeler VALUES (NULL, '1', '$nick', '$eposta', '$sifre', '0')", PDO::FETCH_ASSOC);
				if($query3->rowCount()){
					echo "Kayıt başarılı..";
			
				
					if($query->rowCount()){
						foreach ($query as $row) {
								$_SESSION["nick"]=$row['nick'];
								$_SESSION["ID"]=$row["id"];
								header("location:giris-kullanici.php");
						}
					}
					
				}
			
			
		
		}

	?>

</body>
</html>