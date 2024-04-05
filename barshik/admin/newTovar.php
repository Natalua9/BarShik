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
            <a href="Panel-admin2.html">Управление товарами</a>
            <a href="Panel-admin3.html">Управление категориями напитков</a>
            <a href="Panel-admin4.html">Управление заказами</a>
            <a href="">Статистика и отчеты</a>
            <a href="/">Выйти</a>
            
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
    <h2>Товары</h2>

    <div class="products">

        <table>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Категория</th>
                <th>Цена</th>
                <th>Миниатюра</th>
                <th>Редактировать</th>
                <th>Удалить</th>

            </tr>
            <tr>
                <th>Вода</th>
                <td>Вода как вода</td>
                <td>Вода</td>
                <td>80</time></td>
                <td><img src="../images\31762_530x300x85_c.webp" class="tovat-img"></td>
                <td><button><img src="/add_1237946.png" alt=""></button></td>
                <td><button><img src="/shape_12205851.png" alt=""></button></td>
            </tr>
            <tr>
                <th>Гранатовый сок</th>
                <td>Свежий сок</td>
                <td>533175</td>
                <td>January 13, 2011</time></td>
                <td>37.00</td>
                <td><button><img src="/add_1237946.png" alt=""></button></td>
                <td><button><img src="/shape_12205851.png" alt=""></button></td>
            </tr>
            <tr>
                <th>Hoshi Nakamura</th>
                <td>Вода как вода</td>
                <td>601942</td>
                <td>July 23, 2012</time></td>
                <td>15.00</td>
                <td><button><img src="/add_1237946.png" alt=""></button></td>
                <td><button><img src="/shape_12205851.png" alt=""></button></td>
            </tr>
        </table>
    </div>
    </div>
    
    <div class="adding">
    
    <form action="newTovar_db.php" method="post">    
        <p>Добавление товара</p>    
        <input type="text" name="Name" id="name" placeholder="Название">    
        <input type="text" name="Description" id="description" placeholder="Описание">    
        <select name="Category" id="category">     
            <?php foreach ($query_category as $value_1) { ?>  
                <option ><?php echo $value_1[1]; ?></option>  
            <?php } ?>  
        </select>    
        <input type="text" name="Price" id="price" placeholder="Цена">    
        <input type="text" name="Image" id="image" placeholder="Изображение">    
          
        <button type="submit" name="edit">Добавить</button>    
    </form>    
</div>
</body>
</html>