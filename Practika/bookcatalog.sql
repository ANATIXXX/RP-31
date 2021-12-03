-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 03 2021 г., 09:49
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bookcatalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `autors`
--

CREATE TABLE `autors` (
  `IDA` int NOT NULL,
  `autors` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `autors`
--

INSERT INTO `autors` (`IDA`, `autors`, `nameb`) VALUES
(37, 'А.С Пушкин', 'Капитанская дочка'),
(38, 'Л.Н Толстой', 'Война и мир'),
(39, 'Н.В Гоголь', 'Мертвые души'),
(42, 'Д. Дэфо', 'Робинзон Крузо'),
(43, 'М. Твен', 'Том Сойер'),
(44, 'Ф.М Достоевский', 'Преступление и наказание'),
(46, 'в', 'в');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `IDB` int NOT NULL,
  `nameb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearofissue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autors` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`IDB`, `nameb`, `imgb`, `description`, `yearofissue`, `autors`) VALUES
(64, 'Капитанская дочка', '61a72752a5701.jpg', 'Капитанская дочка', '1836', 'А.С Пушкин'),
(65, 'Война и мир', '61a7279ad0798.jpg', 'Война и мир', '1868', 'Л.Н Толстой'),
(66, 'Мертвые души', '61a727c40923d.jpg', 'Мертвые души', '1842', 'Н.В Гоголь'),
(69, 'Робинзон Крузо', '61a8a3bb42164.png', 'Робинзон крузо', '1719', 'Д. Дэфо'),
(70, 'Том Сойер', '61a8a43fea670.jpg', 'Том Сойер', '1876', 'М. Твен'),
(71, 'Преступление и наказание', '61a8a4f592b36.jpg', 'Преступление и наказание', '1866', 'Ф.М Достоевский'),
(73, 'в', '61a9bc60d98be.', 'в', 'в', 'в');

-- --------------------------------------------------------

--
-- Структура таблицы `bxa`
--

CREATE TABLE `bxa` (
  `nameb` varchar(255) NOT NULL,
  `autors` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `bxa`
--

INSERT INTO `bxa` (`nameb`, `autors`) VALUES
('в', 'в'),
('Война и мир', 'Л.Н Толстой'),
('Капитанская дочка', 'А.С Пушкин'),
('Мертвые души', 'Н.В Гоголь'),
('Преступление и наказание', 'Ф.М Достоевский'),
('Робинзон Крузо', 'Д. Дэфо'),
('Том Сойер', 'М. Твен');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `Full_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`Full_Name`, `Login`, `Email`, `Password`) VALUES
('d', 'd', 'd@dd', 'd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `autors`
--
ALTER TABLE `autors`
  ADD PRIMARY KEY (`IDA`),
  ADD KEY `Name` (`autors`),
  ADD KEY `nameb` (`nameb`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`IDB`),
  ADD KEY `autors` (`autors`),
  ADD KEY `nameb` (`nameb`);

--
-- Индексы таблицы `bxa`
--
ALTER TABLE `bxa`
  ADD PRIMARY KEY (`nameb`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Full_Name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `autors`
--
ALTER TABLE `autors`
  MODIFY `IDA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `IDB` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
