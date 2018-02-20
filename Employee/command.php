<?php
    class Command{

        // Attributes
        public $db;
        // INSERTING AND SELECTING INFORMATION OF EMPLOYEE
        public $SqlInsertEmployee = "INSERT INTO  employee(firstname,lastname,emplNo,email,Cellphone,AccountId,AddressId,lastUpdated) 
        VALUES(?,?,?,?,?,?,?,?)";
        public $SqlSelectEmployeeById = "SELECT * FROM employee WHERE EmployeeId ='EmployeeId'";
        public $SqlSelectAllEmployees = "SELECT * FROM employee";
        
        //UPDATE EMPLOYEES INFORMATION
        public $SqlUpdateEmployee = "UPDATE employee set firstname=?,lastname=?,emplNo=?,email=?,Cellphone=?,AccountId=?,AddressId=?,lastUpdated=?) 
        Where EmployeeId= ?";

        //DELETE EMPLOYEES DETAILS
        // $SqlDeleteEmployeeById="DELETE * FROM EMPLOYEE WHERE EmployeeId=";
        // Constructor
        public function __constructor(){
            
        
        }
    }
?>