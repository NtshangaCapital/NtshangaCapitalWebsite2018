<?php
class Employees{

    // PROPERTIES
   


    var $employeeId; 
    var $firstname; 
    var $lastname;
    var $emplNo;
    var $email; 
    var $Cellphone;
    var $accountId; 
    var $addressId; 
    var $lastUpdate; 

    
    // CONSTRUCTORS
    
    public function __construct($employeeId,$firstname,$lastname,$emplNo,$email,$Cellphone,$accountId,$addressId,$lastUpdated)
    {
        $this->employeeId=$employeeId; 
        $this->firstname=$firstname; 
        $this->lastname=$lastname;
        $this->emplNo=$emplNo;
        $this->email=$email; 
        $this->Cellphone=$Cellphone;
        $this->accountId=$accountId; 
        $this->addressId=$addressId; 
        $this->lastUpdate=$lastUpdated; 
       
    }

    // GETTERS AND SETTERS
    public function SetEmployeeId($param){
        $this->employeeId = $param;
    }
    public function GetEmployeeId(){
        return $this->employeeId;
    }
    public function Setfirstname($param){
        $this->fisrstname = $param;
    }
    public function Getfirstname(){
        return $this->firstname;
    }

    public function Setlastname($param){
        $this->lastname = $param;
    }
    public function Getlastname(){
        return $this->lastname;
    }

    public function SetEmplNo($param){
        $this->EmpNo = $param;
    }
    public function GetEmplNo(){
        return $this->EmplNo;
    }

    public function SetEmail($param){
        $this->email = $param;
    }
    public function GetEmail(){
        return $this->email;
    }

    public function SetCellphone($param){
       $this->Cellphone= $param;
    }
    public function GetCellphone(){
        return $this->Cellphone;
    }
    public function SetaccountId($param){
       $this->accountId = $param;
    }
    public function GetaccountId(){
        return $this->accountId;
    }
    public function SetAddressId($param){
        $this->AddressId = $param;
    }
    public function GetAddressId(){
        return $this->AddressId;
    }
    public function SetLastUpdated($param){
        $this->LastUpdated = $param;
    }
    public function GetLastUpdate(){
        return $this->LastUpdated;
    }
}
?>