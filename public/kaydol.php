<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css"  href="../css/style.css">
	<link href="../dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../dashboard/assets/css/animate.min.css" rel="stylesheet"/>
    <link href="../dashboard/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="../dashboard/assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../dashboard/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<title>Kayıt</title>
</head>
<body >

	<h3 class="icerik" >Ev-Hane Gelir Gider Takip Sistemi - Kayıt</h3> 
                 
                        <div class="icerik" >
                            
                                <h4 class="title">Kullanıcı Ekle</h4>
                            
                            
                                <form method= "POST" action ="" name="frm1" >
								
									<div class="row">
                                        <div class="col-md-3">
                                           
                                                <label>Ad</label>
                                                <input type="text" name="ad" class="form-control" placeholder="Ad" value="" required>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            
                                                <label>Soyad</label>
                                                <input type="text" name="soyad" class="form-control" placeholder="Soyad" value="" required>
                                            
                                        </div>
                                    </div>
								
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                           
                                                <label>Nick </label>
                                                <input type="text" name= "nick" class="form-control" placeholder="Kullanıcı Adı" value="" required >
                                            
                                        </div>
                                        <div class="col-md-3">
                                            
                                                <label for="exampleInputEmail1">E-Posta </label>
                                                <input type="email" name= "eposta" class="form-control" placeholder="E-Posta" required>
                                            
                                        </div>
										<div class="col-md-3">
                                           
                                                <label>Şifre</label>
                                                <input type="password" name= "sifre" class="form-control" placeholder="Şifre" value="" required>
                                          
										</div>
                                    </div>

                          

                                    <button type="submit" name="kayit" class="btn btn-fill">Kullanıcı Ekle</button>
                                   
                                </form>
								 
                            </div>

		
	<div id="href-div" >
		  <a href="../index.php">GİRİŞ'e dön.</a>
	</div>
	
	
	<?php
	
		include "../database/dconfig.php";
	  	if(isset($_POST["kayit"])){
			$ad =$_POST["ad"];
			$soyad =$_POST["soyad"];
			$nick=$_POST["nick"];
			$eposta =$_POST["eposta"];
			$sifre =$_POST["sifre"];
			
				/*$query= $database_connection->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
				{
					foreach ($query as $row) {
						if($nick==$row['nick']){
							echo "Başka bir nick giriniz..";
							header("location:kaydol.php");
						}
						else if($eposta==$row['eposta']){
							echo "Başka bir e-posta giriniz..";
							header("location:kaydol.php");
						}
						
					}
				}
			
				*/
				$query3=$database_connection->query("INSERT INTO uyeler VALUES (NULL, '$ad', '$nick', '$eposta', '$sifre', '0')", PDO::FETCH_ASSOC);
				if($query3->rowCount()){
					echo "Kayıt başarılı..";
						
				}

		}

	?>

</body>
</html>