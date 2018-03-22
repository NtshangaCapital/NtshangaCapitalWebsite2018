<?php
session_start();
include ("models/DAL/connection.php");

include ('models/DAL/Command.php');
include ('models/DAL/ArticleDataMapper.php');
include ('models/article.php');


$Con = new Connection();
$Comm = new Command();

$article_datamaper = new ArticleDataMapper();

	/*if(!isset($_SESSION['username'])){

		header("Location: login.php");
		return;
	}*/
	if(!isset($_GET['pid'])){
		header("Location: blogindex.php");
	}else{
		$pid = $_GET['pid'];
        
        $res = $article_datamaper->DeleteArticle($pid, $Con, $Comm);
		if ($res){
            header("Location: blogindex.php");
        }else{
                header("Location: index.html");

        }
		
	}

?>