<?php
include "../connect.php";

if (isset($_POST['orderId']) && isset($_POST['newStatus'])) {
    $orderId = $_POST['orderId'];
    $newStatus = $_POST['newStatus'];

    $query = "UPDATE Orders SET Status = '$newStatus' WHERE Id_order = $orderId";
    if (mysqli_query($con, $query)) {
        echo"<script>alert('Статус обновлен')
        location.href = 'orderManagement.php';
        </script>";
    } else {
        echo "Ошибка при обновлении статуса заказа: " . mysqli_error($con);
    }
} else {
    echo "Неверные данные запроса";
}
?>
