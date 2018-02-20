<?php
// include 'command.php';
// include 'connection.php'

                class EmployeeDataMapper{
                    public function __constructor(){
                    }
                    // FUNCTIONS
                    // INSERT EMPLOYEE DETAILS
                    function Create($employee,$Conn,$Comm){
                      
                        try{
                
                            $stmt = $Conn->Connect()->prepare($Comm->SqlInsertEmployee);
                                $stmt->bindParam(1, $employee->firstname, PDO::PARAM_STR);
                                $stmt->bindParam(2, $employee->lastname, PDO::PARAM_STR);
                                $stmt->bindParam(3, $employee->emplNo, PDO::PARAM_STR);
                                $stmt->bindParam(4, $employee->email, PDO::PARAM_STR);
                                $stmt->bindParam(5, $employee->Cellphone, PDO::PARAM_STR);
                                $stmt->bindParam(6, $employee->accountId, PDO::PARAM_INT);
                                $stmt->bindParam(7, $employee->addressId, PDO::PARAM_INT);
                                $stmt->bindParam(8, $employee->lastUpdate, PDO::PARAM_STR);
                                $stmt->execute();
                       
                        }catch(PDOException $e){
                            echo 'ERROR: ' ."<br>" . $e->getMessage();
                        }
                    }
                    //SELECT EMPLOYEE DETAILS
                    public function ReadAll($employee,$Conn,$Comm){
                        
                        try{
                            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectEmployee);
                            $stmt->bindParam(1, $employee->firstname, PDO::PARAM_STR);
                            $stmt->bindParam(2, $employee->lastname, PDO::PARAM_STR);
                            $stmt->bindParam(3, $employee->emplNo, PDO::PARAM_STR);
                            $stmt->bindParam(4, $employee->email, PDO::PARAM_STR);
                            $stmt->bindParam(5, $employee->Cellphone, PDO::PARAM_STR);
                            $stmt->bindParam(6, $employee->accountId, PDO::PARAM_INT);
                            $stmt->bindParam(7, $employee->addressId, PDO::PARAM_INT);
                            $stmt->bindParam(8, $employee->lastUpdate, PDO::PARAM_STR);
                            $stmt->execute();
                            return $stmt->fetchAll();
                        }catch(PDOException $e){
                            echo 'ERROR: ' ."<br>" . $e->getMessage();
                            return null;
                        }
                    }
                    //SELECT EMPLOYEE DETAILS BY EMPLOYEEID
                    public function ReadById($employee,$Conn,$Comm){
                        
                        try{
                            $stmt = $Conn->Connect()->prepare($Comm->SqlSelectEmployeeById);
                            $stmt->execute([':EmployeeID' => $employee->employeeId]);
                            $posts = $stmt->fetchAll();
                            return $posts;
                        }catch(PDOException $e){
                            echo 'ERROR: ' ."<br>" . $e->getMessage();
                            return null;
                        }
                    }
                //UPDATE EMPLOYEE DETAILS
                    public function Update($employee,$Conn,$Comm){
                        
                        try{
                
                            $stmt = $Conn->Connect()->prepare($Comm->SqlUpdateEmployee);
                            $stmt->bindParam(1, $employee->firstname, PDO::PARAM_STR);
                            $stmt->bindParam(2, $employee->lastname, PDO::PARAM_STR);
                            $stmt->bindParam(3, $employee->emplNo, PDO::PARAM_STR);
                            $stmt->bindParam(4, $employee->email, PDO::PARAM_STR);
                            $stmt->bindParam(5, $employee->Cellphone, PDO::PARAM_STR);
                            $stmt->bindParam(6, $employee->accountId, PDO::PARAM_INT);
                            $stmt->bindParam(7, $employee->addressId, PDO::PARAM_INT);
                            $stmt->bindParam(8, $employee->lastUpdate, PDO::PARAM_STR);
                                $stmt->execute();
                
                             
                                
                        }catch(PDOException $e){
                            echo 'ERROR: ' ."<br>" . $e->getMessage();
                        }   
                    }
                
                }
                ?>
     