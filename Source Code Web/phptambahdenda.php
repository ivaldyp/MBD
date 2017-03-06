<?php
	include 'connect.php';
	session_start();

	foreach ($_POST['tes'] as $key) {
		$query = "CALL insert_denda('".$_SESSION['pilih']."', '".$key."')";
		$query2 = $conn->exec($query);
	}

	$query3 = "SELECT distinct(total_bayar(".$_SESSION['pilih'].")) FROM transaksi_sewa";
	$query4 = $conn->query($query3)->fetchAll();
	foreach ((array)$query4 as $totaldenda) 
	{
		$_SESSION['denda'] = $totaldenda[0]; 
	}
	header('Location:pagelangsungcheckout.php');
?>