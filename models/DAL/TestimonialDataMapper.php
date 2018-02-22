<?php
// Data Mapping
class TestimonialDataMapper{
    public function __construct(){

    }
    public function Save($Testimony, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlInsertTestimony);
            $stmt->bindParam(2, $Testimony->AccountId, PDO::PARAM_INT);
            $stmt->bindParam(2, $Testimony->Text, PDO::PARAM_STR);
            $stmt->execute();
            $id = $Conn->lastInsertId();
            return $id;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return 0;
        }
    }

    public function Update($Testimony, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlUpdateTestimony);
            $stmt->bindParam(1, $Testimony->Text, PDO::PARAM_STR);
            $stmt->bindParam(2, $Testimony->Id, PDO::PARAM_INT);
            $stmt->execute();
            $id = $Conn->lastInsertId();
            return $id;
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return 0;
        }
    }

    public function GetAll($Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectAllTestimonies);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return null;
        }
    }
    public function GetById($Id, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectTestimonyById);
            $stmt->bindParam(1, $Id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $e){
            $Error = new errorlogger();
            echo $e->getMessage();
            $Error->GetErrorInfo($e->getMessage());
            return null;
        }
    }
}
?>