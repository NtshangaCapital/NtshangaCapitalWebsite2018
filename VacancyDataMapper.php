<?PHP


class VacancyDataMapper{
    public function __construct(){

    }

    public function Save($Vacancy,$Conn,$Comm,$jobTitle,$jobDescription){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->InsertVacancy);
            $stmt->bindParam(1 , $Vacancy->jobTitle , PDO::PARAM_STR);
            $stmt->bindParam(2 , $Vacancy->jobDescription  , PDO::PARAM_STR);
            $stmt->execute();
            return true;

           
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return false;
            
       }
    }

    public function job($Conn,$Comm,$username){
             try{
                $stmt = $Conn->Connect()->prepare($Comm->SelectCustomer);
                $stmt->bindParam(1, $username, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll();
                return true;

             }catch(PDOException $e){
                echo 'ERROR: ' ."<br>" . $e->getMessage();
                return false;
             }          
    }
  
}
?>
