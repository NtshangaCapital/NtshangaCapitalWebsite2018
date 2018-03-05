<?php
class Vacancy{

    // PROPERTIES
   

    var $Id;
    var $jobTitle; 
    var $jobDescription; 
    

    
    // CONSTRUCTORS
    
    public function __construct($Id,$jobTitle,$jobDescription)
    {
        $this->Id=$Id;
        $this->jobTitle=$jobTitle; 
        $this->jobDescription=$jobDescription; 
        
       
    }

    // GETTERS AND SETTERS
    public function SetId($param){
        $this->Id= $param;
    }
    public function GetId(){
        return $this->Id;
    }
    public function SetjobTitle($param){
        $this->jobTitle = $param;
    }
    public function GetjobTitle(){
        return $this->JobTitle;
    }
    public function SetjobDescription($param){
        $this->jobDescription = $param;
    }
    public function GetjobDescription(){
        return $this->jobDescription;
    }

   
}
?>