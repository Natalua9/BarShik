-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 23 2024 г., 20:01
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Barshik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Basket`
--

CREATE TABLE `Basket` (
  `Id_basket` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Content` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Basket`
--

INSERT INTO `Basket` (`Id_basket`, `User_id`, `Content`) VALUES
(5, 6, '[]'),
(6, 7, '{\"18\": 1, \"19\": 1}');

-- --------------------------------------------------------

--
-- Структура таблицы `Category`
--

CREATE TABLE `Category` (
  `Category_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Category`
--

INSERT INTO `Category` (`Category_id`, `Name`) VALUES
(3, 'Соки'),
(16, 'Газировки'),
(17, 'молочные продукты');

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `Id_order` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Date_of_order` datetime NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Total_price` decimal(25,0) NOT NULL,
  `Used_bonuses` decimal(10,0) DEFAULT NULL,
  `Accrued_bonuses` decimal(10,0) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Orders`
--

INSERT INTO `Orders` (`Id_order`, `User_id`, `Date_of_order`, `Status`, `Total_price`, `Used_bonuses`, `Accrued_bonuses`, `comment`) VALUES
(1, 6, '2024-04-14 19:39:35', 'Готов', '1000', '0', '10', 'вывч'),
(4, 12, '2024-06-06 06:55:26', 'Доставка', '458', '45', '24', ''),
(5, 6, '2024-06-06 06:55:56', 'Готов', '458', '45', '23', ''),
(6, 6, '2024-06-17 20:29:24', 'новый', '345', '1', '1', NULL),
(7, 6, '2024-04-14 19:39:35', 'новый', '567', '1', '1', NULL),
(8, 6, '2024-04-14 19:39:35', 'новый', '11', '1', '1', NULL),
(9, 6, '2024-04-14 19:39:35', 'новый', '11', '1', '1', NULL),
(10, 6, '2024-04-14 19:39:35', 'новый', '11', '1', '1', NULL),
(11, 6, '2024-04-14 19:39:35', 'новый', '11', '1', '1', NULL),
(12, 6, '2024-04-14 19:39:35', 'новый', '11', '1', '1', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Order_Product`
--

CREATE TABLE `Order_Product` (
  `id` int(11) NOT NULL,
  `Id_product` int(11) NOT NULL,
  `Id_order` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Order_Product`
--

INSERT INTO `Order_Product` (`id`, `Id_product`, `Id_order`, `count`) VALUES
(9, 20, 1, 244);

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE `Product` (
  `Id_product` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`Id_product`, `Name`, `Description`, `Category_id`, `Price`, `Image`) VALUES
(18, 'сок грушевый', 'из свежей груши', 3, '1233', '1.jpg'),
(19, 'молочные продукты', 'со вкусом бабл гам', 17, '45', '51498_530x300x85_c.webp'),
(20, 'молочные продукты', 'со вкусом бабл гам', 17, '11', '51498_530x300x85_c.webp');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `User_id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password_hash` varchar(50) NOT NULL,
  `Bonus_points` decimal(10,0) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`User_id`, `Email`, `Password_hash`, `Bonus_points`, `role`) VALUES
(6, 'diahas04@mail.ru', '1234', '1', 'user'),
(7, 'ivan@mail.ru', '123zxc', '1', 'user'),
(9, 'test123@mail.ru', '123', '0', 'user'),
(10, 'admin@mail.ru', 'admin', '1', 'admin'),
(12, 'diana@mail.ru', '21657', '1', 'user'),
(13, 'kir@mail.ru', '123456', '1', 'user'),
(14, 'kir1@mail.ru', '65retdcz', '1', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Basket`
--
ALTER TABLE `Basket`
  ADD PRIMARY KEY (`Id_basket`),
  ADD KEY `User_id` (`User_id`);

--
-- Индексы таблицы `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Id_order`),
  ADD KEY `User_id` (`User_id`);

--
-- Индексы таблицы `Order_Product`
--
ALTER TABLE `Order_Product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_order` (`Id_order`),
  ADD KEY `Id_product` (`Id_product`);

--
-- Индексы таблицы `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Id_product`),
  ADD KEY `Price` (`Price`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Basket`
--
ALTER TABLE `Basket`
  MODIFY `Id_basket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Category`
--
ALTER TABLE `Category`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `Order_Product`
--
ALTER TABLE `Order_Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `Product`
--
ALTER TABLE `Product`
  MODIFY `Id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Basket`
--
ALTER TABLE `Basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `Users` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `Users` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Order_Product`
--
ALTER TABLE `Order_Product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`Id_order`) REFERENCES `Orders` (`Id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`Id_product`) REFERENCES `Product` (`Id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `Category` (`Category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
