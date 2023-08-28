-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 27 2022 г., 05:43
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `luxuryrent`
--

-- --------------------------------------------------------

--
-- Структура таблицы `car`
--

CREATE TABLE `car` (
  `id` int(10) UNSIGNED NOT NULL,
  `class` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `model` varchar(30) NOT NULL,
  `releaseYear` int(4) UNSIGNED NOT NULL,
  `color` varchar(15) NOT NULL,
  `engineСapacity` int(11) UNSIGNED NOT NULL,
  `driveUnit` varchar(8) NOT NULL,
  `transmission` varchar(14) NOT NULL,
  `enginePower` int(11) UNSIGNED NOT NULL,
  `maximumSpeed` int(11) UNSIGNED NOT NULL,
  `price` int(11) UNSIGNED NOT NULL,
  `img1` varchar(45) NOT NULL,
  `img2` varchar(45) NOT NULL,
  `img3` varchar(45) NOT NULL,
  `img4` varchar(45) NOT NULL,
  `img5` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `car`
--

INSERT INTO `car` (`id`, `class`, `brand`, `model`, `releaseYear`, `color`, `engineСapacity`, `driveUnit`, `transmission`, `enginePower`, `maximumSpeed`, `price`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(3, 'спорткары', 'Lamborgini', 'Aventador S', 2017, 'черный', 7, 'полный', 'робот', 740, 350, 190000, '../images/lambo/slider/l1.png', '../images/lambo/slider/l2.png', '../images/lambo/slider/l3.png', '../images/lambo/slider/l4.png', '../images/lambo/slider/l5.png');

-- --------------------------------------------------------

--
-- Структура таблицы `rent`
--

CREATE TABLE `rent` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `carId` int(10) UNSIGNED NOT NULL,
  `dateOfReceiving` date NOT NULL,
  `returnDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `rent`
--

INSERT INTO `rent` (`id`, `userId`, `carId`, `dateOfReceiving`, `returnDate`) VALUES
(4, 3, 3, '2022-06-26', '2022-06-29'),
(5, 3, 3, '2022-07-01', '2022-07-07'),
(6, 1, 3, '2022-06-30', '2022-07-10');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(15) NOT NULL,
  `surname` varchar(15) DEFAULT NULL,
  `secondname` varchar(15) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `phoneNumber` varchar(12) DEFAULT NULL,
  `email` varchar(319) NOT NULL,
  `driversLicense` date DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `secondname`, `dateOfBirth`, `phoneNumber`, `email`, `driversLicense`, `country`, `password`) VALUES
(1, 'Nikita', 'Zoteev', NULL, '2001-11-24', '+79879358324', 'twinkl31337@gmail.com', '2020-10-11', 'Russia', 'e4po4mack'),
(3, 'Богдан', NULL, NULL, NULL, NULL, 'sjkldfhklfh@gmail.com', NULL, NULL, '11111111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `carId` (`carId`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `car`
--
ALTER TABLE `car`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`carId`) REFERENCES `car` (`id`),
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
