<?php
	include 'connect.php';
	session_start();
	$id = $_SESSION['tamuid'] = $_POST['tamu_id'];
	$nama = $_SESSION['tamunama'] = $_POST['tamu_nama'];
	$alamat = $_SESSION['tamualamat'] = $_POST['tamu_alamat'];
	$telp = $_SESSION['tamutelp'] = $_POST['tamu_telp'];
	$tamutgl = $_POST['lahirtgl'];
	$tamubulan = $_POST['lahirbulan'];
	$tamutahun = $_POST['lahirtahun'];
	$lahir = $_SESSION['tamulahir'] = ''.$tamutgl.'-'.$tamubulan.'-'.$tamutahun.'';
	// $id=$_POST['tamu_id'];
	// $nama=$_POST['tamu_nama'];
	// $alamat=$_POST['tamu_alamat'];
	// $telp=$_POST['tamu_telp'];
	// $lahir=$_POST['tamu_lahir'];

	$checkintgl = $_POST['checkintgl'];
	$checkinbulan = $_POST['checkinbulan'];
	$checkintahun = $_POST['checkintahun'];
	$_SESSION['checkin'] = ''.$checkintgl.'-'.$checkinbulan.'-'.$checkintahun.'';
	$checkouttgl = $_POST['checkouttgl'];
	$checkoutbulan = $_POST['checkoutbulan'];
	$checkouttahun = $_POST['checkouttahun'];
	$_SESSION['checkout'] = ''.$checkouttgl.'-'.$checkoutbulan.'-'.$checkouttahun.'';

	// $query = "CALL masuk_data ('$id','$nama','$alamat','$telp','$lahir')";
	// $query2 = $conn->exec($query); 

	header('location:pesanflamboyan2.php');
?>