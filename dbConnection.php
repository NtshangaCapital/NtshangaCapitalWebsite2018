<?php
class Connection{
    var $dsn = 'mysql:host=localhost;dbname=ntshanga_database';
    public function __constructor(){
    }
    public function Connect(){
        $pdo = new PDO($this->dsn, 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
    }
    
} 

?> 