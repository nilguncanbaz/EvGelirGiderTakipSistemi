<?php 
	session_start();
	if(!isset($_SESSION["ID"])) {
		echo'yönlendiriliyor..';
		header("location:../index.php");
	}
?>

<!doctype html>
<html lang="tr">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<title>Gelir & Gider Takip Sistemi Admin Paneli</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css"  href="assets/css/style.css">
	
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="" data-image="assets/img/sidebar-4.jpg">


    	<div class="sidebar-wrapper">
            <div class="logo">
                <div class="simple-text">
                    Gelir & Gider Takip Sistemi Admin Paneli
                </div>
            </div>

            <ul class="nav">
               
                <li class="active">
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>Kullanıcı Ekle</p>
                    </a>
                </li>
                <li>
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Kategori Ekle</p>
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
                                <li><a href="kullaniciSil.php">Kullanıcı Listele & Sil</a></li>
                                <li><a href="kategoriSil.php">Kategori Listele & Sil</a></li>             
                                
                              </ul>
                        </li>
                        <li>
                             
							<?php 							
							echo '<a href="../public/exit.php"><p>ÇIKIŞ</p></a>';
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
                                <h4 class="title">Kullanıcı Listesi</h4>
                            </div>
                            <div class="content">
                                <form method= "POST" action ="" name="frm3" >
                               
									
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<table style="width:100%" border ="3px" >
														<thead>
															<tr>
															<th>ID</th>
															<th>Kullanıcı Adı</th> 
															<th>İşlem</th>
													
															</tr>
														</thead>
														<tbody>
														<?php 
														include "../database/dconfig.php";
															$query= $database_connection->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
															if($query->rowCount()){
																foreach ($query as $row) {
																	
																		
																		echo "<tr>" ;
																		echo"<td>".$row['id']."</td>";
																		echo"<td>".$row['nick']."</td>";
																		echo"<td>"." <input id='silID' class='buton-class' type='submit' name='sil' value='Sil'></br>"."</td>";
																		echo "</tr>";
																	  
																	
																}
															}
														?>
														  
														  
													  </tbody>
													</table>
													
												</div>
											</div>
										</div>										
   
									</div>

                                    

                                    
                                </form>
								
                            </div>
                        </div>
                    </div>
                   
                             
                </div>
            </div>

        </div>
    </div>
</div>
</body>
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="assets/js/demo.js"></script>

</html>
