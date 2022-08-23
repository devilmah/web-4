-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 23 2022 г., 07:09
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
-- База данных: `web_4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `firstname` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `bdate` date NOT NULL,
  `sex` varchar(5) NOT NULL DEFAULT '0',
  `amount` varchar(5) NOT NULL DEFAULT '0',
  `ability` varchar(11) NOT NULL DEFAULT '0',
  `bio` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `bdate`, `sex`, `amount`, `ability`, `bio`) VALUES
(3, 'sss', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', '1', 'бессмертие', 'Расскажите о себе'),
(4, 'Sonya', 'devilmahiru@gmail.com', '2022-06-16', 'Жен', '4', 'бессмертие', 'Расскажите о себе'),
(5, 'Т', 'devilmahiru@gmail.com', '2022-06-16', 'Жен', '4', 'бессмертие', 'Расскажите о себе'),
(6, 'Т', 'devilmahiru@gmail.com', '2022-06-16', 'Жен', '4', 'бессмертие', 'Расскажите о себе'),
(7, 'Т', 'devilmahiru@gmail.com', '2022-06-16', 'Жен', '4', '2', 'Расскажите о себе'),
(8, 'Т', 'devilmahiru@gmail.com', '2022-06-16', 'Жен', '4', 'левитация', 'Расскажите о себе'),
(9, ' ', 'noname@g', '2022-08-02', 'Муж', '1', 'бессмертие', 'Расскажите о себе');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
