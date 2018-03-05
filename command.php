	
    
    <?php
    class Command{
    // Vacancy
        var $InsertVacancy = "INSERT INTO vacancy (jobTitle,jobDescription) VALUES( ? , ?)";
        var $SelectVacancy = "SELECT * FROM vacancy WHERE vacancyId = ?";
        var $SelectCustomer = "SELECT *  FROM customer,account WHERE Username = ?";
        var $Insertjob_aplication = "INSERT INTO job_application( customerId, cv) VALUES ( ?, ?)";


        public function __constructor(){
            
        }
    }
    ?>