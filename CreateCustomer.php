<?PHP
include 'customer.php';
include 'registerdataMapper.php';
include 'command1.php';
try{
    if(isset($_POST['submit'])){

    $firstname = $_POST['FirstName'];
    $Lastname = $_POST['LastName'];
    $Contactnumber = $_POST['ContactNumber'];
    $email = $_POST['Email'];
    $password = $_POST['password'];

    $timezone = date_default_timezone_get();

    //$account =new account(1,0,0,$timezone,$email, $password);        
         //$customer ="";
         $account ="";
        //$customer = new customer($firstname,$Lastname,$Contactnumber,1,$timezone,1,$email);
        $registration_datamapper = new registerdataMapper();
        $registration_datamapper->CreateAccount($account);
       // $registration_datamapper->Create($customer);
        //header("refresh:2; url=index.php");
    }
    else{
        echo "not saved";
    }
    
}catch(PDOException $e){
    echo 'ERROR: '. "<br>" . $e->getMessage();
}



?>

