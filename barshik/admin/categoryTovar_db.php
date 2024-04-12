<?php 
include "../connect.php"; 

$idCat = isset($_POST['idCat']) ? $_POST['idCat'] : false; 
$Name = isset($_POST['Name']) ? $_POST['Name'] : false; 

$query = "SELECT Category_id, name FROM Category"; 
$result = mysqli_query($con, $query); 
$result1 = mysqli_fetch_all($result); 
$exit=isset($_POST['exit']) ? $_POST['exit'] : false;
$add=isset($_POST['add']) ? $_POST['add'] : false; 

if (empty($exit)) {
    // var_dump("UPDATE Category SET Name='$Name' WHERE Category_id=$idCat");
    // $queryUpdate = "UPDATE Category SET Name='$Name' WHERE Category_id=$idCat"; 
    // $update=mysqli_query($con, $queryUpdate);
    // echo "<script>alert('Категория изменена!');
    // location.href = 'categoryTovar.php';</script>";
}
if (!empty($add)) {
    $queryAdd="INSERT INTO `Category`( `Name`) VALUES ('$Name')"; 
    $update=mysqli_query($con, $queryAdd);
    echo "<script>alert('Категория создана!');
    location.href = 'categoryTovar.php';</script>";
}

?>