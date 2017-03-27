<?php
	if(isset($_POST["pass"]) && isset($_POST["ip"]) isset($_POST["name"]) && isset($_POST["topic"]) && isset($_POST["msg"])){
		$dbh = "localhost";
		$dbu = "1028185";
		$dbp = "dc40f114f1f2f3f4";
		$con = mysqli_connect($dbh,$dbu,$dbp);
		if(!$con){
			die("ERROR");
		}else{
			$nm = addSlashes($_POST["name"]);
			$tp = addSlashes($_POST["topic"]);
			$msg = addSlashes($_POST["msg"]);
			$ip = addSlashes($_POST["ip"]);
			$query = "insert into rtutorials(name,topic,message,ip) values($nm,$tp,$msg,$ip);";
			$rt = mysqli_query($con,$query);
			if(!$rt){
				mysqli_close($con);
				die("error");
			}else
				mysqli_close($con);
				echo("success");
		}
	}
?>
