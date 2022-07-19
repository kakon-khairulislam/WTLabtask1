<?php  
require_once 'model.php';


if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	$data['Buying Price'] = $_POST['buyingprice'];
	$data['Selling Price'] = $_POST['sellingprice'];

  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>