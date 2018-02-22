<?php
// Model for testimonial
class Testimonial{
    var $Id;
    var $AccountId;
    var $Text;
    public function __construct(){

    }
    //----------------------
    public function GetId(){
        return $this->Id;
    }
    public function SetId($Param){
        $this->Id = $Param;
    }
    //-----------------------------
    public function GetAccountId(){
        return $this->AccountId;
    }
    public function SetAccountId($Param){
        $this->AccountId = $Param;
    }
    //------------------------
    public function GetText(){
        return $this->Text;
    }
    public function SetText($Param){
        $this->Text = $Param;
    }
}
?>