<?php

session_start();
if (!isset($_SESSION['user_id']) ) { //not logged in
   
    header("refresh:2; url=index.php ");
    exit(); 

}

?>