<!-- <?php
// Session_Start();
// session_id();

// if(!isset($_SESSION['user'])){
//      header('Location: Login.html');
// }
?> -->
<html>
    <head>
    <meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Ntshanga Capital - Invest Disrupt Grow</title>

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
    </head>
    
    <body>
     
		<div class="main-page-wrapper">
<!-- 
=============================================
    Theme Header
============================================== 
-->
<header class="theme-menu-wrapper menu-style-two full-width-menu inner-menu">
    <div class="header-wrapper">
        <div class="clearfix">
            <!-- Logo -->
            <div class="logo float-left tran4s" style="margin-top:-20px;"><a href="index.html"><img src="images/logo/logo_white.png" width="200" alt="Logo"></a></div>

            <!-- ============================ Theme Menu ========================= -->
            <nav class="theme-main-menu float-right navbar" id="mega-menu-wrapper">
                <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav">
                        <li><a href="index.html" class="tran3s">Home</a> </li>
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="service-v2.html">Service</a></li>
                        <li><a href="portfolio-details.html">Companies</a></li>
                        <li class="dropdown-holder menu-list active"><a href="">Vacancies</a></li>
						<li class="menu-list"><a href="contact.html" >Contact</a></li>
                        <li class="login-button"><a href="#" class="tran3s" data-toggle="modal" data-target=".signUpModal">login</a></li>
                    </ul>
               </div><!-- /.navbar-collapse -->
            </nav> <!-- /.theme-main-menu -->
        </div> <!-- /.clearfix -->
    </div>
</header> <!-- /.theme-menu-wrapper -->

<!-- 
=============================================
    Theme Inner Banner 
============================================== 
-->
<div class="inner-page-banner">
    <div class="opacity">
        <h1>VACANCIES</h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Vcancies</li>
        </ul>
    </div> <!-- /.opacity -->
</div> <!-- /inner-page-banner -->


<div class="vacancies">
 <div class="container">
<h1> VACANCIES </h1>
       


<?php
include ("models/DAL/connection.php");
include ("models/DAL/command.php");
include ("models/DAL/VacancyDataMapper.php");

$Conn = new Connection();
$Comm = new Command();
$VacancyDataMapper = new  VacancyDataMapper();


$results = $VacancyDataMapper->GetJobs($Conn, $Comm);

foreach ($results as $R){
	echo '<div> <a href="jobdescription.php?Id='.$R->vacancyId.'" > ' .$R ->jobTitle.   '</a> </div>';
	
}



?>


<form action = "jobapplicationform.php" method = "post">
           
            <input type = "submit" value = "APPLY" name ="btnSubmit">
        </form
</div>
</div>

	<!-- 
			=============================================
				Footer
			============================================== 
			-->
            <footer class="bg-one">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="footer-logo">
								<a href="index.html"><img src="images/logo/logo.png" alt="Logo"></a>
								<h5><a href="#" class="tran3s">info@ntshangacapital.co.za</a></h5>
								<h6 class="p-color">+27 87 357 7004</h6>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 footer-list">
							<h4>Quick Links</h4>
							<ul>
								<li><a href="#" class="tran3s">How it Works</a></li>
								<li><a href="#" class="tran3s">Guarantee</a></li>
								<li><a href="#" class="tran3s">Security</a></li>
								<li><a href="#" class="tran3s">Report Bug</a></li>
								<li><a href="#" class="tran3s">Pricing</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 footer-list">
							<h4>About Us</h4>
							<ul>
								<li><a href="about-us.html" class="tran3s">About Us</a></li>
								<li><a href="#" class="tran3s">Jobs</a></li>
								<li><a href="#" class="tran3s">Team</a></li>
								<li><a href="#" class="tran3s">Testimonials</a></li>
								<li><a href="#" class="tran3s">Blog</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 footer-subscribe">
							<h4>Subscribe Us</h4>
							<form action="#">
								<input type="text" placeholder="Enter your mail">
							</form>
							<ul>
								<li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="tran3s"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div> <!-- /.row -->

					<div class="bottom-footer clearfix">
						<ul class="float-right">
							<li><h3><span class="timer p-color" data-from="0" data-to="300" data-speed="5000" data-refresh-interval="50">0</span> Products</h3></li>
							<li><h3><span class="timer p-color" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">0</span> Members</h3></li>
							<li><h3><span class="timer p-color" data-from="0" data-to="4" data-speed="5000" data-refresh-interval="50">0</span> Shops</h3></li>
						</ul>
						<p class="float-left">&copy; 2017 <a href="#" class="tran3s p-color">Ntshanga Capital</a>. All rights reserved</p>
					</div>
				</div> <!-- /.container -->
			</footer>

			<!-- Sign-Up Modal -->
			<div class="modal fade signUpModal theme-modal-box" role="dialog">
				<div class="modal-dialog">
				    <!-- Modal content-->
				    <div class="modal-content">
					    <div class="modal-body">
					        <h3>Login with Social Networks</h3>
					        <ul class="clearfix">
					        	<li class="float-left"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</a></li>
					        	<li class="float-left"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> Google</a></li>
					        	<li class="float-left"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
					        	<li class="float-left"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a></li>
					        </ul>
					        <form action="#">
					        	<h6><span>or</span></h6>
					        	<div class="wrapper">
					        		<input type="text" placeholder="Username or Email">
					        		<input type="password" placeholder="Password">
					        		<ul class="clearfix">
										<li class="float-left">
											<input type="checkbox" id="remember">
											<label for="remember">Remember Me</label>
										</li>
										<li class="float-right"><a href="#" class="p-color">Lost Your Password?</a></li>
									</ul>
									<button class="p-bg-color hvr-trim-two">Login</button>
					        	</div>
					        </form>
					    </div> <!-- /.modal-body -->
				    </div> <!-- /.modal-content -->
				</div> <!-- /.modal-dialog -->
			</div> <!-- /.signUpModal -->

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>



		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
		<!-- Bootstrap Select JS -->
		<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
	    <!-- Mega menu  -->
		<script type="text/javascript" src="vendor/bootstrap-mega-menu/js/menu.js"></script>
		
		<!-- WOW js -->
		<script type="text/javascript" src="vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script type="text/javascript" src="vendor/jquery.appear.js"></script>
		<script type="text/javascript" src="vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script type="text/javascript" src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="vendor/jquery.ripples-master/dist/jquery.ripples-min.js"></script>

		<!-- Query Loader -->
		<script src="vendor/queryloader/queryLoader3.js" type="text/javascript"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>

		</div> <!-- /.main-page-wrapper -->

 </body>
</html>


	