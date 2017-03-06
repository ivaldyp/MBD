<?php
	include 'connect.php';
	session_start();

	$nokamar = $_POST['ubahkamar'];
	$id = $_SESSION['nomor'];

	$qquery = "SELECT id_transaksi FROM transaksi_sewa where id_transaksi = '".$id."'";
	$qquery2 = $conn->query($qquery)->fetchAll();

	$flag = 0;

	foreach ((array)$qquery2 as $qquery3) {
		$tes = "UPDATE transaksi_sewa SET tgl_checkin = '".$_SESSION['ubahcheckin']."' WHERE id_transaksi = $id";
		$tess = $conn->exec($tes);
		$tes2 = "UPDATE transaksi_sewa SET tgl_checkout = '".$_SESSION['ubahcheckout']."' WHERE id_transaksi = $id";
		$tess2 = $conn->exec($tes2);
		$tes3 = "UPDATE transaksi_sewa SET no_kamar = '".$nokamar."' WHERE id_transaksi = $id";
		$tess3 = $conn->exec($tes3);

		header("Location:phpubahbougenville3.php");
	}
?>