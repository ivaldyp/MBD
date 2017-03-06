<?php
	include 'connect.php';
	session_start();

	$checkintgl = $_POST['ubahtglin'];
	$checkinbulan = $_POST['ubahbulanin'];
	$checkintahun = $_POST['ubahtahunin'];
	$_SESSION['ubahcheckin'] = ''.$checkintgl.'-'.$checkinbulan.'-'.$checkintahun.'';
	$checkouttgl = $_POST['ubahtglout'];
	$checkoutbulan = $_POST['ubahbulanout'];
	$checkouttahun = $_POST['ubahtahunout'];
	$_SESSION['ubahcheckout'] = ''.$checkouttgl.'-'.$checkoutbulan.'-'.$checkouttahun.'';

	// $query = "CALL masuk_data ('$id','$nama','$alamat','$telp','$lahir')";
	// $query2 = $conn->exec($query); 

	header('location:pageubahflamboyan2.php');
?>