-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: mysql:3306
-- Время создания: Ноя 17 2025 г., 19:31
-- Версия сервера: 5.7.44
-- Версия PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Структура таблицы `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `answer_a` varchar(255) NOT NULL,
  `answer_b` varchar(255) NOT NULL,
  `answer_c` varchar(255) NOT NULL,
  `answer_d` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `question`
--

INSERT INTO `question` (`id`, `text`, `answer_a`, `answer_b`, `answer_c`, `answer_d`, `created_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the\r\n                    industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and\r\n                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap\r\n                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the\r\n                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing\r\n                    software like Aldus PageMaker including versions of Lorem Ipsum.', 'Answer 1', 'Answer 2', 'Answer 3', 'Answer 4', '2025-11-17 17:17:35'),
(2, 'сурак суббота', 'ааа', 'ббб', 'ссс', 'ддд', '2025-11-17 18:13:39'),
(3, 'сурак воскр', 'ааа', 'ббб', 'ссс', 'ддд', '2025-11-17 18:17:48'),
(4, 'сурак понедельник', 'аа', 'бб', 'сс', 'дд', '2025-11-17 18:18:02'),
(5, 'сурак вторник', 'аа', 'бб', 'сс', 'дд', '2025-11-17 18:18:12'),
(6, 'сурак среда', 'а', 'б', 'с', 'д', '2025-11-17 18:19:30'),
(7, 'сурак четверг', 'а', 'б', 'с', 'д', '2025-11-17 18:19:43'),
(8, 'сурак пятница', 'а', 'б', 'с', 'д', '2025-11-17 18:19:53'),
(9, 'сурак суббота', 'а', 'б', 'с', 'д', '2025-11-17 18:20:33'),
(10, 'сурак воскр', 'а', 'б', 'с', 'д', '2025-11-17 18:20:43'),
(11, 'сурак понедельник', 'а', 'б', 'с', 'д', '2025-11-17 18:20:54');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `whatsapp`, `score`) VALUES
(3, NULL, '77478725287', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
