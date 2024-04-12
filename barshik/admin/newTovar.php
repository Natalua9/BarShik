<?php
include "../connect.php";

$query = "SELECT * FROM `Product` ";
$result = mysqli_query($con, $query);
$result1 = mysqli_fetch_all($result);
$category = "SELECT * FROM `Category` ";
$categoryResult =mysqli_fetch_all(mysqli_query($con, $category));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
<header>
    <nav class="nav">
        <div class="index">
            <h1 class="index_">Админ</h1>
            <form id="search" action="/">
                <input type="search" name="search" id="searchText" placeholder="Поиск">
            </form>
        </div>
        <div class = "cart_account">
            <a href="Panel-admin2.php">Управление товарами</a>
            <a href="Panel-admin3.php">Управление категориями напитков</a>
            <a href="Panel-admin4.php">Управление заказами</a>
            <a href="Panel-admin5.php">Статистика и отчеты</a>
            <a href="../">Выйти</a>
            
        </div>
    </nav>
</header>
    <div class="search">
        <div class="header-div2">
           
        </div>
        <!-- <section class="sort_1">
            <div class="sort">
                <ul class="list-group list-group-horizontal mt-5 mb-3">
                    <h4>Сортировка по дате публикации:</h4>
                    <li class="list-group-item">
                        <a href=""><img width="30" src="asc-sort.png" alt=""></a>
                    </li>
                    <li class="list-group-item">
                        <a href=""><img width="30" src="desc-sort.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </section> -->
    </div>
<div class="container">
    <div class="products">
        <table>
            <tr>
                <th>Id</th>
                <th>Название</th>
                <th>Категория</th>
                <th>Цена</th>
                <th>Описание</th>
                <th>Миниатюра</th>
                <th>Редактировать</th>
                <th>Удалить</th>

            </tr>
            <form action="newTovar_db.php" method="post">
            <?php foreach ($result1 as $item):?>
            <tr>
                <td > <input type="text" name="idP" value="<?=$item[0]?>"></td>
                <td > <input type="text" name="Name" value="<?=$item[1]?>"></td>
                <td > <input type="text" name="Categ" value="<?=$item[3]?>"></td>
                <td > <input type="text" name="Price" value="<?=$item[4]?>"></td>
                <td > <input type="text" name="Descr" value="<?=$item[2]?>"></td>
                <td><img src="../images/<?=$item[5]?>" alt="" class="img-product-admin"></td>
                <td><a href='newTovar_db.php?item=<?= $item[0] ?>'><button type="button" name="redact" class="btn btn-outline-success">Редактировать</button></a></td>
                <td><a href = 'newTovar_db.php?item="  . $item[0] ."'><button type="button" name = "delete"class="btn btn-outline-danger">Удалить</button></a></td>
            </tr>
            <?php endforeach;?>
            </form>
        </table>
    </div>
    <div>
    <h2 class="edit-tovar">Добавление товара</h2>
        <form action="newTovar_db.php" class="adding" method="POST" >
           
            <input type="text" name="Name" id="" placeholder="Название">
            <select name="Categ" id="category">     
            <?php foreach ($categoryResult as $item) { ?>  
                <option value='<?= $item[0] ?>'><?php echo $item[1]; ?></option>  
            <?php } ?>  
        </select> 
            <input type="text" name="Price" id="" placeholder="Цена">
            <input type="text" name="Descr" id="" placeholder="Описание">
            <input type="text" name="Image" id="" placeholder="Изображение">
            <input type="submit" class="btn btn-success" value="Создать">
        </form>
    </div>
</div>
</body>
</html>