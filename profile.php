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
$_lastupdate;

foreach($results as $result)
{
    $_fname = $result->FirstName;
    $_lname = $result->LastName;
    $_contactno = $result->ContactNumber;
    $_email = $result->Email;
    $_lastupdate = $result->LastUpdate;
    $image_data = $result->ProfilePicture;

}

    if(isset($_POST["btnUpdate"]))
    {
        $FirstName = $validate->GetFirstName();
        $LastName = $validate->GetLastName();
        $ContactNumber = $validate->GetContactNumber();
        $email = $validate->GetEmail();
        $UpdateUser = $custusername_datamaper->UpdateUserDetails($Conn,$Comm,$FirstName,$LastName,$ContactNumber,$Email);
        if(isset($UpdateUser))
        {

            // echo '<div class="alert success">
            // <span class="closebtn">&times;</span>  
            // <strong>Success!</strong> You have successfully updated your details.
            // </div>';
        }
        else{
//            echo' <div class="alert warning">
//   <span class="closebtn">&times;</span>  
//   <strong>Warning!</strong> data not saved due to network issues.
// </div>';
        }
     
    }
    else{
    //     echo '<div class="alert">
    //     <span class="closebtn" onclick="this.parentElement.style.display=none;">&times;</span> 
    //     <strong>Danger!</strong> Something went wrong while updating please try again after 5 minutes.
    //   </div>';
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
        return filter_var($_POST["contactno"],FILTER_SANITIZE_STRING);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<style>
    .alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>UserProfile</title>
        <!-- Favicon -->
		 <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png"> 
        <link rel="stylesheet" type="text/css" href="css/style1.css"> 
        <!-- <link rel="stylesheet" type="text/css" href="css/style.css">    -->

        <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/v.js"></script>
     

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 


</head>
<body>
<div class="div-label-span div-margin-bottom-5px">
            <!-- Logo -->
				<div class="logo float-left tran4s" style="background-color:#00d747;margin-top:-20px;padding:2%;">
                        <a href="index.html">
                            <img src="images/logo/logo_white.png" width="200" alt="Logo">
                        </a>
                    </div>
            <div><h2>Profile Page</h2></div>
        </div>
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info"> <?php echo date('d M Y ') ?> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Your Details</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <div   align="center"> <img alt="User Pic" src="data:image/jpeg;base64,<?php  echo base64_encode( $image_data); ?>" class="img-circle img-responsive" width ="250px"  />
              </div>
                
              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>First Name:</td>
                        <td><?php echo $_fname    ?></td>
                      </tr>
                      <tr>
                        <td>Last Name:</td>
                        <td><?php  echo $_lname    ?></td>
                      </tr>
                      <tr>
                        <td>Contact Number</td>
                        <td><?php    
                         if(empty($_contactno))
                         {
                             echo "Please update Number";
                         }
                         else
                         echo $_contactno
                        ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com"><?php echo $_email?></a></td>
                      </tr>
                        <tr>
                        <!-- <td>Home Address</td>
                        <td> <?php  echo $_email ?> </td> -->
                      </tr>
                      <tr>
                        <td>Last Date of Modification</td>
                        <td><?php echo $_lastupdate?></a></td>
                       </tr>
                        <!-- <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile) -->
                        </td>
                           
                      </tr> 
                     
                    </tbody>
                  </table>
                  <a href="editProfile.php" class="btn btn-warning">Edit</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                       
                    </div>
            
          </div>
        </div>
      </div>

    <script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
</body>
</html>