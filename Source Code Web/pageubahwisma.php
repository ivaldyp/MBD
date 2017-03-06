
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

<!-- Container (The Band Section) -->

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <!-- <h3 class="text-center">PESAN KAMAR</h3> -->
    <p class="text-center">Silahkan pilih wisma tempat anda ingin menginap<br><br></p>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="wisma flambo2.jpg" alt="Paris" width="400" height="300">
          <p><strong>WISMA FLAMBOYAN</strong></p>
          <a href="pageubahflamboyan.php"><button class="btn" data-toggle="modal" data-target="#myModal">Pesan Kamar</button></a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="wisma bougen2.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>WISMA BOUGENVILLE</strong></p>
          <a href="pageubahbougenville.php"><button class="btn" data-toggle="modal" data-target="#myModal">Pesan Kamar</button></a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="wisma jasmin2.jpg" alt="New York" width="400" height="300">
          <p><strong>WISMA JASMINE</strong></p>
          <a href="pageubahjasmine.php"><button class="btn" data-toggle="modal" data-target="#myModal">Pesan Kamar</button></a>
        </div>
      </div>
      
    </div>
  </div>
  <footer></footer>
   
</html>
