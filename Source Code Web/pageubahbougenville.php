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
<center><h1>Masukkan tanggal baru</h1></center>
<div id="pesanflam" class="container">
<div class="row">
<form method=post action="phpubahbougenville.php">
<div class="col-md-8">
    <p>Tanggal Check In</p>
    <div class="col-sm-6 form-group">
        <input type="text" class="form-control"name="ubahtglin" maxlength="2" placeholder="Tanggal">
    <input list="bulan" class="form-control"name="ubahbulanin" maxlength="3"size="5" placeholder="Bulan">
      <datalist id="bulan">
          <option value="JAN">
          <option value="FEB">
          <option value="MAR">
          <option value="APR">
          <option value="MAY">
          <option value="JUN">
          <option value="JUL">
          <option value="AUG">
          <option value="SEP">
          <option value="OCT">
          <option value="NOV">
          <option value="DEC">
        </datalist>
    <input list="tahun" class="form-control"name="ubahtahunin" size="5" placeholder="Tahun">
      <datalist id="tahun">
          <option value="2016">
          <option value="2017">
          <option value="2018">
          <option value="2019">
          <option value="2020">
        </datalist>
      </div>
    <br><br><br><br><br>
    <p>Tanggal Check Out</p>
        <div class="col-sm-6 form-group">
      <input type="text"class="form-control" name="ubahtglout" maxlength="2" size="5" placeholder="Tanggal">
    <input list="bulan"class="form-control" name="ubahbulanout" maxlength="3"size="5" placeholder="Bulan">
      <datalist id="bulan">
          <option value="JAN">
          <option value="FEB">
          <option value="MAR">
          <option value="APR">
          <option value="MAY">
          <option value="JUN">
          <option value="JUL">
          <option value="AUG">
          <option value="SEP">
          <option value="OCT">
          <option value="NOV">
          <option value="DEC">
        </datalist>
    <input list="tahun" class="form-control"name="ubahtahunout" size="5" placeholder="Tahun">
      <datalist id="tahun">
          <option value="2016">
          <option value="2017">
          <option value="2018">
          <option value="2019">
          <option value="2020">
        </datalist>
        </div>
    <br><br><br><br><br>
    <button type="submit" class="btn btn-info">Submit</button>
        </div>
      </div>
</form>
</div>
</div>
</body>
