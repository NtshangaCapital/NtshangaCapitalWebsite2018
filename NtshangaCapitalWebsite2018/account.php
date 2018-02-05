<?php

class account{

var $accountId;
var $isConfirmed;
var $isLocked;
var $AccountType;
var $LastUpdate;
var $Username;
var $Password;

public function _Constructor($param_accountId,$param_isConfirmed,$param_isLocked,$param_AccountType,$param_LastUpdate,$param_Username,$param_Passsword)
{
   $this->accountId =$param_accountId;
   $this->isConfirmed=$param_isConfirmed;
   $this->isLocked =$param_isLocked;
   $this->AccountType = $param_AccountType;
   $this->LastUpdate =$param_LastUpdate ;
   $this->Username = $param_Username;
   $this->Password = $param_Passsword;

}



public function setId($parama)
{
    $this->$accountId=$param;

}

public function getId($param)
{
    return $this->accountId;
}


public function setisConfirmed($parama)
{
    $this->isConfirmed=$param;

}

public function getisConfirmed($param)
{
    return $this->isConfirmed;
}



public function setisLocked($parama)
{
    $this->isLocked=$param;

}

public function getisLocked($param)
{
    return $this->isLocked;
}

public function setAccountType($parama)
{
    $this->AccountType=$param;

}

public function getAccountType($param)
{
    return $this->AccountType;
}


public function setLastUpdate($parama)
{
    $this->LastUpdate=$param;

}

public function getLastUpdate($param)
{
    return $this->LastUpdate;
}

public function setUsername($parama)
{
    $this->Username=$param;

}

public function getUsername($param)
{
    return $this->Username;
}

public function setPassword($parama)
{
    $this->Password=$param;

}

public function getPassword($param)
{
    return $this->Password;
}







}



?>