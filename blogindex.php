<?php
	session_start();
	include_once("db.php");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Blog Articles</title>
 </head>
 <body>
	 
	 <?php 
	 require_once("nbbc/nbbc.php");
	 $bbcode = new BBCode;
	 $sql = "SELECT * FROM article ORDER BY aticleId DESC";

	 $res = mysqli_query($db, $sql) or die (mysqli_error());

	 $posts = "";

	 if (mysqli_num_rows($res) > 0){
			 while ($row = mysqli_fetch_assoc($res)) 
			 {
	 			$id = $row ['aticleId'];
	 			$title = $row['topic'];
	 			$content = $row['description'];
	 			$image = $row['image'];
	 			$date = $row ['date'];


	 			$admin = "<div><a href='del_post.php?pid=$id'>Delete</a> &nbsp;<a href='edit.php?pid=$id'>Edit</a></div>";

				
				 $output = $bbcode ->Parse($content);
				 
				

	 		    $posts .= "<div><h2><a href'view_post.php?pid=$id'></a></h2><figure>$image</figure><h3>$date</h3><p>$output</p>$admin</div><hr>";
			 }
	 		echo $posts;

	 }
	 else {
	 	echo "There is no articles to display!";
	 }

	 ?>
 </body>
 </html>