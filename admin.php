<?php
	session_start();
	include_once("db.php");

	if(!isset($_SESSION))

 ?>
 <<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
	 <?php 
	 require_once("nbbc/nbbc.php");
	 $bbcode = new BBCode;
	 $sql = "SELECT * FROM articles ORDER BY id DESC";

	 $res = mysqli_query($db, $sql) or die (mysqli_error());

	 $posts = "";

	 if (mysqli_num_rows($res) > 0){
	 		while ($row = mysqli_fetch_assoc($res)) {
	 			$id = $row ['id'];
	 			$title = $row['topic'];
	 			$content = $row['content'];
	 			$date = $row['date'];
	 			$time = $row ['time'];


	 			$admin = "<div><a href='del_post.php?pid=$id'>Delete</a> &nbsp;<a href='edit_post.php?pid=$id'></a>Edit</div>";


	 		    $output = $bbcode ->Parse($content);

	 		    $posts .= "<div><h2><a href'view_post.php?pid=$id'></a></h2><h3>$date</h3><p>$output</p>$admin</div>"
	 		}
	 		echo $posts;

	 }else {
	 	echo "There is no posts to display!";
	 }

	 ?>
 </body>
 </html>