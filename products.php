<?php

include("connection.php");

$query="SELECT * FROM `products` WHERE 1";

$products=$conn->prepare($query);// To prevent SQL injection

$products->execute();

$products->bindColumn(1, $productId);
$products->bindColumn(2, $productName);
$products->bindColumn(3, $productLocation);
$products->bindColumn(4, $productCode);
$products->bindColumn(5, $productWeight);
$products->bindColumn(6, $productPrice);

echo "
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<table>
  <tr>
    <th>Name</th>
    <th>Location</th>
    <th>Code</th>
    <th>Weight</th>
    <th>Price</th>
  </tr>

  ";
while($products->fetchObject())
{
	echo " <tr>
    <td>$productName</td>
    <td>$productLocation</td>
    <td>$productCode</td>
    <td>$productWeight</td>
    <td>$productPrice</td>
  </tr>";
}
echo "</table>";


?> 

