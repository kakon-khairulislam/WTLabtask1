<?php 

require_once 'connection_db.php';


function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `products` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProduct($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `products` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}



function addProduct($data){
	$conn = db_conn();
    $selectQuery = "INSERT into products (Name,BuyingPrice,SellingPrice,Profit)
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
function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE product set Name = ?, BuyingPrice = ?, SellingPrice = ?, Profit=? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['buyingprice'], $data['sellingprice'],$data['profit'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

