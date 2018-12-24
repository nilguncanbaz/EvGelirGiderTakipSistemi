<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title img=>Gelir & Gider Takip Sistemi - Kullanıcı</title>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../dashboard/assets/img/favicon.ico">
	<title>Gelir & Gider Takip Sistemi Kullanıcı Paneli</title>
	<meta content='width=<d></d>evice-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
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

               	<?php 
				session_start();
				if(!isset($_SESSION["ID"])) {
					echo'yönlendiriliyor..';
					header("location:../index.php");
				}
				else{
					include("kullanici-index.php");
				}
				
				?>
  
</body>
</html>