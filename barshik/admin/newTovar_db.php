<?php
include "../connect.php";
$name= isset($_POST['Name'])?$_POST['Name'] : false;
$Discription= isset($_POST['Discription'])?$_POST['Discription'] : false;
$Cetegor= isset($_POST['Categ'])?$_POST['Categ'] : false;
$Price= isset($_POST['Price'])?$_POST['Price'] : false;
$Image= isset($_POST['Image'])?$_POST['Image'] : false;

$tovar=mysqli_query($con, "SELECT * FROM Product");
$query_tovar = mysqli_fetch_all($tovar); 
  // SQL запрос для добавления нового товара
$queryNewTovar= mysqli_query($con, "INSERT INTO `Product`(`name_product`, `description`, `id_categories`, `price`, `image`) 
VALUES ('$name','$Discription','$Cetegor','$Price','$Image')");
$query = mysqli_query($con,"select * from category");

$query_category = mysqli_fetch_all($query);    

?>