<?php
include "../connect.php";
$Name = isset($_POST['Name'])?$_POST['Name']:false;
$Categ = isset($_POST['Categ'])?$_POST['Categ']:false;
$Price = isset($_POST['Price'])?$_POST['Price']:false;
$Descr = isset($_POST['Descr'])?$_POST['Descr']:false;
$Image = isset($_POST['Image'])?$_POST['Image']:false;

// не работает наверное удалить
$idP = isset($_POST['idP'])?$_POST['idP']:false;
$redact = isset($_POST['redact'])?$_POST['redact']:false;
$delete = isset($_POST['delete'])?$_POST['delete']:false;
$query_delete = "DELETE * FROM Product where `id_product` = $idP ";
$result_delete = mysqli_query($con, $query_delete);


function check_error($error) {
    return "<script>
    alert('$error'); 
    location.href = 'newTovar.php';
    </script>";
}
if ($Name and $Categ and $Price and $Descr) {
    $query = "INSERT INTO `Product` (`Name`, `Category_id`, `Description`, `Price`, `Image`) VALUES ('$Name', '$Categ', '$Descr', '$Price', '$Image')";
    $result = mysqli_query($con, $query);
    echo "<script>alert('Запись создана!');
    location.href = 'newTovar.php';</script>";

} else {
    echo check_error("Все поля должны быть заполненны!");
}

// удаление товара

if($result_delete){
    echo "<script>alert('Данные удалены!'); location:href = 'newTovar.php';</script>"; 
} else {
    echo "<script> alert('Ошибка удаления!".mysqli_error($con)."'); location:href = 'newTovar.php';</script>"; 
}


?>