-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 05 2022 г., 20:25
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mysite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appliances`
--

CREATE TABLE `appliances` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `appliances`
--

INSERT INTO `appliances` (`id`, `name`, `price`) VALUES
(1, 'Прочистка бойлера от накипи\r\n', 'от 2000 руб.'),
(2, 'Диагностика\r\n', '750 руб.'),
(3, 'Подключение стиральной машины\r\n', 'от 1000 руб.'),
(4, 'Подключение Посудомоечной машины\r\n', 'от 1000 руб.'),
(5, 'Подключение духовки\r\n', 'от 1500 руб.'),
(6, 'Подключение варочной панели\r\n', 'от 1500 руб.'),
(7, 'Замена запчастей\r\n', 'от 750 руб.');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `profi` varchar(120) NOT NULL,
  `yandex` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `mobile`, `mail`, `profi`, `yandex`) VALUES
(1, '+7965 209 22 58', 'aleshatechnician@gmail.com', 'https://profi.ru/profile/BelyakovAV47', 'https://uslugi.yandex.ru/profile/AleksejViktorovichB-1738605');

-- --------------------------------------------------------

--
-- Структура таблицы `electrics`
--

CREATE TABLE `electrics` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `Электрика` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `electrics`
--

INSERT INTO `electrics` (`id`, `name`, `price`, `Электрика`) VALUES
(1, 'Монтаж люстры, светильников, бра\r\n', 'до 3 кг/шт.800 руб.', NULL),
(2, 'Монтаж люстры, светильников, бра', 'до 5 кг/шт.1500 руб. | От 5 до 10 кг. 2500 руб.', NULL),
(3, 'Установка автомата', 'от 1000руб.', NULL),
(4, 'Ремонт эл. Проводки', 'от 750 руб.', NULL),
(5, 'Замена розетки/выключателей', '750 руб.', NULL),
(6, 'Установка интернет розетки встроенной', '850 руб.', NULL),
(7, 'Устранение неисправности электропроводки', 'от 1500 руб.', NULL),
(8, 'Подключение духовки', 'от 1500 руб', NULL),
(9, 'Подключение варочной панели', 'от 1500 руб', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `plumbing`
--

CREATE TABLE `plumbing` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `plumbing`
--

INSERT INTO `plumbing` (`id`, `name`, `price`) VALUES
(1, 'Установка унитаза\r\n', 'от 1500 руб.'),
(2, 'Демонтаж унитаза\r\n', 'от 1000 руб.'),
(3, 'Установка ванны\r\n', 'от 2000 руб.'),
(4, 'Установка тумбы под ванну\r\n', 'от 2700 руб.'),
(5, 'Установка или замена смесителя\r\n', 'от 1000 руб'),
(6, 'Установка душевой штанги\r\n', 'от 750 руб.'),
(7, 'Устранение засора\r\n', 'от 750 руб.'),
(8, 'Установка замена крана для подводки воды\r\n', 'от 750 руб.'),
(9, 'Замена крышки унитаза\r\n', 'от 750 руб'),
(10, 'Замена внутренних частей бочка\r\n', 'от 750 руб.'),
(11, 'Замена бочка унитаза\r\n', 'от 750 руб.'),
(12, 'Установка гигиенического душа\r\n', 'от 1000 руб.'),
(13, 'Устранение течи унитаза\r\n', '1000 руб.'),
(14, 'Замена кранбуксы/касеты\r\n', '750 руб'),
(15, 'Замена фильтра', 'от 800 руб.');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `name` varchar(80) NOT NULL,
  `service` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `service`, `text`, `updated_at`, `created_at`) VALUES
(1, 'Альберт', 'Сантехника', 'Унитаз оказался на потолке. Не  понял как. =) ', '2022-03-04 21:33:06', '2022-03-04 21:33:06'),
(2, 'Albert', 'Сантехника', 'qwe', '2022-03-05 07:55:07', '2022-03-05 07:55:07'),
(3, 'Albert', 'Сантехника', 'qwe', '2022-03-05 07:55:33', '2022-03-05 07:55:33'),
(4, 'Albert', 'Сантехника', 'ds', '2022-03-05 07:55:40', '2022-03-05 07:55:40'),
(5, 'qwe', 'Установка и ремонт вентиляции', 'qwe', '2022-03-05 07:56:09', '2022-03-05 07:56:09'),
(6, 'Имя 6', 'Электрика', 'ww', '2022-03-05 07:58:41', '2022-03-05 07:58:41'),
(7, 'Имя 6', 'Электрика', 'ww', '2022-03-05 08:00:18', '2022-03-05 08:00:18'),
(8, 'Имя 6', 'Электрика', 'ww', '2022-03-05 08:00:19', '2022-03-05 08:00:19'),
(9, 'Albert', 'Сантехника', 'qwe', '2022-03-05 08:00:33', '2022-03-05 08:00:33'),
(10, 'Albert', 'Сантехника', 'qwe', '2022-03-05 08:02:39', '2022-03-05 08:02:39'),
(11, 'Albert', 'Сантехника', 'qwe', '2022-03-05 08:03:09', '2022-03-05 08:03:09'),
(12, 'Mark', 'Установка и ремонт вентиляции', 'sdsdds', '2022-03-05 08:03:16', '2022-03-05 08:03:16'),
(13, 'Albert', 'Сантехника', 'Заявка 1', '2022-03-05 08:17:10', '2022-03-05 08:17:10');

-- --------------------------------------------------------

--
-- Структура таблицы `ventilation`
--

CREATE TABLE `ventilation` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `ventilation`
--

INSERT INTO `ventilation` (`id`, `name`, `price`) VALUES
(1, 'Установка вытяжки на кухне\r\n', 'от 1500 руб.'),
(2, 'Монтаж воздуховода\r\n', 'от 750 руб. п.м.'),
(3, 'Установка вентилятора в ванной\r\n', 'от 750руб.'),
(4, 'Установка решётки на вентиляцию\r\n', '750 руб.'),
(5, 'Чистка вентилятора', 'от 750 руб.');

-- --------------------------------------------------------

--
-- Структура таблицы `workathome`
--

CREATE TABLE `workathome` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `workathome`
--

INSERT INTO `workathome` (`id`, `name`, `price`) VALUES
(1, 'Повесить 1 полку кухонного гарнитур\r\n', 'от 750 руб.'),
(2, 'регулировка двери шкафа\r\n', '750 руб.'),
(3, 'Замена замка деревянная-800; металлическая\r\n', 'от 1000 руб.'),
(4, 'Повесить карниз\r\n', 'от 750 руб п.м.'),
(5, 'Повесить зеркало с подсветкой\r\n', 'от 1000 руб.'),
(6, 'Ремонт мебели\r\n', 'от 750 руб.'),
(7, 'Сборка мебели\r\n', 'от 750 руб.'),
(8, 'Повесить аксессуары (крючок, держатель туалетной бумаги)', 'от 300 руб.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appliances`
--
ALTER TABLE `appliances`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `electrics`
--
ALTER TABLE `electrics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `plumbing`
--
ALTER TABLE `plumbing`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ventilation`
--
ALTER TABLE `ventilation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workathome`
--
ALTER TABLE `workathome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appliances`
--
ALTER TABLE `appliances`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `electrics`
--
ALTER TABLE `electrics`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `plumbing`
--
ALTER TABLE `plumbing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `ventilation`
--
ALTER TABLE `ventilation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `workathome`
--
ALTER TABLE `workathome`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
