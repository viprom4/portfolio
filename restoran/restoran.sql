-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 24 2021 г., 16:26
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restoran`
--

-- --------------------------------------------------------

--
-- Структура таблицы `groups_dish`
--

CREATE TABLE `groups_dish` (
  `id_group` int(11) NOT NULL,
  `name_group-dish` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id_ dish` int(11) NOT NULL,
  `name_group-dish` varchar(255) NOT NULL,
  `name_dish` varchar(255) NOT NULL,
  `price_dish` varchar(8) NOT NULL,
  `info_dish` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `tokens`
--

CREATE TABLE `tokens` (
  `id_token` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `session_id` varchar(64) NOT NULL,
  `token_start` timestamp NOT NULL DEFAULT current_timestamp(),
  `token_expiration` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tokens`
--

INSERT INTO `tokens` (`id_token`, `id_user`, `token`, `session_id`, `token_start`, `token_expiration`) VALUES
(2, 2, 'NQepl2vvz6ne8tZW4McHiVdkiPMDg0zC', 'bmrooirc8diaqtmvulvkr2qh5e', '2021-06-24 13:35:36', '2021-06-24 14:25:32');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(16) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `user_email`, `user_name`, `user_password`) VALUES
(1, 'admin@a.a', 'admin', '123'),
(2, '123a56z5@gmail.com', 'Максим', 'qwerty321');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `groups_dish`
--
ALTER TABLE `groups_dish`
  ADD PRIMARY KEY (`id_group`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_ dish`);

--
-- Индексы таблицы `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id_token`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `groups_dish`
--
ALTER TABLE `groups_dish`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id_ dish` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
