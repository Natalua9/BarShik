<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление заказами</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

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
            <img src="images/2703085_bag_cart_ecommerce_shop_icon.png" height="30px" width="30px" alt="">
            <img src="images/9104273_person_user_people_profile_account_icon.png"height="30px" width="30px" alt="">
            
        </div>
    </nav>
</header>
    <div class="Order">
        <table>
            <tr>
                <th>Продукты</th>
                <th>Количество</th>
                <th>Цена</th>
                <th>Статус</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление заказами</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

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
            <img src="images/2703085_bag_cart_ecommerce_shop_icon.png" height="30px" width="30px" alt="">
            <img src="images/9104273_person_user_people_profile_account_icon.png"height="30px" width="30px" alt="">
            
        </div>
    </nav>
</header>
<div class="container">
    <h1>Управление заказами</h1>

    <input type="text" id="searchInput" placeholder="Поиск по заказам">

    <table id="orderTable">
    <tr>
        <th>Номер заказа</th>
        <th>Статус</th>
        <th>Дата</th>
        <th>Цена</th>
        <th>Действия</th>
    </tr>
    <tr> 
    <table>
    <tr>  
        <td>Заказ #1</td>  
        <td>  
            <input id="option1_1_1" type="radio" name="option_1" data-status="Готовим"/>  
            <label for="option1_1_1">Готовим</label>  

            <input id="option2_1_1" type="radio" name="option_1" data-status="Доставка"/>  
            <label for="option2_1_1">Доставка</label>  

            <input id="option3_1_1" type="radio" name="option_1" data-status="Выполнено"/>  
            <label for="option3_1_1">Выполнено</label>  
        </td> 
        <td>18.12.2023</td>
        <td>2345</td> 
        <td>  
        <a href=""   data-bs-toggle="modal" data-bs-target="#feedback" > <button class="view-details">Подробности</button>  </a>
        <button class="delete-order">Удалить заказ</button>  
        </td>  
        

    </tr>

    <tr> 
        <td>Заказ #2</td> 
        <td> 
            <p class="optionlabel"> 
            <input id="option1_2" type="radio" name="option"/><label for="option1_2">Готовим</label> 
            <input id="option2_2" type="radio" name="option"/><label for="option2_2">Доставка</label> 
            <input id="option3_2" type="radio" name="option"/><label for="option3_2">Выполнено</label> 
            </p> 
        </td> 
        <td>18.12.2023</td>
        <td>4565</td>
        <td> 
        <a href=""   data-bs-toggle="modal" data-bs-target="#feedback" > <button class="view-details">Подробности</button>  </a>
        <button class="delete-order">Удалить заказ</button> 
        </td> 
        
    </tr>

    
    </table>
</div>
<script src="script.js"></script>
</body>
</html>
<style>
input[type="radio"] {
  display: none;
}

input[type="radio"]:checked + label {
  background-color: lightblue;
}
</style>
<!-- модальное окно для отзыва -->


<div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Состав заказа</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="container">
      <table id="orderTable">
    <tr>
        <th>Номер заказа</th>
        <th>Состав</th>
        <th>Количество</th>
        <th>Цена</th>
    </tr>
    <tr> 
    <table>
    <tr>  
        
        <td>Заказ #1</td> 
        <td>
            <li>Вода</li>
            <li>Вода</li>

        </td>  
        <td>3</td>  
        <td>1231</td>  

    </tr>
    </table>
    </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>