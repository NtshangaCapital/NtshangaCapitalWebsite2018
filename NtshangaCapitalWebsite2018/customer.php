<?php
 class customer{
    var $Id;
    var $FirstName;
    var $LastName;
    var $ContactNumber;
    var $AddressId;
    var $Lastupdate;
    var $AccountId;
    var $Email;
    //var $QuestionId;
    //var $AnswerId;


 public function _Constructor($param_Id,$param_FirstName,$param_LastName,$param_ContactNumber,$param_Email,$param_AddressId,$param_Lastupdate,$param_Accountid)//$param_QuestionId,$param_AnswerId)
 {
     
     $this->Id =$param_Id ;
     $this->Firstname = $param_FirstName;
     $this->LastName=$param_LastName ;
     $this->ContactNumber =$param_ContactNumber;
     $this->Email = $param_Email;
     $this->Address = $param_AddressId;
     $this->Lastupdate =$param_Lastupdate ;
     $this->Accountid=$param_Accountid ;
    // $this ->QuestionId =$param_QuestionId ; 
    //$this ->AnswerId =$param_AnswerId ;
     


 }



    public function setId($param)
    {
        $this->Id=$param;
    }

    public function getId($param)
    {
        return $this->Id;
    }


    public function setFirstname($param)
    {
        $this ->Firstname=$param;
    }
    public function getfirstname($param)
    {
        return $this->Firstname;
    }
   
 public function setLastname($param)
 {
     $this->LastName=$param;
 }
 
 

 public function getLastname($param)
 {
     return $this->LastName;
 }


 public function setContactnumber($param)
 {
     $this->Contactnumber=$param;
 }
 public function getContactnumber($param)
 {
     return $this->Contactnumber;
 }

 public function setEmail($param)
 {
     $this->email=$param;
 }
 public function getEmail($param)
 {
     return $this->Email;
 }

 public function setAddress($param)
 {
     $this->Address=$param;
 }
 public function getAddress($param)
 {
     return $this->Address;
 }

 public function setLastupdate($param)
 {
     $this->Lastupdate=$param;
 }
 public function getLastupdate($param)
 {
     return $this->Lastupdate;
 }
 public function setAccountid($param)
 {
     $this->Accountid=$param;
 }
 public function getAccountid($param)
    {
        return $this->Accountid;
    }

  //  public function setQuetionId($param)
   // {
   //     $this->QuestionId=$param;
  //  }

    //public function getQuestionId($param)
   // {
  //      return $this->QuestionId;
  //  }
   // public function setAnswerId($param)
  //  {
  //      $this-$AnswerId=$param;
  //  }

  //  public function getAnswerId($param)
  //  {
   //     return $this->AnswerId;
 //   }



}




?>