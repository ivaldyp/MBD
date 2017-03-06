<?php
	include 'connect.php';
	session_start();
	$nomor = $_SESSION['nomor'];
	$query = "SELECT * from transaksi_sewa WHERE status = 0 ORDER BY tgl_checkout";
	$query2 = $conn->query($query)->fetchAll();

	
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
          <th>Tanggal Check In</th>
          <th>Tanggal Check Out</th>
          <th>Lama Inap</th>
        </tr>
      </thead>
      <tbody>
          <?php
            foreach ((array)$query2 as $query3) {
              echo "<tr>";

              echo "<td>";
              echo "$query3[0]";
              echo "</td>";

              echo "<td>";
              echo "$query3[3]";
              echo "</td>";

              $query4 = "SELECT nama_tamu from tamu where id_tamu = '".$query3[3]."'";
			  $query5 = $conn->query($query4)->fetchAll();
			  foreach ((array)$query5 as $query6)

              echo "<td>";
              echo "$query6[0]";
              echo "</td>";

              echo "<td>";
              echo "$query3[2]";
              echo "</td>";

              echo "<td>";
              echo "$query3[4]";
              echo "</td>";

              echo "<td>";
              echo "$query3[5]";
              echo "</td>";

              echo "<td>";
              echo "$query3[6] ";
              echo "hari";
              echo "</td>";

              echo "</tr>";
            }
          ?>
      </tbody>
    </table>
    <?php
      // if ($query3[8] == 1)
      // {
      //   echo "Transaksi sudah tidak dapat diubah";
      // }
      // elseif ($query3[8] == 0)
      // {
      //   echo "<a href='pageubahwisma.php'><button class='btn' data-toggle='modal' data-target='#myModal'>Ubah tanggal atau kamar</button></a>";
      //   echo " ";
      //   echo "<a href='pagehapuswisma.php'><button class='btn' data-toggle='modal' data-target='#myModal'>Batalkan pesanan</button></a>";
      // }
    ?>
   <!--  <a href="pageubahwisma.php"><button class="btn" data-toggle="modal" data-target="#myModal">Ubah tanggal atau kamar</button></a>
    <a href="pagehapuswisma.php"><button class="btn" data-toggle="modal" data-target="#myModal">Batalkan pesanan</button></a>
 -->  </div>

</body>