<?PHP

include "connect.php";
session_start();
$tgl_checkin = $_SESSION['ubahcheckin'];
$tgl_checkout = $_SESSION['ubahcheckout'];

$query1 = "SELECT no_kamar as KAMAR
from kamar
WHERE no_kamar not in (select no_kamar
                       from transaksi_sewa
                       where status != 1
                       and id_transaksi in (select id_transaksi
                                              from transaksi_sewa
                                              where (tgl_checkin in '".$tgl_checkin."' and tgl_checkout not in '".$tgl_checkin."')
                                              or (tgl_checkin not in '".$tgl_checkout."' and tgl_checkout in '".$tgl_checkout."')
                                              or (tgl_checkin > '".$tgl_checkin."' and tgl_checkout < '".$tgl_checkout."')
                                              or (tgl_checkin < '".$tgl_checkin."' and (tgl_checkout < '".$tgl_checkout."' and tgl_checkout > '".$tgl_checkin."'))
                                              or ((tgl_checkin > '".$tgl_checkin."' and tgl_checkin < '".$tgl_checkout."') and tgl_checkout > '".$tgl_checkout."')))
and id_wisma = 3";

$rooms= $conn->query($query1)->fetchAll();
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
        <li><a href="index.php">CEK TRANSAKSI</a></li>
       </ul>
    </div>
  </div>
</nav>
<br><br>

 <center>     
<form method="post" action="phpubahjasmine2.php">
  <p>Nomor Kamar</p>
        <div >
     <?php
      $d=0;$a=0;
      foreach ((array)$rooms as $room)
      { 
        echo"<input type='radio' name='ubahkamar' value='$room[0]'>$room[0]<br>";$d++;
      }
    if($d==0) {
      echo"<span style='margin-left:20px;'>Maaf, semua kamar pada tanggal tersebut di Wisma Flamboyan telah penuh</span>";
      echo "<a href='pageubahjasmine.php'> KEMBALI </a>"; 
    }
     ?> 
        </div>
        <button type="submit" class="btn btn-info" style="margin-bottom:10px">Submit</button><br>
        <a href="index.php" class="btn btn-info" role="button" style="margin-bottom:10px" >Back</a><br>
</form>
<?php 
 //    foreach ((array)$transaks as $transak)
 //    {++$transak[0];}
 //    echo "Terima kasih telah melakukan transaksi di wisma kami<br>"; 
 //    echo "ID Transaksi anda adalah : $transak[0]<br>" ; 
 //    echo "Harap diingat baik-baik<br><br>";
   

 //  $nrp=$_POST['nrp'];
	// $na=$_POST['nama'];
	// $al=$_POST['alamat'];
	// $te=$_POST['telepon'];
 //  $tgl=$_POST['tgllahir'];

	// $ci=$_POST['cekin'];
	// $co=$_POST['cekout'];
	// $la=$_POST['lama'];
	// $nk=$_POST['nokamar'];
 //  $tglba=$_POST['tglbayar'];
	// $new_kamar = "insert into TAMU values ('".$nrp."','".$na."','".$al."','".$te."','".$tgl."')";
 //  $new_transaksi = "insert into TRANSAKSI_SEWA_KAMAR values ('".$transak[0]."','','".$nrp."','".$nk."','".$ci."','".$co."','".$la."','".$tglba."','','')";
	// $new_kamar_exec = $conn->exec($new_kamar);
 //  $new_transaksi_exec = $conn->exec($new_transaksi); 
?>
</center> 
<!-- <p align="middle"> Kembali ke <a href="test.php">HOME</a></p> -->

</body>
<footer></footer>