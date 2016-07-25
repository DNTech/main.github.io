<?php
	require("../connect.php");
	if(isset($_POST["name"])){
		$query = "insert into contact(name,email,website,message) values(\"".$_POST["name"]."\",\"".$_POST["email"]."\",\"".$_POST["website"]."\",\"".$_POST["message"]."\");";
		$rt = mysqli_query($con,$query);
		if(!$rt){
			die(mysqli_error($con));
		}else{
			echo("success");
		}
	}
?>
