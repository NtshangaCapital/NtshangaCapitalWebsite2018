<?php
Session_Start();
session_id();

if(!isset($_SESSION['user'])){
    header('Location: Login.html');
}

include ('models/DAL/Connection.php');
include ('models/DAL/Command.php');
include ('models/DAL/CustomerDataMapper.php');
?>

<?php 

$username = $_SESSION['user'];
$Email = $_SESSION['user'];

$Conn = new Connection();
$Comm = new Command();
$validate = new validate();

$custusername_datamaper = new CustomerDataMapper();
$results = $custusername_datamaper->GetCustomerbyUsername($username,$Conn, $Comm);

$_fname;
$_lname;
$_contactno;
$_email;
foreach($results as $result)
{
    $_fname = $result->FirstName;
    $_lname = $result->LastName;
    $_contactno = $result->ContactNumber;
    $_email = $result->Email;
}

    if(isset($_POST["btnUpdate"]))
    {
        $FirstName = $validate->GetFirstName();
        $LastName = $validate->GetLastName();
        $ContactNumber = $validate->GetContactNumber();
        $email = $validate->GetEmail();
        $UpdateUser = $custusername_datamaper->UpdateUserDetails($username,$Conn,$Comm,$FirstName,$LastName,$ContactNumber,$Email);
    }
    else{
        // echo "".$_POST['FirstName'];
        echo "data not updated";
    }
class Validate{
    
