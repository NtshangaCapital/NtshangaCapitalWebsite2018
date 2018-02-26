<?php
	session_start();
	include_once("db.php");

	/*if(!isset($_SESSION['username'])){

		header("Location: login.php");
		return;
	}*/
	if(!isset($_GET['pid'])){
		header("Location: blogindex.php");
	}else{
		$pid = $_GET['pid'];
		$sql = "DELETE FROM article WHERE aticleId=$pid";
		mysqli_query($db, $sql);
		header("Location: blogindex.php");
	}

?>