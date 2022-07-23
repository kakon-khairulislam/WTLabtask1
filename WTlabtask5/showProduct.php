<?php  
require_once 'productinfo.php';

$products = fetchAllProducts();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Profit</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><?php echo $product['Name'] ?></a></td>
				<td><?php echo $product['Profit'] ?></td>
				<td><a href="editProduct.php">Edit</a>&nbsp<a href="deleteProduct.php?id=<?php echo $product['Name'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>