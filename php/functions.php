<?php

function getProducts(){
  include 'php/dbconnection.php';
	$getProduct = "SELECT * FROM product_categories";
	// get products
	$result = mysqli_query($con,$getProduct);
	echo "this is result. $result";
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


function getProductsWanted(){
  include 'php/dbconnection.php';
  $productsWanted = $html->find('form[class=products_wanted_group]');
}

function setProducts(){
	$setProduct = "INSERT INTO product_categories VALUES ('1','Stones','20','4','images/test.jpg')";
}


?>
