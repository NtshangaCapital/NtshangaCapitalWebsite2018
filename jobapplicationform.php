

<!-- <?php
// Session_Start();
// session_id();
// if(isset($_POST['btnSubmit']))
// if(!isset($_SESSION['user'])){
//      header('Location: Login.html');
// }
?> -->

<?php

include ('connection.php');
include ('command.php');
include ('vacancy.php');
include ('models/customer.php');
include ('VacancyDataMapper.php');


?>
<?php 

$Conn = new connection();
$Comm = new command();
$vacancy_datamapper = new VacancyDatamapper();


$username = "sethucarter@gmail.com";
$results = $vacancy_datamapper->job($Conn,$Comm,$username);

$fname;
$lname;
$cno;
$email;
$id;

if(is_array($results))
{

	foreach($results as $result)
{
	$id    = $result->Id;
	$fname = $result->FirstName;
	$lname = $result->LastName;
	$cno   = $result->Phone;
	$email = $result->Email;

}
echo "id :".$id ;


}
else{
	echo "not an array";
}



?>


<html><head>
<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Login</title>
        <!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/v.js"></script>
    <div class="div-label-span div-margin-bottom-5px">
            <!-- Logo -->
				<div class="logo float-left tran4s" style="background-color:#00d747;margin-top:-20px;padding:2%;">
                        <a href="index.html">
                            <img src="images/logo/logo_white.png" width="200" alt="Logo">
                        </a>
                    </div>
</head>

	</div></br></br>
	</head>
	<body>

	<div id="form-container">
	<form action="jobreport.php" style =" width=: 500px; padding :12px 20px; margin: 8px 0 auto; text-align:left;  box-sizing: border-box;"	id="jobapplication" method="post"  onsubmit="return ValidateForm(this);">
	<script>
document.getElementById('element_id').style.background-image = 'images/home/slide-2.jpg'; 
</script>
	<script type="text/javascript">
	function ValidateForm(frm) {
	if (frm.First_Name.value == "") { alert('First name is required.'); frm.First_Name.focus(); return false; }
	if (frm.Last_Name.value == "") { alert('Last name is required.'); frm.Last_Name.focus(); return false; }
	if (frm.Email_Address.value == "") { alert('Email address is required.'); frm.Email_Address.focus(); return false; }
	if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.Email_Address.focus(); return false; }
	if (frm.Position.value == "") { alert('Position is required.'); frm.Position.focus(); return false; }
	if (frm.Phone.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }
	return true; }
	</script>
	
	<table border="0" cellpadding="10" cellspacing="0">
	<tr> <td style="width: 50%">
	<label for="First_Name"><b>First name *</b></label><br />
	<input name="First_Name" type="text" maxlength="100" style="width: 260px" value ="<?php echo $fname ?>" /></td>
	<tr><td><label for="Last_Name"><b>Last name *</b></label><br />
	<input name="Last_Name" type="text" maxlength="50" style="width: 260px" value ="<?php echo $lname ?>"/>
	</td>  
	<tr><td>
	<label for="Email_Address"><b>Email Address *</b></label><br />
	<input name="Email_Address" type="text" maxlength="50" style="width: 260px" value ="<?php echo $email ?>"/></td>
	<tr><td>
	<label for="Phone"><b>Phone *</b></label><br />
	<input name="Phone" type="text" maxlength="50" style="width: 260px" value ="<?php echo $cno ?>"/>
	</td>
	
	<tr> <td>
	<label for="Position"><b>Position you are applying for *</b></label><br />
	<input name="Position" type="text" maxlength="100" style="width: 400px" />
	</td> </tr>
	
	</td> </tr>
	<tr> <td colspan="2">
	<label for="Relocate"><b>Are you willing to relocate?</b></label><br />
	<input name="Relocate" type="radio" value="Yes" checked="checked" /> Yes      
	<input name="Relocate" type="radio" value="No" /> No      
	<input name="Relocate" type="radio" value="NotSure" /> Not sure
	</td> </tr> <tr> <td colspan="2">
	</br>
	<h6>Upload your CV:</h6>
	<div><label><input name="uploaded" type="file" ></label>
	</div></br>
	 <tr> <td colspan="2">
	<label for="Reference"><b>Reference / Comments / Questions</b></label><br />
	<textarea name="Reference" rows="7" cols="40" style="width: 400px"></textarea>
	</td> </tr> <tr> <td colspan="2" style="text-align: center;"><br/>
	<script src="#" type="text/javascript"></script>
	<input name="skip_submit" type="submit" value="Send Application" />
	</td> </tr>
	</table>
	</form>
	<footer>
	</footer>
	</div>
	</body>


	<!-- Js File_________________________________ -->

			<!-- j Query -->
			<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
			<!-- Bootstrap Select JS -->
			<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>

			<!-- Bootstrap JS -->
			<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

			<!-- Vendor js _________ -->
			<!-- Camera Slider -->
			<script type='text/javascript' src='vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
			<script type='text/javascript' src='vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
			<script type='text/javascript' src='vendor/Camera-master/scripts/camera.min.js'></script>
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
			<!-- Query Loader -->
			<script src="vendor/queryloader/queryLoader3.js" type="text/javascript"></script>

			<!-- Theme js -->
			<script type="text/javascript" src="js/theme.js"></script>
			<!--Google api-->
			<script src="https://apis.google.com/js/platform.js" async defer></script>
			</body>
			</html>