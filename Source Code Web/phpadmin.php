<?php
	include 'connect.php';
	session_start();

	$uname = $_POST['username'];
	$upass = $_POST['password'];

	$query = "SELECT uname_p, pass_p, id_petugas FROM petugas";
	$query2 = $conn->query($query)->fetchAll();

	$flag = 0;
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
  <?php
    foreach ((array)$query2 as $query3) {
		if($query3[0] == $uname && $query3[1] == $upass)
		{
			$flag = 1;
			$_SESSION['id_petugas'] = $query3[2];
			echo "<h1>Login Berhasil</h1>";
			echo "<h3>redirecting . . .</h3>";
			header("refresh:3; URL=pageadmin.php");

		}
	}
	if($flag = 0){
		echo "<h1>Username atau Password salah</h1>";
	echo "Kembali ke <a href='admin.php'>HOME</a>";
	}
  ?>
</center> 

</body>