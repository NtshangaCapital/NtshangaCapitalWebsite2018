<?php


require 'dbConnection.php';



//retrieval of the accounttypeID
$sql3 = "SELECT FROM accounttype (accountid)
WHERE ('typename = CustomerAccount')";


if (mysqli_query($conn, $sql3)) {
    $last_id = mysqli_insert_id($conn);
} else {

    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}
//

//Inserting of the accounttypeID and getting last inserted id of AccountTable
$now = new DateTime();
$now->format('Y-m-d H:i:s');

$sql = "INSERT INTO account (accounttypeid,isLocked,isConfirmed,lastUpdate)
VALUES ('$last_id', '2','0','$now')";

if (mysqli_query($conn, $sql)) {

    $last_id = mysqli_insert_id($conn);
} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//

//Inserting into the customer table with the last inserted id of Account
$sql2 = "INSERT INTO customer (accountid)
VALUES ('what is my favorite color ?')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
//
$conn->close();
?> 