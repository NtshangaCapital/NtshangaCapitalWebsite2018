
<?php
class Validate{


    public function __construct(){
    }
    public function GetTitle(){
        return filter_var($_POST["jobTitle"], FILTER_SANITIZE_STRING);
    }
    public function Getdescription(){
        return filter_var($_POST["jobDescription"], FILTER_SANITIZE_STRING);
    }
}
    
?>