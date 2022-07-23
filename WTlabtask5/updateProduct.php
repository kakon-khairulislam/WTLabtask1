<?php  
require_once 'model.php';


if (isset($_POST['updateProduct'])) {
	$data['Name'] = $_POST['name'];
	$data['BuyingPrice'] = $_POST['buyingprice'];
	$data['SellingPrice'] = $_POST['sellingprice'];
	$data['Profit'] = $_POST['profit'];

  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showProduct.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>