<?php
  include 'connect.php';
  session_start();

$query4 = "SELECT DISTINCT(lama(".$_SESSION['nomor'].")) FROM transaksi_sewa";
  $queryy4 = $conn->query($query4)->fetchAll();
  foreach ((array)$queryy4 as $queryyy4) 
    $lamainap = $queryyy4[0];
  
  $query5 = "UPDATE transaksi_sewa SET lama_inap = '.$lamainap.' WHERE id_transaksi = '".$_SESSION['nomor']."'";
  $queryy5 = $conn->exec($query5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.5/dist/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="custom.css" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap-3.3.5/dist/js/bootstrap.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <a class="navbar-brand" href="index.php">HOME</a>
	</div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
        
		<li><a href="index.php">OUR WISMA</a></li>
		<li><a href="index.php">PESAN KAMAR</a></li>
        <li><a href="index/php">CEK TRANSAKSI</a></li>
       </ul>
    </div>
  </div>
</nav>
<br><br>

 <center>     	
 	<h1>UBAH PESANAN BERHASIL!!!</h1><br>
</center> 
<p align="middle"> Kembali ke <a href="index.php">HOME</a></p>

</body>