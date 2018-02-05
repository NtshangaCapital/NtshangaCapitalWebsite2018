<?php

include_once "C:/xampp/htdocs/Ntshangacapital/dbConnection.php";

class Command1{

    var $SqlInsertAccountDetails = "INSERT INTO account(isConfirmed,isLocked,accountTypeId,lastUpdate,Username,'Password') VALUES(:isConfirmed,:isLocked,:accountTypeId,:lastUpdate,:Username,:'Password')";
    var $SqlSelectAccountdetailsbyId = "SELECT * FROM account WHERE accountId = :accountId";
    var $SqlSelectAccountDetails = "SELECT * FROM account";
    var $SqlSelectLastAccountId ="SELECT accountId FROM account";
   
    public function __constructor(){
    }
    function getAccountId()
    {
     if (mysqli_query($conn, $SqlSelectLastAccountId)) {
    $last_id = mysqli_insert_id($conn);
}   else {

    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}
    }
    
   

}
?>