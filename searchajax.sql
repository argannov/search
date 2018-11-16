-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2018 г., 17:30
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `searchajax`
--

-- --------------------------------------------------------

--
-- Структура таблицы `statii`
--

CREATE TABLE `statii` (
  `id_statii` int(11) NOT NULL,
  `title_statii` varchar(200) NOT NULL DEFAULT '0',
  `discription` varchar(200) NOT NULL DEFAULT '0',
  `content` varchar(2000) NOT NULL DEFAULT '0',
  `image` varchar(2000) NOT NULL DEFAULT '0',
  `url` varchar(2000) NOT NULL DEFAULT '0',
  `like` varchar(2000) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `statii`
--

INSERT INTO `statii` (`id_statii`, `title_statii`, `discription`, `content`, `image`, `url`, `like`) VALUES
(16, 'Я обосрался', 'Очень интересная история', 'Ну вот я и обсрался сижу, весь грязный, даже не знаю,что сказать ребята помогите, принесите хотябы бумаги чтоль, мне очень плохо, все воняет говном...', 'https://www.meme-arsenal.com/memes/9a0d20dcef3b837364c319b0c7e4fb52.jpg', '/php/dynamic.php/obosralsa', '0'),
(18, 'На пути к успеху', 'ну привет', 'Ну здорова, уже шаблонизируется проект, скоро кабинет буду мутить', 'https://avatars.mds.yandex.net/get-pdb/28866/dc681160-ab9a-4e67-9945-b3ed3b6dc732/s1200', '/php/dynamic.php/shabloniziruy', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(21) NOT NULL,
  `password` varchar(21) NOT NULL,
  `name` varchar(30) NOT NULL,
  `family` varchar(30) NOT NULL,
  `date_brt` date NOT NULL,
  `date_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `statii`
--
ALTER TABLE `statii`
  ADD PRIMARY KEY (`id_statii`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `statii`
--
ALTER TABLE `statii`
  MODIFY `id_statii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
