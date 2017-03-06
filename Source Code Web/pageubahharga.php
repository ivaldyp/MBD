<?php
  include 'connect.php';
  session_start();


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
    <a class="navbar-brand" href="pageadmin.php">ADMIN MENU</a>
	</div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php" style="color:red">LOG OUT</a></li>
       </ul>
    </div>
  </div>
</nav>
<br><br><br>

<center>  
  <form method="POST" action="phpubahharga.php">
    <h2>ID Jenis (lama)</h2>
    <input type="text" class="form-control" name="nokamarubah" maxlength="3" placeholder="No Kamar">
    <h2>Harga Kamar (baru)</h2>
    <input type="text" class="form-control" name="hargakamarubah" placeholder="Harga Kamar">
      <button type="submit" class="btn btn-info">OK</button>
    </div>
  </form>

  
</center> 

</body>