<?php
	if( isset($_GET["pass"]) && isset($_GET["ip"]) && isset($_GET["name"]) && isset($_GET["topic"]) && isset($_GET["msg"]) ){
		$dbh = "localhost";
		$dbu = "1028185";
		$dbp = "dc40f114f1f2f3f4";
		$con = mysqli_connect($dbh,$dbu,$dbp);
		if(!$con){
			die("ERROR");
		}else{
			mysqli_select_db($con,"1028185");
			$nm = addSlashes($_GET["name"]);
			$tp = addSlashes($_GET["topic"]);
			$msg = addSlashes($_GET["msg"]);
			$ip = addSlashes($_GET["ip"]);
			if(!$_GET["pass"]=="lacced")
				die("error_p");
			$query = "insert into rtutorials(name,topic,message,ip) values($nm,$tp,$msg,$ip);";
			$rt = mysqli_query($con,$query);
			if(!$rt){
				die("Error");
			}else{
				mysqli_close($con);
				echo("success");
			}
		}
	}else{
		echo("error");
	}
?>
