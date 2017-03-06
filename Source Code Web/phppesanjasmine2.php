<?php
	include 'connect.php';
	session_start();

	$nokamar = $_POST['nokamar'];
	$id = $_SESSION['tamuid'];

	$qquery = "SELECT id_tamu FROM tamu";
	$qquery2 = $conn->query($qquery)->fetchAll();

	$flag = 0;

	foreach ((array)$qquery2 as $qquery3) {
		if ($qquery3[0]==$id)
		{
			$flag = 1;
		}
	}

	if($flag==1)
	{
		$tes = "UPDATE tamu SET nama_tamu = ".$_SESSION['tamunama']." WHERE id_tamu = $id";
		$tess = $conn->exec($tes);
		$tes2 = "UPDATE tamu SET alamat_tamu = '".$_SESSION['tamualamat']."' WHERE id_tamu = $id";
		$tess2 = $conn->exec($tes2);
		$tes3 = "UPDATE tamu SET telp_tamu = '".$_SESSION['tamutelp']."' WHERE id_tamu = $id";
		$tess3 = $conn->exec($tes3);
		$tes4 = "UPDATE tamu SET tgl_lahir = '".$_SESSION['tamulahir']."' WHERE id_tamu = $id";
		$tess4 = $conn->exec($tes4);

		$tes5 = "CALL masuk_data2 ('".$_SESSION['tamuid']."', '".$_SESSION['checkin']."', '".$_SESSION['checkout']."', '".$nokamar."')";
		$tess5 = $conn->exec($tes5);
		header("Location:phppesanjasmine3.php");
	}
	else
	{
		$query = "CALL masuk_data ('".$_SESSION['tamuid']."','".$_SESSION['tamunama']."','".$_SESSION['tamualamat']."','".$_SESSION['tamutelp']."','".$_SESSION['tamulahir']."','".$_SESSION['checkin']."', '".$_SESSION['checkout']."', '".$nokamar."')";
		// $query = "CALL masuk_data ('".$id."','".$nama."','".$alamat."','".$telp."','".$lahir."','".$cin."', '".$cout."', '".$nokamar."')";
		$query2 = $conn->exec($query); 
		header("Location:phppesanjasmine3.php");
	}	
?>