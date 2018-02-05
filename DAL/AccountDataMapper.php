<?php
include ('errorlogger.php');
class AccountDataMapper{

    public function __construct(){
        
    }
    public function Save($Account,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlInsertAccount);
            $stmt->execute(['isConfirmed' => $Account->IsConfirmed
                , 'isLocked' => $Account->IsLocked
                , 'accountTypeId' => $Account->AccountType
                , 'lastUpdate' => $Account->LastUpdate
                , 'Username' => $Account->UserName
                , 'Password' => $Account->Password]);
                $id = $Conn->lastInsertId();
                return $id;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return 0;
        }
    }
    public function Exist($email, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->CheckIfAccExists);
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->execute();
            $condition = ($stmt->fetchColumn()) ? true : false;
            return $condition;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return false;
        }
    }
    public function PasswordMatch($email, $password, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->CheckIfPassMatch);
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->bindParam(2, $password, PDO::PARAM_STR);
            $stmt->execute();
            $condition = ($stmt->fetchColumn()) ? true : false;
            return $condition;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return false;
        }
    }
    public function IsConfirmed($email, $Conn, $Comm){
        try{
            $int = 1;
            $stmt = $Conn->Connect()->prepare($Comm->CheckIfPassMatch);
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->bindParam(2, $int, PDO::PARAM_INT);
            $stmt->execute();
            $condition = ($stmt->fetchColumn()) ? true : false;
            return $condition;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return false;
        }
    }
    public function Confirm($accId, $Conn, $Comm){
        try{
            $int = 1;
            $stmt = $Conn->Connect()->prepare($Comm->SqlConfirmAccount);
            $stmt->bindParam(1, $int, PDO::PARAM_INT);
            $stmt->bindParam(2, $accId, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return false;
        }
    }
    public function IsLocked($email, $Conn, $Comm){
        try{
            $int = 1;
            $stmt = $Conn->Connect()->prepare($Comm->CheckIfPassMatch);
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->bindParam(2, $int, PDO::PARAM_INT);
            $stmt->execute();
            $condition = ($stmt->fetchColumn()) ? true : false;
            return $condition;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return false;
        }
    }
    public function GetAccountId($email, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SelectAccountId);
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->execute();
            $AccountId = $stmt->fetchColumn();
            return $AccountId;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return 0;
        }
    }
    public function ChangePassword($accId, $NewPassword, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlUpdatePassword);
            $stmt->bindParam(1, $NewPassword, PDO::PARAM_STR);
            $stmt->bindParam(2, $accId, PDO::PARAM_INT);
            $stmt->execute();
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
        }
    }
    public function ChangeUsername($accId, $NewEmail, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlUpdateUserName);
            $stmt->bindParam(1, $NewEmail, PDO::PARAM_STR);
            $stmt->bindParam(1, $accId, PDO::PARAM_INT);
            $stmt->execute();
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
        }
    }
}
?>