    public function __construct(){

    }
    public function GetFirstName(){
        return filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
    }
    public function GetLastName(){
        return filter_var($_POST["lname"], FILTER_SANITIZE_STRING);
    }
    public function GetEmail(){
        return filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);
    }
    public function GetContactNumber(){
        return filter_var($_POST["phone"],FILTER_SANITIZE_STRING);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Edit Profile</title>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png"> -->


<!-- Main style sheet -->
<link rel="stylesheet" type="text/css" href="css/style.css"> 
<!-- responsive style sheet -->
<!-- <link rel="stylesheet" type="text/css" href="css/responsive.css"> -->

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
    <style>
        body {
            margin: 0;
        }
        
        .textboxes {
            height: 30px;
            width: 550px;
            padding-left: 300px;
        }
        
        .top-div {
            margin-top: 0;
            width: 100%;
            height: 20px;
            background-size: 2500px;
            background-attachment: fixed;
        }
        
        .wrapper {
            margin: 0px;
            font-family: 'Roboto', 'Times New Roman', 'georgia';
        }
        
        #hero-section {
            padding: 20px 0;
            margin-bottom: 50px;
            background: #808080 url("https://yfwp2260wmb3b8wdx12drkyo-wpengine.netdna-ssl.com/wp-content/uploads/2015/04/BLOG_SubpageBanner.jpg") no-repeat top center;
            height: 170px;
            background-size: 2500px;
            background-attachment: fixed;
        }
        
        center {
            display: block;
            text-align: center;
        }
        
        #userDescription {
            border-radius: 500px;
            display: block;
            float: left;
            margin: 8px 0 10px;
        }
        
        img {
            border: 0;
            vertical-align: middle;
        }
        
        .single-post {
            margin-bottom: 100px;
        }
        
        div {
            display: block;
        }
        
        #companyheader {
            color: White;
            font-family: Britannic;
            margin-top: 0px;
            padding-right: 50px;
            text-align: center;
            font-size: 70px;
        }
        
        .conatiner {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        
        .vl {
            /* border-left: 2px solid;
            border-color: black; */
            display: block;
            text-align: center;
            position: absolute;
            left: 50%;
            margin-left: -3px;
            top: 450px;
            height: 100%;
            /* overflow: auto  */
        }
        
        #requestedservices {
            background-color: lightgreen;
            width: 48%;
            display: inline-block;
            padding: 10px 10px 10px 10px;
            font-size: 14px;
            color: white;
        }
        #btneditDetails{
            background-color: lightgreen;

        }
        #editImage{
            padding-left:220px;
        }
        
        .imgframe {
            background: #D652D9;
            padding: 12px;
            border: 1px solid #999;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="div-label-span div-margin-bottom-5px">
           
            <!-- Logo -->
            <nav class="collapse navbar-collapse" style="background-color:#00d747;margin-top:-20px;padding:2%;">
            <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						       <span class="sr-only">Toggle navigation</span>
						       <span class="icon-bar"></span>
						       <span class="icon-bar"></span>
						       <span class="icon-bar"></span>
						     </button>
                        </div>
            <div class="container-fluid">
         
    <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">Companies</a></li>
          <li><a href="#">Contact</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
            
            </div>
            <div class="logo float-left tran4s" style="margin-top:-20px;">
                        <a href="index.html"><img src="images/logo/logo_white.png" width="200" alt="Logo"></a>
                    </div>
            <!-- <a href="index.html">
                    <img src="images/logo/logo_white.png" width="200" alt="Logo">
                </a> -->
            </nav>

            <section id="hero-section">
                <h2 id="companyheader">
                    <?php  
           
                echo 'Welcome '.$_SESSION['user'];
            
            ?> </h2>
            </section>

            <div class="container">
                <div class="row">
                    <div class=" col-sm-6 col-xs-12">

                        <div class="single-post">
                            <p></p>
                        </div>
                    </div>
                    <center>
                        <div>


                            <div>
                                <div class="vl">
                                    <!-- <img alt=" " src="images/logo.png" height="60" width="60" class=" imgframe" /> -->
                                    <div id="companydescription">

                                    </div><br />
                                    <p>
                                    </p>
                                    <br />
                                    <h2 id="requestedservices">Offered Services</h2><br />
                                    <div>
                                        <!--  <lable id="lblservice1">Offered Services</lable>-->
                                        <!--   <input id="service1" type="checkbox" name=" " />-->
                                    </div>
                                    <div>
                                        <lable id="lblservice2">Proffessional IT services by our expert</lable>
                                        <!--  <input id="service2" type="checkbox" name=" " />-->
                                    </div>
                                    <br />
                                    <div>
                                        <lable id="lblservice3">Complete Business Solution</lable>
                                        <!-- <input id="service3" type="checkbox" name=" " />-->
                                    </div>
                                    <br />
                                    <div>
                                        <lable id="lblservice4">Management company Services and Solution</lable>
                                        <!--<input id="service4" type="checkbox" name=" " />-->
                                    </div>
                                    <br />
                                    <div>
                                        <lable id="lblservice5">Omnline Content</lable>
                                        <!-- <input id="service5" type="checkbox" name=" " />-->
                                    </div>
                                    <br />
                                    <div>
                                        <lable id="lblservice6">Design and development services</lable>
                                        <!--<input id="service6" type="checkbox" name=" " />-->
                                    </div>
                                    <br />
                                    <div>
                                        <lable id="lblservice7">boosting of website traffic</lable>
                                        <!--<input id="service6" type="checkbox" name=" " />-->
                                    </div>
                                    <br />
                                    <h2 id="requestedservices">Your Details</h2><br />
                                    <div>
                                        <!--  <lable id="lblservice1">Offered Services</lable>-->
                                        <!--   <input id="service1" type="checkbox" name=" " />-->
                                    </div>
                                    <!-- 
                                 <div>
                                     <h3>Company Name</h3><br />
                                     <lable id="lblservice2">Ntshanga Capital</lable>
                                      <input id="service2" type="checkbox" name=" " />-
                                 </div>
                                   -->
                                    <br />
                                    <div class="textboxes">
                                        <h2>First Name
                                        </h2>
                                    </div>
                                    <br />
                                    <div class="textboxes">
                                    <div>
                                    <?php  echo $_fname  ?>
                                    </div>
                                     
                                    </div>
                                    <br />
                                    <h2>Last Name</h2><br />
                                    <div class="textboxes">
                                    <div>
                                    <?php echo $_lname?>
                                    </div>
                                    </div>
                                    <br />
                                    <h2>Contact Number</h2><br />
                                    <div class="textboxes">
                                    <div>
                                    </div>
                                    <?php 
                                        
                                        if(empty($_contactno))
                                        {
                                            echo "Please update Number";
                                        }
                                        else
                                        echo $_contactno
                                        
                                        ?>
                                        <!-- <lable id="lblservice10"> </lable>  -->
                                        <!-- <input id="contactnumber" type="text" name=" " class="form-control" value ="" readonly /> -->
                                    </div>
                                    <br />
                                    <h2>Email Address</h2><br />
                                    <div class="textboxes">
                                    <?php  echo $_email ?>
                                    <br/>
                                    <br/>>
                                    <!-- <input id="emailaddress" type="text" name=" " class="form-control" value =""  readonly/> -->
  <div class="div-margin-bottom-5px">
<input id="btneditDetails" type="submit" class="btnStyle btnWidth" value="Update" name="UpdateDetails" data-toggle="modal" data-target=".RegistrationModal" data-wow-delay="0.3s" />
</div>
                                         <!-- <lable id="lblservice11">SethuCarter@gmail.com</lable>  -->

                                    </div>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </center>
                </div>

            </div>
        </div>

    </div>

    </div>
<div>
<div class="modal fade RegistrationModal theme-modal-box" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <h3>Edit your Details</h3>
                       
                        <form id="btnUpdate" action="profile.php" method="POST">
                            <div id="editImage">
                            <img alt=" "  src="images/pencil.png" height="60" width="60"  /> 
                            </div>
                            <br/>
                            <br/>
                            <div class="wrapper">
                                <input type="text" id="username" required placeholder="Username or Email" name="fname" class="form-control" value="<?php echo $_fname ?>">
                                <input type="text" id="username" required placeholder="Username or Email" name="lname" class="form-control" value =" <?php echo $_lname?> ">
                                <input type="text" id="username" required placeholder="Username or Email" name="phone" class="form-control" value ="  <?php 
                                        
                                        if(empty($_contactno))
                                        {
                                            echo "Please update Number";
                                        }
                                        else
                                        echo $_contactno
                                        
                                        ?> ">
                                <input type="text" id="username" required placeholder="Username or Email" name="Email" class="form-control" value =" <?php  echo $_contactno ?> ">
                                <ul class="clearfix">
                                  
                                </ul>
                                <button class="p-bg-color hvr-trim-two" id="btnUpdate" action="profile.php " name = "btnUpdate" >Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-body -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.signUpModal -->

</div>





</body>

</html>