<?php

class ArticleDataMapper{
    public function ArticleDataMapper(){

    }

    public function UpdateArticle($Conn, $Comm, $ArticleId, $Title, $desrciption, $image, $date){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->UpdateArticle);
            $stmt->bindParam(1, $ArticleId, PDO::PARAM_INT);
            $stmt->bindParam(1, $Title, PDO::PARAM_STR);
            $stmt->bindParam(2, $Description, PDO::PARAM_STR);
            $stmt->bindParam(3, $image, PDO::PARAM_LOB);
            $stmt->bindParam(4, $date, PDO::PARAM_STR);
            $stmt->execute();
           
            return true;
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }

    public function SaveArticle($title,$description,$image,$date,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->InsertArticle);
            $stmt->bindParam(1, $title, PDO::PARAM_STR);
            $stmt->bindParam(2, $description, PDO::PARAM_STR);
            $stmt->bindParam(3, $image, PDO::PARAM_LOB);
            $stmt->bindParam(4, $date, PDO::PARAM_STR);
            $stmt->execute();
            $id = $Conn->lastInsertId();
            return $stmt;
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
    public function InsertArticle($Article, $Conn, $Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->InsertArticle);
            $stmt->bindParam(1, $Article->title, PDO::PARAM_STR);
            $stmt->bindParam(2, $Article->description, PDO::PARAM_STR);
            $stmt->bindParam(3, $Article->image, PDO::PARAM_LOB);
            $stmt->bindParam(4, $Article->date, PDO::PARAM_STR);
            $stmt->execute();
            $id = $Conn->lastInsertId();
            return $id;
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
    public function GetArticle($ArticleId,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectArticleById);
            $stmt->bindValue(1, $ArticleId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
    public function GetArticles($Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectArticles);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
        
    }
    public function DeleteArticle($Id, $Conn, $Comm) {
        $stmt = $Conn->Connect()->prepare($Comm->SqlDeleteArticle);
        $stmt->bindValue(1, $Id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }

     // get row
     public function getRow($Conn, $query, $params = []){
        try {
            $stmt = $this->$Conn->Connect()->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function GetComment($CommId,$Conn,$Comm){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectCommentId);
            $stmt->bindValue(1, $ArticleId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return 0;
        }
    }
}
