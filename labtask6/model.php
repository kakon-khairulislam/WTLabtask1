<?php 

require_once 'dbcon.php';


function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `data` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}




function addProduct($data){
	$conn = db_conn();
    $selectQuery = "INSERT into data (Name,BuyingPrice,SellingPrice,Profit)
VALUES (:name,:buyingprice,:sellingprice,:profit)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['Name'],
        	':buyingprice' => $data['BuyingPrice'],
        	':sellingprice' => $data['SellingPrice'],
            ':profit' => $data['Profit']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
