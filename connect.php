<?php
	$dbh = "localhost";
	$dbu = "1028185";
	$dbp = "dc40f114f1f2f3f4";
	$con = mysqli_connect($dbh,$dbu,$dbp);
	if(!$con){
		die(mysqli_error());
	}
	mysqli_select_db($con,"1028185");
?>
