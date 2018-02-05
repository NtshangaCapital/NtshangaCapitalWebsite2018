<?php
class  Command{
    var $SqlInsertDetails = "INSERT INTO account(accountId, accountTypeId,isConfirmed,isLocked,lastUpdate,Password,Username) VALUES(:accountId, :accountTypeId, :isConfirmed, :lastUpdate,:Password,)";
    var $SqlSelectCustomerbyId = "SELECT * FROM account WHERE accountId = :accountId";
    var $SqlSelectallCustomer = "SELECT * FROM account";

    
    public function __constructor(){

    }




}
?>