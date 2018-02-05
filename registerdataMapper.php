<?php

include_once "C:/xampp/htdocs/Ntshangacapital/account.php";

include_once "C:/xampp/htdocs/Ntshangacapital/customer.php";

include_once "C:/xampp/htdocs/Ntshangacapital/CreateAccountCommand.php";

include_once "C:/xampp/htdocs/Ntshangacapital/registrationCommand.php";


include_once "C:/xampp/htdocs/Ntshangacapital/dbConnection.php";

include_once "Icrud.php";

class registerdataMapper implements ICRUD{
public function _constructor()
{

}
 function CreateAccount($account)
{
    $update = date_default_timezone_get();
    $AccountComm = new Command1();
    $conn = new Connection();
    try{
        $stm = $conn->Connect()->prepare($AccountComm ->SqlInsertAccountDetails);
        if(!$stm)
        {
            $stm->execute(
                [ 'isConfirmed' => 0
                , 'isLocked' => 0
                , 'accountTypeId' => 1
                , 'lastUpdate'=>date('m/d/Y h:i:s a', time())
                , 'Username'=>$_POST["Username"]
                , 'Password'=>$_POST["Password"]
                ]);

        }
            
    }catch(PDOException $e){
        echo 'ERROR: ' ."<br>" . $e->getMessage();
    }
}

 function Create($customer)
{
   $comm = new RegistrationCommand();
   $conn = new Connection();
   try{
    $stmt = $conn->Connect()->prepare($comm->SqlInsertDetails);
        $stmt->execute(
            [ 'FirstName' =>$_POST["FirstName"]
            , 'LastName' => $_POST["LastName"]
            , 'ContactNumber' =>$_POST["ContactNumber"]
            , 'AddressId'=>1
            , 'LastUpdate'=>date('m/d/Y h:i:s a', time())
            , 'accountId'=>1
            , 'Email'=>$_POST["Email"]
            
            ]);

        
}catch(PDOException $e){
    echo 'ERROR: ' ."<br>" . $e->getMessage();
}


}
public  function ReadById($username){
    $Comm = new RegistrationCommand();
    $Conn = new Connection();
    try{
        $stmt = $Conn->Connect()->prepare($Comm->SqlSelectCustomerbyId);
        $stmt->execute([':Email' => $username]);
        $posts = $stmt->fetchAll();
        return $posts;
//     //echo'USER EXIST'; 
if ($rows==1){ 
    while($rs = mysql_fetch_array($posts)){  
         $firstname = $rs["Firstname"]; 
         $lastname = $rs["LastName"]; 
         $phone =$rs["ContactNumber"]; 
         $email=$rs["Email"]; 
     } 
    }


    }catch(PDOException $e){
        echo 'ERROR: ' ."<br>" . $e->getMessage();
        return null;
    }
}



  }





?>