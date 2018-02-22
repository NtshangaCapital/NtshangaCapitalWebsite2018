<?php
// Initialise session
Session_Start();
?>

<?php
// Check if user is signed in.
if($_SESSION['user'] == null){
    header('Location: Login.php');
}
?>

<?php
// Includes
include ('models/DAL/Connection.php');
include ('models/DAL/Command.php');
include ('models/Testimonial.php');
include ('models/DAL/TestimonialDataMapper.php');
?>

<!DOCTYPE html>
<html lang="en">	
    <head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Find Account</title>
        <!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/v.js"></script>
    </head>
    <body>
    <div style="">
    <?php
    if(isset($_SERVER['user'])){
        if(isset($_POST['submit'])){
            if(isset($_POST['testimonial']) && $_POST['testimonial'] != ''){
                $Conn = new Connection();
                $Comm = new Command();

                $Text = $_POST['testimonial'];
                $Email = $_SESSION['user'];

                $acc_datamapper = new AccountDataMapper();

                $Testimony = new Testimonial();
                $Testimony->AccountId = $acc_datamapper->GetAccountId($Email, $Conn, $Comm);
                $Testimony->Text = $Text;

                $TestimonyDataMapper = new TestimonialDataMapper();
                $TestimonyId = $TestimonyDataMapper->Update($Testimony, $Conn, $Comm);
                if($TestimonyId > 0){
                    echo('Saved successfully');
                }else{
                    echo('Unknown problem has occured, please try again later.');
                }
            }
        }
    }
    ?>
    </div>
    <form id="formtestimonial" method="POST" action="">
        <div>
            <div>
                <div><label>Write testimonial</label></div>
                <div><textarea id="txtTestimonial" name="testimonial" require oninput="" oninvalid=""></textarea></div>
                <div><input id="btnSubmit" name="submit" /></div>
            </div>
        </div>
    </form>
    </body>
</html>