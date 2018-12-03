<?php 
	
	if(!isset($_SESSION["ID"])) {
		echo'yönlendiriliyor..';
		header("location:../index.php");
	}
?>

<!doctype html>
<html lang="tr">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../dashboard/assets/img/favicon.ico">
	<title>Gelir & Gider Takip Sistemi Admin Paneli</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="../dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../dashboard/assets/css/animate.min.css" rel="stylesheet"/>
    <link href="../dashboard/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="../dashboard/assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../dashboard/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="../dashboard/assets/img/sidebar-4.jpg">


    	<div class="sidebar-wrapper">
            <div class="logo">
                <div class="simple-text">
                    Gelir & Gider Takip Sistemi
                </div>
            </div>

            <ul class="nav">
               
                <li>
                    <a href="#">
                        <i class="pe-7s-user"></i>
                        <p>Gelir Ekle</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-note2"></i>
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
                    
					
                    <div class="navbar-brand"> <?php echo "Hoş Geldin, ".$_SESSION["Ad"]?></div>
                </div>
                <div class="collapse navbar-collapse">
                    

                     <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Listeleme & Silme İşlemleri
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Gelir Listele & Sil</a></li>
                                <li><a href="#">Gider Listele & Sil</a></li>             
                                
                              </ul>
                        </li>
                        <li>
                             
							<?php 							
							echo '<a href="exit.php"><p>ÇIKIŞ</p></a>';
							?>
                            
                        </li>
						
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
           
        </div>
    </div>
</div>
</body>
    <script src="../dashboard/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../dashboard/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../dashboard/assets/js/chartist.min.js"></script>
    <script src="../dashboard/assets/js/bootstrap-notify.js"></script>
    <script type="../dashboard/text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="../dashboard/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="../dashboard/assets/js/demo.js"></script>

</html>
