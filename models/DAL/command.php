<?php
    class Command{
		//ACCOUNT
			var $SqlInsertAccount = "INSERT INTO account(isConfirmed, isLocked, accountTypeId, lastUpdate, Username, Password) 
			VALUES(:isConfirmed, :isLocked, :accountTypeId, :lastUpdate, :Username, :Password)";
			var $CheckIfAccExists = "SELECT 1 from account WHERE Username = ? LIMIT 1";
			var $CheckIfPassMatch = "SELECT 1 from account WHERE Username = ? and Password = ? LIMIT 1";
			var $SqlConfirmed = "SELECT 1 from account WHERE Username = ? and isConfirmed = ? LIMIT 1";
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
		
		// TESTIMONIAL
			var $SqlInsertTestimony = "INSERT INTO testimony VALUES(?,?)";
			var $SqlUpdateTestimony = "UPDATE testimony SET TestimonyText = ? WHERE Id = ?";
			var $SqlSelectAllTestimonies = "SELECT * FROM testimony";
			var $SqlSelectTestimonyById = "SELECT * FROM testimony WHERE Id = ?";

		// SUPPORT TICKET
			var $SqlCreateSupportTicket = "INSERT INTO ticket (AccountId,ServiceId,Email,Subject,Message,CreatedDate,HasResponse) 
			VALUES(?,?,?,?,?,?,?)";
			var $SqlSelectAllTickets = "SELECT * FROM ticket ORDER BY CreatedDate DESC";
			var $SqlSelectTicketById = "SELECT * FROM ticket WHERE Id = ?";
			var $SqlRespondByTicketId = "SELECT * FROM ticketresponse WHERE ticketId = ?";
			var $SqlRespondToTicket = "INSERT INTO ticketresponse (ticketId, AccountId, Message, CreatedDate) VALUES(?,?,?,?)";
        public function __constructor(){
            
        }
    }
?>