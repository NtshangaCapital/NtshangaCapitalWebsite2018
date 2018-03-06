<?php

include ("models/DAL/connection.php");
include ("models/DAL/command.php");
include ("models/DAL/VacancyDataMapper.php");

$Conn = new Connection();
$Comm = new Command();
$VacancyDataMapper = new  VacancyDataMapper();

$results = $VacancyDataMapper->description($Conn,$Comm,$_GET["Id"]);

foreach($results as $Res){
    echo $Res->jobDescription;

}
//echo $_GET["Id"];




?>