<?php
    class Command{
		//ACCOUNT
			var $SqlInsertAccount = "INSERT INTO account(isConfirmed, isLocked, accountTypeId, lastUpdate, Username, Password) 
			VALUES(:isConfirmed, :isLocked, :accountTypeId, :lastUpdate, :Username, :Password)";
			var $CheckIfAccExists = "SELECT 1 from account WHERE Username = ? LIMIT 1";
			var $CheckIfPassMatch = "SELECT 1 from account WHERE Username = ? and Password = ? LIMIT 1";
			var $SelectAccountId = "SELECT accountId from account WHERE Username = ?";
			var $SqlUpdatePassword = "UPDATE account SET account.Password = ? WHERE accountId = ?";
			var $SqlUpdateUserName = "UPDATE account SET Username = ? WHERE accountId = ?";
			var $SqlConfirmAccount = "UPDATE account SET isConfirmed = ? WHERE accountId = ?";

		// ACCOUNTUID
			var $SqlCreateUID = "INSERT INTO uniqueidentifier VALUES(UUID(),?,SYSDATE())";
			var $SqlDeleteUID = "DELETE FROM uniqueidentifier WHERE AccountId = ?";
			var $SqlSelectUID = "SELECT Id FROM uniqueidentifier WHERE AccountId = ?";
			var $CheckIfAccIdExists = "SELECT 1 FROM uniqueidentifier WHERE AccountId = ?";
			var $SqlSelectAccountId_UID = "SELECT AccountId FROM uniqueidentifier WHERE Id = ?";
		
		//CUSTOMER
			var $SqlInsertCustomer = "INSERT INTO customer(FirstName, LastName, ContactNumber, AddressId, LastUpdate, accountId, Email) 
			VALUES(:FirstName, :LastName, :ContactNumber, :AddressId, :LastUpdate, :AccountId, :Email)";
		
        //EMPLOYEE
			var $SqlInsertEmployee = "INSERT INTO employee(employeeId, firstname, lastname, emplNo, email, Cellphone, accountId, addressId, lastUpdated) 
			VALUES(:employeeId, :firstname, :lastname, :emplNo, :email, :Cellphone, :accountId, :addressId, :lastUpdated)";
			var $SqlUpdateEmployee = "UPDATE employee 
			set firstname = :firstname, lastname = :lastname, emplNo = :emplNo, email = :email, Cellphone = :Cellphone, addressId = :addressId, lastUpdated = :lastUpdated)  
			WHERE employeeId = :employeeId";
			var $SqlDeleteEmployee = "DELETE FROM employee WHERE employeeId = :employeeId";
			var $SqlSelectEmployee = "SELECT employeeId, firstname, lastname, emplNo, email, Cellphone, accountId, addressId, lastUpdated 
			FROM employee WHERE employeeId = :employeeId";
			var $SqlSelectEmployees = "SELECT employeeId, firstname, lastname, emplNo, email, Cellphone, accountId, addressId, lastUpdated FROM employee";
		
		//CITY
			var $SqlSelectCity = "SELECT cityId, city, provinceId FROM city WHERE cityId = :cityId";
			var $SqlSelectCities = "SELECT cityId, city, provinceId FROM city";
			var $SqlInsertCity = "INSERT INTO city(cityId, city, provinceId) VALUES(:cityId, :city, :provinceId)";
		
		//PROVINCE
			var $SqlSelectProvince = "SELECT provinceId, province, countryId FROM province WHERE provinceId = :provinceId";
			var $SqlSelectProvincies = "SELECT provinceId, province, countryId FROM province";
			var $SqlInsertProvince = "INSERT INTO province(provinceId, province, countryId) VALUES(:provinceId, :province, :countryId)";
		
        //ARTICLE
			var $SqlInsertArticle = "INSERT INTO article(person_id, title, intro, descr) VALUES(:person_id, :title, :intro, :descr)";
			var $SqlSelectArticleById = "SELECT * FROM article WHERE id = :id";
			var $SqlSelectArticles = "SELECT * FROM article";
		
		//ADDRESS
			var $SqlInsertAddress = "INSERT INTO address(addressId, address, postalCode, cityId) VALUES(:addressId, :address, :postalCode, :cityId)";
			var $SqlSelectAddress = "SELECT addressId, address, postalCode, cityId FROM address WHERE addressId = :addressId";
			var $SqlUpdateAddress = "UPDATE address set address = :address, postalCode = :postalCode, cityId = :cityId WHERE addressId = :addressId";
		// Vacancy
		//var $InsertVacancy = "INSERT INTO vacany (JobTitle,JobDescription) 	VALUES(:JobTitle, :JobDescription)"; 
		 var $InsertVacancy = "INSERT INTO vacancy (jobTitle,jobDescription) VALUES( ? , ?)";
        var $SelectVacancy = "SELECT * FROM vacancy WHERE vacancyId = ?";
        var $SelectCustomer = "SELECT *  FROM customer,account WHERE Username = ?";
        var $Insertjob_aplication = "INSERT INTO job_application( customerId, cv) VALUES ( ?, ?)";
		var $SelectAllVacancy = "SELECT * FROM vacancy";
		var $SelectjobDescription = "SELECT jobDescription FROM vacancy WHERE vacancyId = ?";
	

		
        public function __constructor(){
            
        }
    }
?>