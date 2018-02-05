<?PHP

include_once "C:/xampp/htdocs/Ntshangacapital/customer.php";

include_once "C:/xampp/htdocs/Ntshangacapital/registerdataMapper.php";




try{
    if(isset($_POST['submit'])){
        $customer = new customer( $_POST['FirstName'], $_POST['LastName'], $_POST['ContactNumber'], $_POST['Email']);
        $account =new account(1,0,0,"2018-01-27 ", $_POST['Email'], $_POST['Password']);        
        $registration_datamapper = new registerdataMapper();
        $registration_datamapper->CreateAccount($account);
        $registration_datamapper->Create($Customer);
        header("refresh:2; url=index.php");
    }
}catch(PDOException $e){
    echo 'ERROR: '. "<br>" . $e->getMessage();
}



?>
