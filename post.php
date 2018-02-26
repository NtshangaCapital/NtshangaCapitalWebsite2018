<?php
session_start();
include_once("db.php");

/*if(!isset($_SESSION['username'])){

		header("Location: login.html");
		return;
	}*/

if (isset($_POST['post'])){

	$title = strip_tags($_POST['title']);
	$content = strip_tags($_POST['content']);

	$title = mysqli_real_escape_string($db, $title);
	$content = mysqli_real_escape_string($db, $content);
	$image = 

	$date = date('l jS \of F h:i:s A');

	$sql = "INSERT INTO article (topic, description, image, date) VALUES('$tittle', '$content', '$image', '$date')";

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
	<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Gullu - Agency &amp; Startup HTML Template</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
		<script>
		function validate(){
					if (document.getElementById("txtArticle").value == ""){
						alert("Enter the text for a blog");
						document.getElementById("txtArticle").focus();
					}
					else {
						alert(document.getElementById("txtArticle").value);
					}
					}

		</script>

</head>
<body>
	<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			<header class="theme-menu-wrapper menu-style-two full-width-menu inner-menu">
				<div class="header-wrapper">
					<div class="clearfix">
						<!-- Logo -->
						<div class="logo float-left tran4s"><a href="index.html"><img src="images/logo/logo_white.png" alt="Logo"></a></div>

						<!-- ============================ Theme Menu ========================= -->
						<nav class="theme-main-menu float-right navbar" id="mega-menu-wrapper">
							<!-- Brand and toggle get grouped for better mobile display -->
						   <div class="navbar-header">
						     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						       <span class="sr-only">Toggle navigation</span>
						       <span class="icon-bar"></span>
						       <span class="icon-bar"></span>
						       <span class="icon-bar"></span>
						     </button>
						   </div>
						   <!-- Collect the nav links, forms, and other content for toggling -->
						   <div class="collapse navbar-collapse" id="navbar-collapse-1">
								<ul class="nav">
									<li class="dropdown-holder menu-list"><a href="index.html" class="tran3s">Home</a>
										<ul class="sub-menu">
											<li><a href="index.html">Home version one</a></li>
											<li><a href="index-2.html">Home version Two</a></li>
											<li><a href="index-3.html">Home version Three</a></li>
										</ul>
									</li>
									<li class="dropdown-holder menu-list active"><a href="#" class="tran3s">Pages</a>
										<ul class="sub-menu">
											<li><a href="blog-v1.html">Blog Grid</a></li>
											<li><a href="Adminblogedit.php">Blog Post</a></li>
											<li class="dropdown-holder"><a href="blog-v3.html">Blog Full Width</a>
												<ul class="second-sub-menu">
													<li><a href="blog-details.html">Blog details</a></li>
												</ul>
											</li>
											<li class="dropdown-holder"><a href="shop.html">Shop Page</a>
												<ul class="second-sub-menu">
													<li><a href="shop-details.html">Shop Details</a></li>
												</ul>
											</li>
											<li><a href="about-us.html">About us</a></li>
											<li><a href="team-v1.html">Team Version one</a></li>
											<li><a href="team-v2.html">Team Version Two</a></li>
										</ul>
									</li>
									<li class="dropdown-holder menu-list"><a href="#" class="tran3s">Services</a>
										<ul class="sub-menu">
											<li><a href="service-v1.html">Service Version One</a></li>
											<li><a href="service-v2.html">Service Version Two</a></li>
										</ul>
									</li>
									<li class="dropdown-holder menu-list"><a href="#" class="tran3s">Portfolio</a>
										<ul class="sub-menu">
											<li><a href="portfolio-v1.html">Portfolio version one</a></li>
											<li><a href="portfolio-v2.html">Portfolio version Two</a></li>
											<li class="dropdown-holder"><a href="portfolio-v3.html">Portfolio version Three</a>
												<ul class="second-sub-menu">
													<li><a href="portfolio-details.html">Portfolio Details</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="menu-list"><a href="contact.html" class="tran3s">Contact Us</a></li>
									<li class="login-button"><a href="#" class="tran3s" data-toggle="modal" data-target=".signUpModal">login</a></li>
								</ul>
						   </div><!-- /.navbar-collapse -->
						</nav> <!-- /.theme-main-menu -->
					</div> <!-- /.clearfix -->
				</div>
			</header> <!-- /.theme-menu-wrapper -->
			


			<!-- 
			=============================================
				Blog Details
			============================================== 
			-->
			
			<form action="post.php" method="post" enctype="multipart/form-data" display:flex;>
			<input placeholder="Title" name="title" type="text" autofocus size="48"><br /><br />
			<input type="file" name="pic" accept="image/*">
			<textarea placeholder="Content" name="content" rows="20" cols="50"></textarea><br />
			<input name="post" type="submit" value="Post" />
				
	</form>
</body>
</html>