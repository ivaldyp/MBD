<?php
	include 'connect.php';
	session_start();

	$query = "CALL ubah_status ('".$_SESSION['pilih']."', '".$_SESSION['denda']."')";
	$query2 = $conn->exec($query);

	$query3 = "SELECT * from transaksi_sewa where id_transaksi = '".$_SESSION['pilih']."'";
	$query4 = $conn->query($query3)->fetchAll();
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

  <div class="container text-center">
  	<table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID Transaksi</th>
          <th>ID Tamu</th>
          <th>Nama Tamu</th>
          <th>Nomor Kamar</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
          <?php
            foreach ((array)$query4 as $query5) {
              echo "<tr>";

              echo "<td>";
              echo "$query5[0]";
              echo "</td>";

              echo "<td>";
              echo "$query5[3]";
              echo "</td>";

              $query6 = "SELECT nama_tamu from tamu where id_tamu = '".$query5[3]."'";
			  $query7 = $conn->query($query6)->fetchAll();
			  foreach ((array)$query7 as $query8)

              echo "<td>";
              echo "$query8[0]";
              echo "</td>";

              echo "<td>";
              echo "$query5[2]";
              echo "</td>";

              // echo "<td>";
              // echo "";
              // echo "</td>";

              echo "<td>";
              echo $_SESSION['denda'];
              echo "</td>";

              echo "</tr>";
            }
          ?>
      </tbody>
    </table>
     <h2>Kembali ke <a href="pageadmin.php">HOME</a></h2>
    </div>

</body>