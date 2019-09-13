-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 13 2019 г., 09:47
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `teachersite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id_send` int(11) NOT NULL,
  `sender_name` varchar(40) NOT NULL,
  `sender_mail` varchar(55) NOT NULL,
  `sender_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id_send`, `sender_name`, `sender_mail`, `sender_text`) VALUES
(1, 'Человек', 'human@hrgre.com', 'Привет'),
(2, 'Человек', 'human@hrgre.com', 'Привет'),
(3, 'dadawd', 'dadawddaw@dawdawd.ru', 'dcvcvcxv');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `post_title` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `post_tags` varchar(35) NOT NULL,
  `post_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id_post`, `post_title`, `post_tags`, `post_text`) VALUES
(1, 'dawdwad', 'fewfwefew', 'fwefegvxvcxv'),
(3, 'gewfewfew', 'gewfewvxcvxcvxc', 'sfewt'),
(4, 'dawdawdawdsacawcwaczxc', 'даддаад', '21334243252'),
(5, 'Сервер 3000', 'новости, сервер, тупичок ', 'Третьего дня, при помощи проверенных камрадов, в кабинете под номером 406 появился новый мегадевайс - \"Сервер 3000\". Сразу же, задыхаясь от жадности, вскрыл сервер цепкими лапами, и заюзал данный мегадевайс. Конфиг - моё почтение. Настоящей глыбой был сервер в далёком 2003 году. Поставив на него Windows Server, провозился с ним весь день. С Linux не идёт ни в какое сравнение. Девайс отличный, рекомендую к приобретению. Всё это как водится, реклама. '),
(6, 'Lorem ipsum dolor sit amet', 'lorem, ipsum, dolor ', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi debitis ipsam quo rerum laborum exercitationem cum. Numquam cupiditate, maiores aspernatur repudiandae ullam molestias harum, mollitia pariatur sequi minima, ad praesentium! '),
(7, 'ПОСТ', 'ПОСТ', 'dawdawd'),
(8, 'dad', 'vbgfbfbgfbgf', 'rhgrehre');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`login`, `password`) VALUES
('123', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_send`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id_send` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
