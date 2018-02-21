<?php

include 'command.php';
include 'connection.php';
 include 'employee.php';
include 'employeedatamapper.php';
 $employeeId=0;
    // try{


   
            $validate = new Validate();
           
            $msg = '';
            $employee1= 'Location: Employee.html';
            
            if(!isset($_POST['createEmployee'])){
                header($employee1);
            }
            if($validate->FirstNameMissing()){
                $msg = $msg.'fn=First name is required';
            }
            if($validate->LastNameMissing()){
                $msg = ($msg != '') ? $msg.'&&ln=Last name is required' 
                : $msg.'ln=Last name is required';
            }
            if($validate->EmailMissing()){
                $msg = ($msg != '') ? $msg.'&&em=Email is required' 
                : $msg.'em=Email is required';
            }
            if($validate->CellphoneMissing()){
                $msg = ($msg != '') ? $msg.'&&cellphone=Cellphone is required' 
                : $msg.'cellphone=Cellphone is required';
            }
            if($validate->EmplNoMissing()){
                $msg = ($msg != '') ? $msg.'&&EmplNo=EmplNo is required' 
                : $msg.'EmplNo=EmplNo is required';
            }
            
            if($msg != ''){
                header($createEmployee1.'?'.$msg);
            }
            else{
                // 
                $firstname = $validate->GetFirstName();
                $lastname = $validate->GetLastName();
                $email = $validate->GetEmail();
                $password = $validate->GetCellphone();
                $repassword = $validate->GetEmplNo();
                try{
                    // Create Account
                    $Conn = new Connection();
                    $Comm = new Command();
            
                    $lastUpdated = date("Y-m-d h:i:sa");
                    $accountId = 1;
                    $addressId = 1;
                                
                    $employeedatamapper = new employeedatamapper();
                    $employee = new Employees($employeeId,$firstname,$lastname,$emplNo,$email,$Cellphone,$accountId,$addressId,$lastUpdated);
                    $employeedatamapper->Create($employee,$Conn,$Comm);
                  
                //     if($acc_id > 0)
                //     {
                //         $customer = new Customer(0, $acc_id, $firstname, $lastname, null, null, $email);
                //         $customer_datamapper = new CustomerDataMapper();
                //         $customer_id = $customer_datamapper->Save($customer, $Conn, $Comm);
                //         if($customer_id > 0){
                //             header('Location: profile.html');
                //         }else{
                //             header('Location: editprofile.html');
                //         }
                //     }else{
                //         header('Location: createaccount.html?msg=error');
                //     }
                }catch(PDOException $e){
                    echo 'ERROR: '. "<br>" . $e->getMessage();
                }
            }
            
            class Validate{
                
                public function __construct(){
            
                }
                public function GetFirstName(){
                    return filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
                }
                public function GetLastName(){
                    return filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
                }
                public function GetEmail(){
                    return filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                }
                public function GetCellphone(){
                    return filter_var($_POST["password"], FILTER_SANITIZE_STRING);
                }
                public function GetEmplNo(){
                    return filter_var($_POST["repassword"], FILTER_SANITIZE_STRING);
                }
                public function FirstNameMissing(){
                    try{
                        $fn = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
                        if($fn == '' || $fn == null){
                            return true;
                        }
                        return false;
                    }catch(PDOException $e){
                        return null;
                    }
                }
                public function LastNameMissing(){
                    try{
                        $ln = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
                        if($ln == '' || $ln == null){
                            return true;
                        }
                        return false;
                    }catch(PDOException $e){
                        return true;
                    }
                }
                public function EmailMissing(){
                    try{
                        $em = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                        if($em == '' || $em == null){
                            return true;
                        }
                        return false;
                    }catch(PDOException $e){
                        return true;
                    }
                }
                public function CellphoneMissing(){
                    try{
                        $Cellphone = filter_var($_POST["Cellphone"], FILTER_SANITIZE_STRING);
                        if($Cellphone == '' || $Cellphone == null){
                            return true;
                        }
                        return false;
                    }catch(PDOException $e){
                        return true;
                    }
                }
                public function EmplNoMissing(){
                    try{
                        $emplNo = filter_var($_POST["EmplNo"], FILTER_SANITIZE_STRING);
                        if($emplNo== '' || $emplNo== null){
                            return true;
                        }
                        return false;
                    }catch(PDOException $e){
                        return true;
                    }
                }
            }
         



    ?>