<?php 
	session_start();
	if(!isset($_SESSION["nick"])) {
		echo'yönlendiriliyor..';
		header("location:../../index.php");
	}
?>

<!doctype html>
<html lang="tr">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../../dashboard/assets/img/favicon.ico">
	<title>Gelir & Gider Takip Sistemi Kullanıcı Paneli</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="../../dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../dashboard/assets/css/animate.min.css" rel="stylesheet"/>
    <link href="../../dashboard/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="../../dashboard/assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../../dashboard/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="../../dashboard/assets/img/sidebar-4.jpg">


    	<div class="sidebar-wrapper">
            <div class="logo">
                <div class="simple-text">
                    <a href="../giris-kullanici.php">Gelir & Gider Takip Sistemi</a>
                </div>
            </div>

            <ul class="nav">
               
                <li >
                    <a href="gelir.php">
                        <i class="pe-7s-note"></i>
                        <p>Gelir Ekle</p>
                    </a>
                </li>
                <li class="active">
                    <a href="gider.php">
                        <i class="pe-7s-note"></i>
                        <p>Gider Ekle</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    
					
                    <div class="navbar-brand"> <?php echo "Hoş Geldin, ".$_SESSION["nick"]?></div>
                </div>
                <div class="collapse navbar-collapse">
                    

                     <ul class="nav navbar-nav navbar-right">
                          <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Gelir & Gider Takip Listesi
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="gunlukTakip.php">Günlük Takip</a></li>
                                <li><a href="haftalikTakip.php">Haftalık Takip</a></li>              
                                <li><a href="aylikTakip.php">Aylık Takip</a></li>              
                                
                              </ul>

                        </li>
                        <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Listeleme & Silme İşlemleri
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="gelirListele.php">Gelir Listele & Sil</a></li>
                                <li><a href="giderListele.php">Gider Listele & Sil</a></li>             
                                
                              </ul>
                        </li>
                        <li>
                             
							<?php 							
							echo '<a href="../exit.php"><p>ÇIKIŞ</p></a>';
							?>
                            
                        </li>
						
                    </ul>
                </div>
            </div>
        </nav>


        
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Gider Ekle</h4>
                            </div>
                            <div class="content">
                                <form method= "POST" action ="" name="frm4" >
                                    <div class="row">
									<div class="col-md-4">
                                            <div class="form-group">
                                                <label >Başlık </label>
                                                <input type="text" name= "baslik" class="form-control" placeholder="Başlık" required>
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label >Açıklama</label>
                                                <input type="text" name= "aciklama" class="form-control" placeholder="Açıklama" required>
                                            </div>
                                        </div>
                                        
                                        
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gider Türü</label><br>
												<?php
												include "../../database/dconfig.php";
												$queryy = $database_connection->query("SELECT * FROM turler", PDO::FETCH_ASSOC);
												if($queryy->rowCount()){
													foreach ($queryy as $row) {
														
														echo "	<input type='radio' name='tur' value='".$row['id']."'><label>". $row['baslik']."</label>";
													}
										
												}
												
												?>
                                                
                                            </div>
                                        </div>
										<div class="col-md-3">
                                            <div class="form-group">
                                                <label>Gider Tutarı</label>
                                                <input type="text" name= "gider" class="form-control" placeholder="Gelir Tutarı" value="" required >
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tarih </label>
                                                <input type="date" name= "tarih" class="form-control" placeholder="Tarih" required>
                                            </div>
                                        </div>
                                       
										
                                    </div>
								

                                    
									

                                    

                                    <button type="submit" name="giderEkle" class="btn btn-info btn-fill pull-right">Gider Ekle</button>
                                    <div class="clearfix"> 
									
									</div>
                                </form>
								 <?php 
								 
								 include "../../database/dconfig.php";
									if(isset($_POST['giderEkle'])){
										$gider=$_POST["gider"];
										$tarih=$_POST["tarih"];
										$aciklama=$_POST["aciklama"];
										$baslik=$_POST["baslik"];
										$uyeid=$_SESSION["ID"];
										$tur=$_POST["tur"];
										
										
										$query=$database_connection->query("INSERT INTO giderler VALUES (NULL,'$uyeid', '$baslik','$aciklama', '$tur','$gider', '$tarih')", PDO::FETCH_ASSOC);
										if($query->rowCount()){
											echo "Kayıt başarılı..";
						
										}
									}
								  ?>
                            </div>
                        </div>
                    </div>
                   
                             
                </div>
            </div>

        </div>
    </div>
</div>
</body>
    <script src="../../dashboard/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../../dashboard/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../../dashboard/assets/js/chartist.min.js"></script>
    <script src="../../dashboard/assets/js/bootstrap-notify.js"></script>
    <script type="../../dashboard/text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="../../dashboard/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="../../dashboard/assets/js/demo.js"></script>

</html>
