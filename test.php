<?php
	session_start();
	$_SESSION["USER"] = array();
	
	if(isset($_REQUEST["addToSession"])) {
		if($_REQUEST["add"]){
			array_push($_SESSION["USERS"], $_REQUEST["username"]);
			echo "success";
			exit();
		}else{
			$len = sizeof($_SESSION["USER"]);
			for($i=0; $i<$len; $i++){
				if($_SESSION["USER"] == $_REQUEST["username"]){
					unset($_SESSION["USER"][$i]);
					break;
				}
			}
			exit();
		}
	}
	if(isset($_REQUEST["getCoupon"])) {
		$user = strtolower($_REQUEST["username"]);
		$len = sizeof($_SESSION["USER"]);
		for($i=0; $i<$len; $i++){
			if($_SESSION["USER"][$i] == $user){
				echo $user;
				exit();
			}
		}
	}
?>