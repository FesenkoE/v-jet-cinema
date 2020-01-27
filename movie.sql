-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 27 2020 г., 13:54
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `movie`
--

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `img_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `img_path`) VALUES
(1, 'Dullitle', 'some description of film Dullitle                                                                                                       ', NULL),
(2, 'Bad Boys', 'some description of film Bad Boys', NULL),
(3, 'Grudge', 'some description of film Grudge', NULL),
(8, 'new film', 'description of new film', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `movie_date` date DEFAULT NULL,
  `movie_time` time DEFAULT NULL,
  `tickets_sale` int(11) NOT NULL DEFAULT '50',
  `tickets_sold` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `session`
--

INSERT INTO `session` (`id`, `movie_id`, `movie_date`, `movie_time`, `tickets_sale`, `tickets_sold`) VALUES
(2, 2, '2020-01-26', '12:00:00', 48, 2),
(3, 1, '2020-01-27', '10:00:00', 49, 1),
(4, 2, '2020-01-27', '12:00:00', 48, 2),
(7, 1, '2020-01-28', '20:00:00', 50, 0),
(8, 2, '2020-01-29', '18:00:00', 50, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
