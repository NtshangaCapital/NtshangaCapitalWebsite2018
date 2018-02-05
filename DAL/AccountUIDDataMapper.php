<?php

class AccountUIDDataMapper{
    public function __construct(){

    }
    public function CreateUID($AccId, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlCreateUID);
            $stmt->bindParam(1, $AccId, PDO::PARAM_INT);
            $stmt->execute();
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
        }
    }
    public function DeleteUID($AccId, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlDeleteUID);
            $stmt->bindParam(1, $AccId, PDO::PARAM_INT);
            $stmt->execute();
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
        }
    }
    public function SelectUID($AccId, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectUID);
            $stmt->bindParam(1, $AccId, PDO::PARAM_INT);
            $stmt->execute();
            $uid = $stmt->fetchColumn();
            return $uid;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return 0;
        }finally{

        }
    }
    public function GetAccountId($uid, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectAccountId_UID);
            $stmt->bindParam(1, $uid, PDO::PARAM_STR);
            $stmt->execute();
            $accId = $stmt->fetchColumn();
            return $accId;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return 0;
        }
        finally{
            
        }
    }
}
?>