 <?php
 include 'cart.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if(isset($_POST['submit'])){
$lastUpdated= date("Y-m-d h:i:sa");
try{
    $pdo = new PDO("mysql:host=localhost;dbname=products", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    $sql = "INSERT INTO orders (quantity,amount,Total,Item,OrderDate) VALUES ('$qty', '$amounts', '$total','$name','$lastUpdated')";    
    $pdo->exec($sql);
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
}
