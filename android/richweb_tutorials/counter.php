<?php
		if(isset($_GET["id"]){
				$c = file_get_contents("counter");
				$c = $c."0";
				file_put_contents("counter");
		}
?>
