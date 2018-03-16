<?php
Session_Start();
session_id();

if(!isset($_SESSION['user'])){
    header('Location: Login.html');
}

include ('models/DAL/Connection.php');
include ('models/DAL/Command.php');
include ('models/DAL/CustomerDataMapper.php');
include ('models/DAL/ProvinceDataMapper.php');
include ('models/DAL/CityDataMapper.php');
include ('models/DAL/AddressDataMapper.php')


?>

<?php 

$username = $_SESSION['user'];
// $Email = $_SESSION['user'];

$Conn = new Connection();
$Comm = new Command();
$validate = new validate();

$custusername_datamaper = new CustomerDataMapper();
$province_datamapper = new ProvinceDataMapper();
$city_datamapper = new CityDataMapper();
$address_datamapper = new AddressDataMapper();


$results = $custusername_datamaper->GetCustomerbyUsername($username,$Conn, $Comm);
$province = $province_datamapper->GetProvincies($Conn,$Comm); 
$city  = $city_datamapper->GetCities($Conn,$Comm);

$_Id;
$UpdateUser;
$_fname;
$_lname;
$_contactno;
$_email;
$_lastupdate;
$image_data;
$userImage;
$defaultImage = 'images/logo/Face_holder.gif';

foreach($results as $result)
{
    $_Id = $result->CustomerId;
    $_fname = $result->FirstName;
    $_lname = $result->LastName;
    $_contactno = $result->ContactNumber;
    $_email = $result->Email;
    $_lastupdate = $result->LastUpdate;
    $image_data = $result->ProfilePicture;
    
}

$country = $custusername_datamaper->GetCountry($Conn,$Comm);

$countryname;
$countryId;
$city_id;

foreach($country  as $Countries)
{
         $countryId = $Countries->countryId;
         $countryname = $Countries->country;

}
$provinceId;
$provincename;

foreach($province as $provinces)
{
    $provinceId = $provinces->provinceId;
    $provincename = $provinces->province;

}


    if(isset($_POST["btnUpdate"]))
    {
        
        $FirstName = $validate->GetFirstName();
        $LastName = $validate->GetLastName();
        $ContactNumber = $validate->GetContactNumber();
        $email = $validate->GetEmail();
        $address = $validate->GetAddress();
        $postalcode = $validate->GetPostalCode();
        $cityId=$_POST['city'];
        $CustomerId = $_Id;

        echo "<script>
        function run() {
            document.getElementById('srt').value = document.getElementById('city').value;
        }
    </script>";


        $UpdateUser = $custusername_datamaper->UpdateUserDetails($Conn,$Comm,$FirstName,$LastName,$ContactNumber,$email);

        $UpdateAddress = $address_datamapper->UpdateAddress($address,$postalcode,$cityId,$CustomerId,$Conn,$Comm);
       
       

        echo "customerid:".$CustomerId;
        echo"cityid;".$_POST["city"];


        //  header("Location: profile.php");
    }
  

