<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="mysql";
$dbname="minezon";
$product_id;

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

// get our products
$our_product = "SELECT product_name FROM product_categories WHERE id = $x ";
mysqli_query($con,$our_product);

// set our products
mysqli_query($con,"INSERT INTO product_categories VALUES ('1','Stones-test','20','4','images/test.jpg')");

//$con->close();
?>
