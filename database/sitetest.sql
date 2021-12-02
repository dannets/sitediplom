-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 16 2021 г., 14:06
-- Версия сервера: 5.7.24
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sitetest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `id_item` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `value` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `ID` int(11) NOT NULL,
  `name_item` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `catt` varchar(50) NOT NULL,
  `pod_catt` varchar(50) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`ID`, `name_item`, `price`, `catt`, `pod_catt`, `info`, `image`) VALUES
(50, 'Силиконовый ремешок Xiaomi Mi Band 4/ Mi Band 3', 196, 'item_catt6', '6item_catt3', 'Силиконовый ремешок для Xiaomi Mi Band 4 (Серый)  <br>Для владельцев Mi Band 4 производитель выпустил ряд сменных ремешков из яркого цветного силикона с удобной прочной застежкой. Стильные привлекательные аксессуары обладают хорошим запасом длины и подходят для запястий разного размера.', 'files/img/1620803615333.png'),
(51, 'Браслет Xiaomi Mi Band 5 миланская петля', 500, 'item_catt6', '6item_catt3', 'Производитель: Xiaomi<br> Тип: Сменный браслет<br>  Цвет: Цветной<br> Браслет для : Xiaomi Mi Band 5', 'files/img/16208038033334.png'),
(52, 'Чехол для Apple iPad 10.2\" 2019 синий', 4990, 'item_catt6', '6item_catt2', 'Обложка для Apple iPad 10.2\" 2019, выполненная из цельного листа полиуретана, способна защитить капризную поверхность экрана вашего планшетного компьютера от любых внешних воздействий, результатом которых может стать появление на ней царапин, потертостей и загрязнений. ', 'files/img/16208040503335.png'),
(53, 'Сетевая зарядка Xiaomi Mi 65W Fast Charger with GaN Tech', 2190, 'item_catt6', '6item_catt1', 'Мощность зарядки: 65 Вт <br>Быстрая зарядка: да <br>Максимальный выходной ток: 3 A <br>Максимальное выходное напряжение: 20 В', 'files/img/16208041643336.png'),
(54, 'Коммутатор D-link DGS-1510-28X', 24747, 'item_catt5', '5item_catt3', 'Управление коммутатором: уровень 2 <br>24 порта Ethernet 1 Гбит/с <br>4 uplink/стек/SFP (до 10 Гбит/с) <br>Установка в стойку', 'files/img/16208042523337.png'),
(55, 'Wi-Fi роутер Xiaomi Redmi AX6', 5299, 'item_catt5', '5item_catt2', 'Подключение к интернету: Ethernet RJ-45 <br>Стандарт Wi-Fi 802.11: ac (Wi-Fi 5), ax (Wi-Fi 6) <br>Частотный диапазон Wi-Fi: 2.4 / 5 ГГц <br>Макс. скорость беспроводного соединения: 3000 Мбит/с', 'files/img/16208043653338.png'),
(56, 'Принтер Canon PIXMA G1411', 12708, 'item_catt5', '5item_catt1', 'Печать: 4-цветная термическая струйная <br>Скорость: 8.8 изобр./мин (ч/б А4), 5 изобр./мин (цветн. А4) <br>Макс. формат печати: A4 (210 × 297 мм) <br>Макс. размер отпечатка: 216 × 297 мм', 'files/img/16208044643339.png'),
(57, 'Thermaltake Level 20 RGB Cherry MX Speed Titanium USB', 15069, 'item_catt4', '4item_catt3', 'Тип: механическая (Cherry MX Speed Silver) <br>Подключение: проводная <br>Подсветка: зональная <br>Кабель: USB (1.8 м)', 'files/img/16208045823340.png'),
(58, 'Материнская плата ASUS PRIME H410M-R', 6491, 'item_catt4', '4item_catt2', 'Форм-фактор: microATX <br>Сокет: LGA1200 <br>Память: 2 x DDR4 DIMM (2933 МГц) <br>PCI-E x16: 1 слот', 'files/img/16208046533341.png'),
(59, 'Ноутбук ASUS X515 (/15.6\")MA-EJ015T', 33990, 'item_catt4', '4item_catt1', 'Экран: 15.6\" (1920x1080) <br>Матрица: 60 Гц <br>Процессор: Intel Pentium Silver N5030 (4x1100 МГц) <br>Оперативная память: 4 ГБ DDR4 3200 МГц', 'files/img/16208047993342.png'),
(60, 'Телевизор Samsung UE50TU8510U 50\" (2020)', 43099, 'item_catt3', '3item_catt1', 'Разрешение: 4K UHD (3840x2160), HDR <br>Диагональ экрана: 50\", VA <br>Тип подсветки: Edge LED <br>Частота обновления экрана: 120 Гц', 'files/img/16208049023343.png'),
(61, 'Игровая приставка Sony PlayStation 4 Pro 1 ТБ', 31990, 'item_catt3', '3item_catt2', 'Тип: стационарная c оптическим приводом <br>Объем встроенной памяти: 1000 ГБ HDD <br>Максимальное разрешение: 4K UHD <br>Производительность системы: 4.2 терафлоп', 'files/img/16208051533344.png'),
(62, 'Музыкальный центр LG CM2460', 9595, 'item_catt3', '3item_catt3', 'Микросистема <br>Мощность 2x50 Вт <br>Воспроизведение CD <br>Радиоприемник FM', 'files/img/16208052483345.png'),
(63, 'Смартфон Xiaomi Redmi 9T 4/128GB NFC', 16999, 'item_catt2', '2item_catt1', 'Экран: 6.53\" (2340×1080) <br>Оперативная память: 4 ГБ <br>Память: 128 ГБ, слот для карты памяти <br>4 камеры: 48 МП, 8 МП, 2 МП, 2 МП', 'files/img/16208053253346.png'),
(64, 'Планшет Apple iPad Air (2020) 64Gb Wi-Fi + Cellular', 68990, 'item_catt2', '2item_catt2', 'Диагональ: 10.9\" (2360x1640) <br>IPS Встроенная память: 64 ГБ <br>Процессор: Apple A14 Bionic <br>Операционная система: iOS', 'files/img/16208054033347.png'),
(65, 'Фотоаппарат Canon EOS 250D Kit EF-S 18-55mm f/4-5.6 IS STM', 61100, 'item_catt2', '2item_catt3', 'Тип камеры: зеркальная <br>Тип матрицы: CMOS <br>Размер матрицы: 25.8 МП, 22.3 х 14.9 мм <br>Чувствительность: 100 - 25600 ISO, Auto ISO', 'files/img/16208054873348.png'),
(66, 'Холодильник Beko RCNK 270K20 S', 24990, 'item_catt1', '1item_catt1', 'ШхВхГ: 54х171х60 см <br>Общий объем: 270 л <br>Класс энергопотребления: A+ <br>No Frost', 'files/img/16208055573349.png'),
(67, 'Пылесос Dyson CY28 Parquet 2', 24990, 'item_catt1', '1item_catt2', 'Тип уборки: сухая <br>Пылесборник: контейнер, 1.5 л <br>Мощность всасывания: 170 Вт <br>Потребляемая мощность: 600 Вт', 'files/img/16208056693350.png'),
(68, 'Фен Magio MG-169', 1799, 'item_catt1', '1item_catt3', 'Мощность: 2600 Вт <br>Функции: подача холодного воздуха <br>Режимов нагрева: 3 <br>Конструкция: петля для подвешивания', 'files/img/16208057473351.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `typep` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `typep`) VALUES
(7, 'Данила', 'admin', '2@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(8, 'new3', 'test', '3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
