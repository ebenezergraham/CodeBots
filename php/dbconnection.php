<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="mysql";
$dbname="minezon";
$product_id;

//$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
//	or die ('Could not connect to the database server' . mysqli_connect_error());
//$con->close();

try {
    $connectDB = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
} catch ( PDOException $e ) {
    echo "Connection failed: " . $e->getMessage();
}

$prepareSQL = $connectDB->prepare( "INSERT INTO cart VALUES ('','$product_id')" );
$prepareSQL->execute();
$connectDB = null;

?>
