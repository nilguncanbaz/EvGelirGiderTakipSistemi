<!DOCTYPE html>
<html lang="tr">
<head>
	
	<title>Ev-Hane Gelir & Gider Takip Sistemi</title>
	<link rel="stylesheet" type="text/css"  href="css/style.css">
	<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
	<link rel="icon" type="image/png" href="dashboard/assets/img/favicon.ico">
</head>
<body>
	   <form method= "POST" action ="" name="frm1">
		   <center></br></br>
		   <div id="baslik-div">
		   
		   <h2 class="baslik1">Ev-Hane Gelir & Gider </br> Takip Sistemi </h2>

		   </div>
		   <div id="giris-div" >
		   
				Kullanıcı Adı : <input type="nick" class="kutu" name="nick" required > 
				Şifre : <input type="password" class="kutu" name="sifre" required >
				<input id="girisID" class="buton-class" type="submit" name="giris" value="GİRİŞ"></br>	
		  </div>

		  <div id="href-div" >
		  <a href="public/kaydol.php">Burada yeni misin ? <b>Hemen Kaydol. </b></a>
		  </div>
		  <div id="footer">
			<center>
			Ev-Hane Gelir & Gider Takip Sistemi &copy 2018;
			</center>
		  
		  </div>
	 
      </form>
	  
	  <?php
	  include "index-devam.php";
	  ?>
	  </body>
</html>

