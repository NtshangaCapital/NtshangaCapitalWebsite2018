<?php
session_start();
include_once("db.php");

/*if(!isset($_SESSION['username'])){

		header("Location: login.php");
		return;
	}*/

if(!isset($_GET['pid'])){
		header("Location: blogindex.php");
	}
$pid =$_GET['pid'];

if (isset($_POST['update'])){

	$title = strip_tags($_POST['title']);
	$content = strip_tags($_POST['content']);

	$title = mysqli_real_escape_string($db, $title);
	$content = mysqli_real_escape_string($db, $content);

	$date = date('l jS \of F h:i:s A');

	$sql = "UPDATE article SET topic='$title', description='$content', date='$date' WHERE aticleId=$pid";

	if($title ==""|| $content == ""){

		echo "Please complete your post!";
		return;
	}

	mysqli_query($db, $sql);

	header("Location: blogindex.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php

			$sql_get ="SELECT * FROM article WHERE aticleId=$pid LIMIT 1";
			$res = mysqli_query($db, $sql_get);

			if(mysqli_num_rows($res) > 0){
				while ($row = mysqli_fetch_assoc($res)) {
					$title = $row['topic'];
					/*$image = $row['image'];*/
					$content = $row['description'];

					echo "<form action='edit.php?pid =$pid' method='post' enctype='multipart/form-data'>";
					echo "<input placeholder='Title' name='title' type='text' autofocus size='48'><br /> <br />";
					echo "<textarea placeholder='Content' name='content' rows='20' cols='50'>$content</textarea><br />";
				}


			}
		?>
		
	<input name="post" type="submit" value="Post" />
		
	</form>
</body>
</html>