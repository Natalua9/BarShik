<?php
 include "../connect.php";

// // удаление заказа
$id = $_GET['item'];
$result = mysqli_query($con,"DELETE FROM  `Order_Product` WHERE `id` = $id");
echo "<script>alert('Заказ удален!'); location.href = 'orderManagement.php';</script>";
?>
