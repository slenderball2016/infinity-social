-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Вер 19 2024 р., 11:23
-- Версія сервера: 10.4.28-MariaDB
-- Версія PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `infinity`
--

-- --------------------------------------------------------

--
-- Структура таблиці `chat`
--

CREATE TABLE `chat` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(128) NOT NULL,
  `id_user` int(111) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп даних таблиці `chat`
--

INSERT INTO `chat` (`Id`, `message`, `from`, `id_user`, `created`) VALUES
(1, 'Hi everyone ', 'Никита', 10, '2021-07-06 14:41:19');

-- --------------------------------------------------------

--
-- Структура таблиці `chats`
--

CREATE TABLE `chats` (
  `Id` int(111) NOT NULL,
  `chat_name` varchar(1000) DEFAULT NULL,
  `user_1` int(111) DEFAULT NULL,
  `user_2` int(111) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `online` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_10_9`
--

CREATE TABLE `chat_10_9` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_11_9`
--

CREATE TABLE `chat_11_9` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп даних таблиці `chat_11_9`
--

INSERT INTO `chat_11_9` (`Id`, `message`, `from`, `id_user`, `age`, `created`) VALUES
(1, 'dgsdfgsdgfsd', 'Вова', 9, 'N', '2024-09-15 17:17:19');

-- --------------------------------------------------------

--
-- Структура таблиці `chat_11_10`
--

CREATE TABLE `chat_11_10` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп даних таблиці `chat_11_10`
--

INSERT INTO `chat_11_10` (`Id`, `message`, `from`, `id_user`, `age`, `created`) VALUES

-- --------------------------------------------------------

--
-- Структура таблиці `chat_12_10`
--

CREATE TABLE `chat_12_10` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_46_11`
--

CREATE TABLE `chat_46_11` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_54_10`
--

CREATE TABLE `chat_54_10` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_59_10`
--

CREATE TABLE `chat_59_10` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_74_10`
--

CREATE TABLE `chat_74_10` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_78_10`
--

CREATE TABLE `chat_78_10` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `chat_ex`
--

CREATE TABLE `chat_ex` (
  `Id` int(111) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(128) NOT NULL,
  `id_user` int(111) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Структура таблиці `friends`
--

CREATE TABLE `friends` (
  `Id` int(111) NOT NULL,
  `user1` int(11) DEFAULT NULL,
  `user2` int(11) DEFAULT NULL,
  `status_1` int(1) NOT NULL,
  `status_2` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Структура таблиці `likes`
--

CREATE TABLE `likes` (
  `Id` int(222) NOT NULL,
  `user_id` int(111) NOT NULL,
  `post_id` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Структура таблиці `notification`
--

CREATE TABLE `notification` (
  `Id` int(225) NOT NULL,
  `user_id` int(111) DEFAULT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Структура таблиці `posts`
--

CREATE TABLE `posts` (
  `post_id` int(111) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `text` varchar(10000) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `likes` int(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `n_posts` int(11) NOT NULL,
  `chat` varchar(111) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `n_posts`, `chat`) VALUES
(9, 'Вова', 'Vova', 'test@test.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'uploads/1618585782Jellyfish.jpg', 0, '0'),
(10, 'Нікіта', 'Нікіта', 'tsst@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'uploads/1618588646h2HVjFj.jpeg', 1, ''),
(11, 'Ольга', 'Ольга', 'test@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'uploads/icon.jpg', 3, ''),
(78, 'Nick', 'slenderball1234', 'test@test.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'uploads/1694330943sc-fi-mining-robot.jpg', 1, '');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `chat_name` (`chat_name`);

--
-- Індекси таблиці `chat_10_9`
--
ALTER TABLE `chat_10_9`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `chat_11_9`
--
ALTER TABLE `chat_11_9`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `chat_11_10`
--
ALTER TABLE `chat_11_10`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `chat_12_10`
--
ALTER TABLE `chat_12_10`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `chat_46_11`
--
ALTER TABLE `chat_46_11`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `chat_54_10`
--
ALTER TABLE `chat_54_10`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `chat_59_10`
--
ALTER TABLE `chat_59_10`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `chat_74_10`
--
ALTER TABLE `chat_74_10`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `chat_78_10`
--
ALTER TABLE `chat_78_10`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `chat_ex`
--
ALTER TABLE `chat_ex`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Id`);

--
-- Індекси таблиці `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `chat`
--
ALTER TABLE `chat`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `chats`
--
ALTER TABLE `chats`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT для таблиці `chat_10_9`
--
ALTER TABLE `chat_10_9`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `chat_11_9`
--
ALTER TABLE `chat_11_9`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `chat_11_10`
--
ALTER TABLE `chat_11_10`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблиці `chat_12_10`
--
ALTER TABLE `chat_12_10`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `chat_46_11`
--
ALTER TABLE `chat_46_11`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `chat_54_10`
--
ALTER TABLE `chat_54_10`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `chat_59_10`
--
ALTER TABLE `chat_59_10`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `chat_74_10`
--
ALTER TABLE `chat_74_10`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `chat_78_10`
--
ALTER TABLE `chat_78_10`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `chat_ex`
--
ALTER TABLE `chat_ex`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `friends`
--
ALTER TABLE `friends`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблиці `likes`
--
ALTER TABLE `likes`
  MODIFY `Id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT для таблиці `notification`
--
ALTER TABLE `notification`
  MODIFY `Id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблиці `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
