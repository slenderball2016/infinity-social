-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 20 2022 г., 14:36
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `e96913gu_infin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--
-- Создание: Июл 06 2021 г., 13:06
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(128) NOT NULL,
  `id_user` int(111) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`Id`, `message`, `from`, `id_user`, `created`) VALUES
(1, 'Hi everyone ', 'Никита', 10, '2021-07-06 14:41:19');

-- --------------------------------------------------------

--
-- Структура таблицы `chats`
--
-- Создание: Янв 25 2022 г., 10:05
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE `chats` (
  `Id` int(111) NOT NULL,
  `chat_name` varchar(1000) DEFAULT NULL,
  `user_1` int(111) DEFAULT NULL,
  `user_2` int(111) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `online` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chats`
--

INSERT INTO `chats` (`Id`, `chat_name`, `user_1`, `user_2`, `date`, `online`) VALUES
(1, 'chat_11_10', 10, 11, '2022-01-25 10:42:42', 0),
(4, 'chat_10_9', 10, 9, '2022-01-25 10:05:49', 0),
(5, 'chat_59_10', 10, 59, '2022-02-25 18:42:15', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `chat_10_9`
--
-- Создание: Янв 25 2022 г., 10:03
--

DROP TABLE IF EXISTS `chat_10_9`;
CREATE TABLE `chat_10_9` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat_10_9`
--

INSERT INTO `chat_10_9` (`Id`, `message`, `from`, `id_user`, `age`, `created`) VALUES
(1, ':)', 'Никита', 10, 'N', '2022-01-25 10:04:04');

-- --------------------------------------------------------

--
-- Структура таблицы `chat_11_10`
--
-- Создание: Янв 16 2022 г., 16:43
--

DROP TABLE IF EXISTS `chat_11_10`;
CREATE TABLE `chat_11_10` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat_11_10`
--

INSERT INTO `chat_11_10` (`Id`, `message`, `from`, `id_user`, `age`, `created`) VALUES
(1, 'test', 'Никита', 10, 'O', '2022-01-16 16:47:16'),
(2, 'test', 'Никита', 10, 'O', '2022-01-16 16:47:22'),
(3, 'test', 'Никита', 10, 'O', '2022-01-16 16:47:27'),
(4, 'test', 'Никита', 10, 'O', '2022-01-16 16:47:45'),
(5, 'dcscsc', 'Никита', 10, 'O', '2022-01-16 16:59:11'),
(6, 'sscsdcdcscsdcscscsd', 'Никита', 10, 'O', '2022-01-16 17:02:53'),
(7, 'jkkjkjkjk', 'Никита', 10, 'O', '2022-01-16 17:04:04'),
(8, 'test', 'Никита', 10, 'O', '2022-01-25 10:17:15'),
(9, '12', 'Никита', 10, 'O', '2022-01-25 10:20:50'),
(10, '', 'Никита', 10, 'O', '2022-01-25 10:21:24'),
(11, 'test#1', 'Никита', 10, 'N', '2022-01-25 10:42:42');

-- --------------------------------------------------------

--
-- Структура таблицы `chat_54_10`
--
-- Создание: Янв 18 2022 г., 10:19
--

DROP TABLE IF EXISTS `chat_54_10`;
CREATE TABLE `chat_54_10` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `chat_59_10`
--
-- Создание: Фев 24 2022 г., 13:44
--

DROP TABLE IF EXISTS `chat_59_10`;
CREATE TABLE `chat_59_10` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat_59_10`
--

INSERT INTO `chat_59_10` (`Id`, `message`, `from`, `id_user`, `age`, `created`) VALUES
(1, 'Еще один знакого не хотели братт', 'Никита', 10, 'O', '2022-02-25 18:34:48'),
(2, '*одного', 'Никита', 10, 'O', '2022-02-25 18:34:59'),
(3, 'Непонял, тупой', 'Loxotron', 59, 'O', '2022-02-25 18:36:06'),
(4, 'Куда брать?', 'Loxotron', 59, 'O', '2022-02-25 18:36:52'),
(5, 'И куда не хотели?', 'Loxotron', 59, 'O', '2022-02-25 18:37:01'),
(6, 'В армию', 'Никита', 10, 'O', '2022-02-25 18:40:14'),
(7, 'А почему?', 'Loxotron', 59, 'O', '2022-02-25 18:40:26'),
(8, 'Не говорят. Но там машина ехала с военными и взяли с собой', 'Никита', 10, 'O', '2022-02-25 18:41:07'),
(9, 'Ясно', 'Loxotron', 59, 'O', '2022-02-25 18:41:24'),
(10, 'Сейчас в вайбере напишу про Николаев. Мама с дедушкой поговорит и напишу', 'Никита', 10, 'N', '2022-02-25 18:42:15');

-- --------------------------------------------------------

--
-- Структура таблицы `chat_ex`
--
-- Создание: Июл 06 2021 г., 15:18
--

DROP TABLE IF EXISTS `chat_ex`;
CREATE TABLE `chat_ex` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(128) NOT NULL,
  `id_user` int(111) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat_ex`
--

INSERT INTO `chat_ex` (`Id`, `message`, `from`, `id_user`, `created`) VALUES
(1, 'Hi everyone ', 'Никита', 10, '2021-07-06 14:41:19');

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--
-- Создание: Июл 10 2021 г., 13:51
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE `friends` (
  `Id` int(111) NOT NULL,
  `user1` int(11) DEFAULT NULL,
  `user2` int(11) DEFAULT NULL,
  `status_1` int(1) NOT NULL,
  `status_2` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`Id`, `user1`, `user2`, `status_1`, `status_2`) VALUES
(4, 10, 11, 1, 1),
(5, 10, 24, 1, 0),
(6, 24, 11, 1, 1),
(7, 10, 16, 1, 0),
(8, 25, 10, 1, 1),
(9, 43, 21, 1, 0),
(10, 46, 43, 1, 0),
(11, 46, 10, 1, 1),
(12, 10, 45, 1, 0),
(13, 10, 48, 1, 1),
(14, 10, 44, 1, 0),
(15, 10, 9, 1, 0),
(16, 18, 10, 1, 1),
(17, 18, 21, 1, 0),
(18, 53, 10, 1, 1),
(19, 53, 47, 1, 1),
(20, 53, 21, 1, 0),
(21, 53, 45, 1, 0),
(22, 53, 18, 1, 0),
(23, 57, 53, 1, 0),
(24, 48, 54, 1, 0),
(25, 60, 60, 1, 1),
(26, 63, 63, 1, 1),
(27, 63, 54, 1, 0),
(28, 63, 60, 1, 0),
(30, 63, 64, 1, 1),
(31, 64, 61, 1, 0),
(32, 63, 59, 1, 0),
(33, 64, 64, 1, 1),
(34, 63, 61, 1, 0),
(35, 63, 66, 1, 0),
(36, 63, 67, 1, 0),
(37, 70, 71, 1, 1),
(38, 71, 70, 1, 1),
(39, 73, 54, 1, 0),
(40, 70, 53, 1, 0),
(41, 70, 74, 1, 0),
(42, 10, 10, 1, 1),
(43, 76, 50, 1, 0),
(44, 10, 21, 1, 0),
(45, 10, 57, 1, 0),
(46, 10, 74, 1, 0),
(47, 10, 59, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--
-- Создание: Июл 24 2021 г., 16:57
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes` (
  `Id` int(222) NOT NULL,
  `user_id` int(111) NOT NULL,
  `post_id` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`Id`, `user_id`, `post_id`) VALUES
(2, 43, 4),
(3, 46, 4),
(4, 45, 3),
(7, 10, 2),
(9, 10, 1),
(10, 10, 5),
(12, 10, 3),
(14, 57, 7),
(15, 57, 6),
(17, 57, 5),
(18, 57, 4),
(19, 57, 3),
(20, 57, 2),
(21, 57, 1),
(22, 10, 9),
(23, 10, 8),
(24, 10, 7),
(25, 10, 6),
(26, 60, 3),
(27, 60, 13),
(28, 60, 12),
(29, 60, 11),
(30, 61, 3),
(31, 62, 14),
(32, 61, 15),
(33, 61, 16),
(34, 63, 11),
(35, 63, 12),
(36, 63, 14),
(37, 63, 15),
(38, 63, 16),
(39, 63, 17),
(40, 63, 18),
(41, 63, 19),
(42, 63, 20),
(43, 66, 14),
(44, 71, 21),
(46, 69, 21),
(47, 70, 22),
(48, 70, 23),
(50, 68, 21),
(52, 71, 22),
(53, 48, 27),
(54, 10, 27),
(55, 59, 35),
(56, 59, 27),
(57, 73, 36),
(58, 73, 38),
(59, 73, 39),
(61, 66, 44),
(62, 66, 39),
(63, 66, 37),
(64, 66, 34),
(65, 61, 46),
(66, 61, 47),
(67, 76, 47),
(68, 76, 46),
(69, 76, 45),
(70, 76, 38),
(71, 76, 36),
(72, 76, 3),
(83, 10, 45),
(84, 10, 17),
(85, 10, 13),
(86, 10, 12),
(88, 10, 11),
(89, 10, 10),
(90, 10, 4),
(91, 10, 36),
(92, 10, 38);

-- --------------------------------------------------------

--
-- Структура таблицы `notification`
--
-- Создание: Июл 04 2021 г., 17:00
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `Id` int(225) NOT NULL,
  `user_id` int(111) DEFAULT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notification`
--

INSERT INTO `notification` (`Id`, `user_id`, `text`, `link`, `status`) VALUES
(1, 9, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 0),
(2, 11, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(3, 11, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(4, 11, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(5, 11, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 0),
(6, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(7, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(8, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(9, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(10, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(11, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(12, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(13, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(14, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(15, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(16, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(17, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(18, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(19, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(20, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(21, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(22, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(23, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(24, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(25, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(26, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(27, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(28, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(29, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(30, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(31, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(32, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(33, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 1),
(34, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(35, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(36, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(37, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 0),
(38, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(39, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 0),
(40, 10, 'Вам написав(ала) повідомлення користувач Loxotron', 'http://e96913gu.beget.tech/chat/create.php?id=59', 1),
(41, 59, 'Вам написав(ала) повідомлення користувач Никита', 'http://e96913gu.beget.tech/chat/create.php?id=10', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--
-- Создание: Июл 21 2021 г., 16:17
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `post_id` int(111) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `text` varchar(10000) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `likes` int(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`post_id`, `login`, `user_id`, `text`, `img`, `likes`) VALUES
(1, 'Vova', 9, ' Привіт! Мене звати Вова.Мені дуже подобається ця соціальна мережа', '0', 2),
(2, 'Никита', 10, ' Привіт усім!', '0', 2),
(3, 'Bohdan Pchela', 23, ' Привет! Меня зовут Богдан! Приятно познакомиться.', 'uploads/16209279591f44b.png', 6),
(4, 'Наталя', 43, ' Hello!', '0', 4),
(5, 'Goil', 46, ' Hello Everybody there!!!', '0', 2),
(6, 'Лина', 53, '  Hello world ', '0', 2),
(7, 'Alexander Striukov', 56, 'Хорошая работа! ', '0', 2),
(9, 'Катерина', 57, ' Який гарний сайт', '0', 1),
(10, 'Cyrus Blackwood', 48, ' Всем ку, олды на месте', '0', 1),
(11, 'AnonymousOnStuff', 60, ' Если хочешь быть пингвином. Будь сначала готов к холоду и рыбной диете.', '0', 3),
(12, 'AnonymousOnStuff', 60, ' Для тех же, кто избирает путь слесаря, нужно быть готовым к трубам и их содержимому.', '0', 3),
(13, 'AnonymousOnStuff', 60, ' А я буду кроликом. За честь и отвагу.', '0', 2),
(17, 'Лысый', 63, ' \"Обидно когда кабан\"', '0', 2),
(36, 'Marmok', 73, ' Pablo', '0', 3),
(38, 'Marmok', 73, ' Babaduk', '0', 3),
(45, 'Никита', 10, 'Test', '0', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Июл 06 2021 г., 18:00
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_posts` int(11) NOT NULL,
  `chat` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `n_posts`, `chat`) VALUES
(9, 'Вова', 'Vova', 'kovka@mirkovki.ks.ua', 'e807f1fcf82d132f9bb018ca6738a19f', 'uploads/1618585782Jellyfish.jpg', 0, ''),
(10, 'Никита', 'Никита', 'slenderball2020@gmail.com', 'd3a943e667726696c31b7acc46159bb1', 'uploads/1618588646h2HVjFj.jpeg', 1, ''),
(11, 'Ольга', 'Ольга', 'mamalelya2017@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'uploads/icon.jpg', 0, ''),
(12, 'Valya', 'Vesna', '7788vesna@gmail.com', '2b0ecdd647a719350c417eccb7def956', 'uploads/161874139820170428184342.jpg', 0, '0'),
(13, 'Юлія', 'PopovaYuliia', 'popovajuly128@gmail.com', '7f7123128ef95ea26e66a3546953956b', 'uploads/1617352268Иконка.png', 0, '0'),
(14, 'Сергій', 'PopovSerg', 'popovsergey128@gmail.com', 'b881bbadf6a0328ac0243a534fb06c6e', 'uploads/1617352268Иконка.png', 0, '0'),
(15, 'Андрій', 'PopovAndriy', 'popovsergey128@gmail.com', '069433e0d282a7ce101ddc8a4f0cce97', 'uploads/1617352268Иконка.png', 0, '0'),
(16, 'Лиза', 'liz000kk', 'akovlevaliza863@gmail.com', '7de0991625ce8b82cfc7313a87024c37', 'uploads/1618780306black-sea_obl.jpg', 0, '0'),
(17, 'Marmok', 'Hello', 'hoper347were@gmail.com', '625559ff367c7ddb1489d3763661e851', 'uploads/1617352268Иконка.png', 0, '0'),
(18, 'Анастасия', 'myt.anastasia ', 'nastyamytrofanova35@gmail.com', '99183caae58178c089ddde1fe8991dbd', 'uploads/1617352268Иконка.png', 0, ''),
(19, 'Анастасия', 'f0R209', 'malts.anast@gmail.com', 'c62d929e7b7e7b6165923a5dfc60cb56', 'uploads/1619772037IMG_20210327_040240_573.jpg', 0, '0'),
(20, 'Данил', 'Sixine', 'panchenkodanya4@gmail.com', '1e9ef9f3b90ccdf4423f9fe165907d95', 'uploads/1617352268Иконка.png', 0, '0'),
(21, 'Артем', 'BlackFlaim', 'bondar1605@gmail.com', '1d1d89621c8a43c6eaf0f0e6da9e5787', 'uploads/1620454090bdLa7QOfTg9gru0D.jpg', 0, '0'),
(22, 'Татьяна ', 'tanchik84', 'tanchik0784@gmail.com', '301bd17344eb5f9bc51f15c6cb91ae5b', 'uploads/1617352268Иконка.png', 0, '0'),
(24, 'Lyudmila', 'Lyudovik', 'lyuda_vix@ukr.net', '44192c047d1616768a788ab54b2f7121', 'uploads/unnamed.jpg', 0, ''),
(25, 'Илья', 'timberwathc', 'tyristrey@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'uploads/1629375438IMG-7c8978a67cbb721a5bdc7736ad71a1da-V.jpg', 0, ''),
(44, 'Мармок', 'Мармок', 'hoper347were@gmail.com', '8165b05ab2cd2895f59927178b552546', 'uploads/1617352268Иконка.png', 0, ''),
(45, 'scvvvv166', 'scvvvv166', 'kovalenkonasa@gmail.com', '932cfe73fc1385c7e1dfb5cd5c6ba6d9', 'uploads/1631079370IMG_20210722_162939_994.jpg', 0, ''),
(46, 'Goil', 'goil', 'streetgracer@gmail.com', '1a877423682c3dabb3cc9dbf7a949ef5', 'uploads/1617352268Иконка.png', 1, ''),
(47, 'Леся', 'piwel', 'opera230503@gmail.com', 'cc270fbdad768c1a857dfee234f4451d', 'uploads/1632140427IMG_20210610_101758_945.jpg', 0, ''),
(48, 'Cyrus Blackwood', 'cyrus_blackwood', 'strongman@gmail.com', '5546e8c213f84ba9c55668d1d71a7e9a', 'uploads/1617352268Иконка.png', 1, ''),
(49, 'Андрей', 'Попов', 'popovsergey128@icloud.com', 'b881bbadf6a0328ac0243a534fb06c6e', 'uploads/164244579009A26FEC-59FE-4150-901F-3D46D5421E5F.jpeg', 0, ''),
(50, 'Slavka', 'Slava', 'chupsikimus@gmail.com', '7432b3b3e0b119f795d19fc49e830d88', 'uploads/1617352268Иконка.png', 0, ''),
(51, 'Илон', 'Маск', 'panchenkodanya4@gmail.com', '12f13afb5003e3fc35fb2bcfe84f78c3', 'uploads/1617352268Иконка.png', 0, ''),
(53, 'Лина', 'p.aakk', 'kpd1311@gmail.com', '0fcb275265026012d2eb594adcdcbaa2', 'uploads/1638273649IMG_20211129_151218_248.webp', 1, ''),
(54, 'Penguin', 'Pen', 'no@no.no', '4122cb13c7a474c1976c9706ae36521d', 'uploads/16425011721200px-NewTux.svg.png', 1, ''),
(56, 'Alexander Striukov', 'billi0naire.1', 'sanya1469uchiha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1617352268Иконка.png', 1, ''),
(57, 'Катерина', 'Kate:)', 'si28aj8poqa@gmail.com', '958e49e7552048f602254fc189e8f431', 'uploads/1638277440BED92F26-CD00-4429-80CC-8705270BF99D.jpeg', 1, ''),
(59, 'Loxotron', 'Loxotron', 'loxotron@gmaik.com', '9a88b987cf68bf4fdc06a1e83c942006', 'uploads/1642081826sm.0fe20042_0bb8_4781_82f4_7130f928b021.0.750.jpg', 1, ''),
(60, 'Anonymous OnStuff', 'AnonymousOnStuff', 'namespacealt@gmail.com', '683dd1353eeeb6656813bead13d79a56', 'uploads/1638305260inbound7266378572219305157.jpg', 1, ''),
(61, 'Павел Руднев', 'pavelrudnev11', 'pavelrudnev11@gmail.com', '676db05e01ee92e45c0ed3b013f873bd', 'uploads/1617352268Иконка.png', 1, ''),
(62, 'бобик', 'bobikbebra', 'namespacealt@gmail.com', '08e60be9345bdf72d4198e4f81768b9d', 'uploads/1638306714боба.png', 1, ''),
(63, 'Лысый', 'Кабан226', 'oleksaluiks@gmail.com', '0cf56bce4b340b9e8c7442cd94f01c57', 'uploads/1638339338IMG_20200531_231518.jpg', 1, ''),
(64, 'работяга', 'Работяга', 'sevciksivodedov@gmail.com', 'c5b75927304c23915b0f4b64f654a959', 'uploads/1638339790RDT_20211130_1200357788076750154561929.jpg', 1, ''),
(66, 'Алишер Моргенштерн', 'MoRgAySlAvSe_228', 'popipep46@gmail.com', '452b97084f53fd461f33687a27a21f4d', 'uploads/163834013520210609_152858.jpg', 1, ''),
(67, 'на завод', 'на завод', 'dhskdhsishh@gmail.com', '48d9cc27e9d2065c61ea6fecf41f259a', 'uploads/16383404268b9.png', 0, ''),
(69, 'Biba', 'Biba', 'test@test.com', '34a4a18d79a927b95abc2490a0593724', 'uploads/1638342492BEAA01C1-F99D-405B-9E1A-020E5FAB7DF7.png', 1, ''),
(70, 'EnFors', '161105', 'enfors89@gmail.com', '4c81b24c4e643bc372426c7f7d2f8b55', 'uploads/1617352268Иконка.png', 1, ''),
(71, 'Валерия', 'Oxayo', 'madaralazarev@gmail.com', '7680624777276dc6689e869645b79ce6', 'uploads/1638342597inbound396386628541437609.jpg', 1, ''),
(72, 'Vlad', 'XDDDDDDD', 'test@test.com', '77a1fe75fdde93c557aaef863af56ef7', 'uploads/1617352268Иконка.png', 0, ''),
(73, 'Marmok', 'Marmok', 'hoper347were@gmail.com', 'c8837b23ff8aaa8a2dde915473ce0991', 'uploads/1638343133IMG-e730cbbafcece7a7523cb7ce9dcccc1b-V.jpg', 1, ''),
(74, 'Саша', 'aleksandra.f', 'sashkafariseeva@gmail.com', '675202e26bb686cda34d8833702cafc0', 'uploads/1638344435Kuni_1615901660674.jpg', 0, ''),
(76, 'Bogdan', 'bogdan', 'bogdanpchela@gmail.com', 'fa0d92e32bed6a5260bc549b4830f08c', 'uploads/1617352268Иконка.png', 0, ''),
(77, 'Ярослав', 'YaroslavG', 'yaroslavgala1208@gmail.com', 'e4c6d69f163256035f5a72a79b416b53', 'uploads/1617352268Иконка.png', 0, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `chat_name` (`chat_name`);

--
-- Индексы таблицы `chat_10_9`
--
ALTER TABLE `chat_10_9`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `chat_11_10`
--
ALTER TABLE `chat_11_10`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `chat_54_10`
--
ALTER TABLE `chat_54_10`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `chat_59_10`
--
ALTER TABLE `chat_59_10`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `chat_ex`
--
ALTER TABLE `chat_ex`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `chats`
--
ALTER TABLE `chats`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `chat_10_9`
--
ALTER TABLE `chat_10_9`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `chat_11_10`
--
ALTER TABLE `chat_11_10`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `chat_54_10`
--
ALTER TABLE `chat_54_10`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `chat_59_10`
--
ALTER TABLE `chat_59_10`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `chat_ex`
--
ALTER TABLE `chat_ex`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `friends`
--
ALTER TABLE `friends`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `Id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT для таблицы `notification`
--
ALTER TABLE `notification`
  MODIFY `Id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
