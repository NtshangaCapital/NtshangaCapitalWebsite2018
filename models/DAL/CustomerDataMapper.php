<?PHP
//session_start();
//$username = $_SESSION['username'];
?>

<?php
class CustomerDataMapper{

    public function __construct(){

    }

    public function Save($Customer,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlInsertCustomer);
            $stmt->execute(
                ['FirstName' => $Customer->FirstName
                , 'LastName' => $Customer->LastName
                , 'ContactNumber' => $Customer->Phone
                , 'AddressId' => $Customer->AddressId
                , 'LastUpdate' => date('y/m/d')
                , 'AccountId' => $Customer->AccountId
                , 'Email' => $Customer->Email]);
                return $Conn->lastInsertId();
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return null;
        }

    }
    
    public function GetCustomerbyUsername($username,$Conn,$Comm){
        try{

            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectCustomerByusername);
              $stmt->bindParam(1, $username, PDO::PARAM_STR);
              $stmt->execute();
              return $stmt->fetchAll();
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return null;
        }
        finally{
            
        }
    }
           
    public function UpdateUserDetails($Conn,$Comm,$FirstName,$LastName,$ContactNumber,$Email)
    {
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlUpdateCustomerByUsername);
                  $stmt->bindValue(1, $FirstName, PDO::PARAM_STR);
                  $stmt->bindValue(2, $LastName, PDO::PARAM_STR);
                  $stmt->bindValue(3, $ContactNumber, PDO::PARAM_STR);
                  $stmt->bindValue(4, $Email, PDO::PARAM_STR);
                  $stmt->bindValue(5, $Email, PDO::PARAM_STR);
                   
                  $stmt->execute();
                 return true;
        }catch(PDOException $e)
        {
              $Error = new errorlogger();
             echo $e->getMessage();
             $Error->GetErrorInfo($e->getMessage());
             return false;
            }
        finally{



        }
    }
    public function UpdateUserProfilePicture($Conn,$Comm,$Email,$ProfilePicture)
    {
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlCustomerProfilePic);
            $stmt->bindValue(1, $ProfilePicture, PDO::PARAM_LOB);
            $stmt->bindValue(2, $Email, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        }catch(PDOException $e)
        {
            $Error = new errorlogger();
             echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
             return null;
     
        }
    }
    
    public function GetCustomer($CustId,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SQLSelectCustomer);
            $stmt->bindValue(1, $CustId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
    public function GetCustomers($Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SQLSelectCustomers);
            $stmt->execute();
            return $Conn->fetchAll();
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
    public function GetCustomerFirstAndLastName($AccId,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SQLCustomerFirstAndLastNameByAccId);
            $stmt->bindValue(1, $AccId, PDO::PARAM_INT);
            $stmt->execute();
            return $Conn->fetch();
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }


    // public function GetCustomerID($Conn,$Comm,$username)
    // {
    //     try{
    //             $stmt = $Conn->Connect()->prepare($Comm->SqlCustomerID);
    //             $stmt->bindParam(1, $username, PDO::PARAM_STR);
    //             $stmt->execute();
    //             return $stmt->fetch();

    //     }catch(PDOException $e)
    //     {l;
    //     }
    // }
    //             return nul
    

}
?>
