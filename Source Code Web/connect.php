<?php
$db_username="fp_mbd";
$db_password="system";
$db="oci:fp_mbd=XE";
$conn = new PDO($db,$db_username,$db_password);
if($conn){}
?>