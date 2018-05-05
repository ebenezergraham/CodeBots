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

function getProducts(){
	$getProduct = "SELECT * FROM product_categories";
	// get products
	$result = mysqli_query($con,$getProduct);
	echo "this is result";
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Product Name: " . $row["product_name"]. " " . $row["available_quantity"].
					" " . $row["image_url"]. "<br>";
	    }
	} else {
	    echo "Miners are not offering any products now!";
	}
}

function setProducts(){
	$setProduct = "INSERT INTO product_categories VALUES ('1','Stones','20','4','images/test.jpg')";
}
mysqli_query($con, $setProduct);
//$con->close();
?>
