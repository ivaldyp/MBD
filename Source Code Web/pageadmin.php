<?php
  include 'connect.php';
  session_start();

  $query = "SELECT nama_petugas from petugas where id_petugas = '".$_SESSION['id_petugas']."'";
  $query2 = $conn->query($query)->fetchAll();
  foreach ((array)$query2 as $query3)
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
  <h1>
    <?php
      echo "Welcome Admin '".$query3[0]."'";
    ?>
  </h1>

  <table class="table table-striped">
    <tbody>
      <tr><td><center><a href="pageubahharga.php" class="btn btn-info">Ubah Harga Kamar</a></td></tr>
      <tr><td><center><a href="pagedaftartransaksi.php" class="btn btn-info">List Semua Penyewaan</a></td></tr>
      <tr><td><center><a href="pagerekomendasi.php" class="btn btn-info">Kamar Yang Direkomendasikan</a></td></tr>
      <tr><td><center><a href="pagehariini.php" class="btn btn-info">Check Out Hari Ini</a></td></tr>
    </tbody>
  </table>
 <br><br>
  
</center> 

</body>