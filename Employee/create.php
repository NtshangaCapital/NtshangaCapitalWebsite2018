<?php
 include 'employee.php';
include 'EmployeeDataMapper.php';
include 'connection.php';
include 'command.php';
 
    // try{


        if(isset($_POST['submit'])){
            $employeeId=0;
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $emplNo=$_POST['emplNo'];
            $Cellphone=$_POST['Cellphone'];
            $addressId= 1;
            $accountId = 1;
            $lastUpdated= date("Y-m-d h:i:sa");
            $Conn = new Connection();
            $Comm= new Command();
            $EmployeeDataMapper = new EmployeeDataMapper();
            $employee = new Employees($employeeId,$firstname,$lastname,$emplNo,$email,$Cellphone,$accountId,$addressId,$lastUpdated);
            $EmployeeDataMapper->Create($employee,$Conn,$Comm);
            // if(isset($EmployeeDataMapper))
            // {
            //     echo("Employee detail successfully inserted");
           }

         
    
        ?>