//Update Customer Profile Picture
            if(isset($_POST["btnimage"]) && isset($_FILES['fileToUpload'] ))
            {

                function get_file_extension($file_name)
            {
                return pathinfo($file_name , PATHINFO_EXTENTION);
            }

            function get_file_extension1($file_name)
            {
                return (explode('.', $file_name));
            }

            function getfilesize($file_name)
            {
                return (filesize($file_name));
            }

         
           
            $path = $_FILES['fileToUpload']['name'];
            $path2 =$_FILES['fileToUpload']['tmp_name'];
            $tmp = explode('.', $path );
            $ext = end($tmp);
         
            $filesize = getfilesize($path2);
            $ProfilePircture = file_get_contents($_FILES['fileToUpload']['tmp_name']);

                    $Email = $_email;
                    $UpdatePicture = $custusername_datamaper->UpdateUserProfilePicture($Conn,$Comm,$Email,$ProfilePircture);
            
                    if($UpdatePicture)
                    {
                        header("Refresh:0; url=EditProfile.php");
                        
                        }
                    else{
                        echo '<div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display=none;">&times;</span> 
                    <strong>Danger!</strong> Something went wrong while updating please try again after 5 minutes.
                </div>';         
                    }
                     
                //   }
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
                return filter_var($_POST["Email"], FILTER_SANITIZE_STRING);
            }
            public function GetContactNumber(){
                return filter_var($_POST["contactno"],FILTER_SANITIZE_STRING);
            }
            public function GetPictutre(){
                return filter_var($_FILES["fileToUpload"],FILTER_SANITIZE_BLOB);
            }
            public function GetAddress(){
                return filter_var($_POST["address"], FILTER_SANITIZE_STRING);
            }
            public function GetPostalCode(){
                return filter_var($_POST["postalcode"], FILTER_SANITIZE_STRING);
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
        <link rel="stylesheet" type="text/css" href="css/navbar.css"> 

        <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/v.js"></script>
     
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 


</head>
<body style="background:url('images/logo/images.jpg')  background-repeat:norepeat">

<div class="div-label-span div-margin-bottom-5px">
            <!-- Logo -->
				<div class="logo float-left tran4s" style="background-color:#00d747;margin-top:-20px;padding:2%;">
                        <a href="index.html">
                            <img src="images/logo/logo_white.png" width="200" alt="Logo">
                        </a>
                    </div>
                    <div class="sidenav">
  <a href="#">About</a>
  <a href="#">My Services</a>
  <a href="#">Add Service </a>
  <a href="#">Support</a>
</div>
                  
            <div><h2>Edit Profile</h2></div>
        </div>
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
        <A href="index.html" onclick="return confirm('Are you sure to logout?');" id ="logout" >Logout</A>
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

             
<div>
<form id="updateProfilePicture " action ="EditProfile.php " method ="POST" enctype="multipart/form-data">
<input type="file" name="fileToUpload" id="fileToUpload" >
</div>
<br/>
            <input type ="submit" class="btn btn-warning" id="btnimage" name ="btnimage" value ="Change image" onclick = "ValidateFileUpload(event)";  >
            <!-- </form> -->
              </div>
              <br/>
                
                <!-- <form id ="UpdateDetails"    action ="Profile.php "  method="post"> -->
                <div class=" col-md-9 col-lg-9 "> 
                   
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>First Name:</td>
                        <td> <input type ="text" value ="<?php  echo  $_fname ?> "  name ="fname"  ></td>
                      </tr>
                      <tr>
                        <td>Last Name:</td>
                        <td>  <input type ="text" value ="<?php  echo $_lname ?> "  name="lname"  >  </td>
                      </tr>
                      <tr>
                        <td>Contact Number</td>
                        <td> <input type ="text" value ="<?php if(empty($_contactno))
                         {
                             echo "Please update Number";
                         }
                         else
                         echo $_contactno ?> " name ="contactno" >     
                         
                          </td>
                      </tr>
                    
                      </tr>
                         <tr>
                             <tr>
                        <td>Email</td>
                        <td>  <input type ="text" value ="<?php  echo  $_email?> "  name="Email"  >  </td>
                      </tr>

                       <tr>
                        <td> Country </td>
                        <td> 
                        <select id ="county" name ="country"> 
                        <option value="">---Select Country--</option>

                        <?php 
                        foreach($country  as $Countries){?>
                        <option  Value = "<?php $Countries->countryId ?>" > <?php echo $Countries->country ?> </option>
                    
                        <?php } ?>
                        </select>
                        </td>
                      </tr>
                      <tr>
                             <tr>
                        <td>Address</td>
                        <td>  <input type ="text" value ="<?php  echo  $_email?> "  name="address"  >  </td>
                      </tr>
                      <tr>
                             <tr>
                        <td>Postal Code</td></td>
                        <td>  <input type ="text" value ="<?php  echo  $_email?> "  name="postalcode"  >  </td>
                      </tr>
                      <tr>
                        <td> City </td>
                        <td> 
                        <select id ="city" name ="city">
                        <option value="">---Select City--</option>
                        <?php 

                        foreach($city  as $Cities){?>
                        <option  Value = "<?php $Cities->cityId ?>" > <?php echo $Cities->city ?> </option>
                        
                        <?php } ?>
                        </select>
                        </td>
                      </tr>
                      <tr>
                        <td> Province </td>
                        <td> 
                        <select id ="province" name ="province"> 
                        <option value="">---Select Province--</option>

                        <?php 
                        foreach($province  as $provinces){?>
                        <option  Value = "<?php $provinces->provinceId ?>" > <?php echo $provinces->province ?> </option>
                        <?php } ?>
                        </select>
                        <?php 
                        echo $_REQUEST["province"] ;
                        ?>
                        </td>
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
                  <input  id = "btnUpdate" type ="submit" class="btn btn-warning" value = "Save Cahnges" name = "btnUpdate" onclick = "getid()";>

                </div>
                </form>
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

<script>
    function getlength(){
var picfile =$("#fileUpload")[0].file.length;
if(picfile === 0)
{
    alert("no file selected");
}

    }

</script>



<script>
function deleletconfig(event){
  
    if( document.getElementById("fileToUpload").files.length == 0 ){
        alert ("cannot update without record")
        event.preventDefault();

}
}
</script>
<script>
    function getid()
    {
        var e = document.getElementById('city').text;
        alert(e);
    }
</script>

<SCRIPT type="text/javascript">
    function ValidateFileUpload(even) {
        var fuData = document.getElementById('fileToUpload');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");
             event.preventDefault();

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
                event.preventDefault();


            }
        }
    }
</SCRIPT>



        
    

</body>
</html>