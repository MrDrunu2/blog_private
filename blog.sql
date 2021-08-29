-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 24 2021 г., 20:11
-- Версия сервера: 8.0.26-0ubuntu0.20.04.2
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `descript` varchar(1000) NOT NULL DEFAULT 'Пользователи скрыли или удалили описание категории!',
  `views` int NOT NULL,
  `icon` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '<ion-icon name="terminal-outline"></ion-icon>'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `cat_name`, `descript`, `views`, `icon`) VALUES
(1, 'Новости Интернета', 'В этой категории мы рассказываем о новостях происходящих в интернете!', 13, '<ion-icon name=\"globe-outline\"></ion-icon>'),
(2, 'JS-NEWS', 'Новости о известном ЯП JavaScript (P.S: Травкой пахнет)', 6, '<ion-icon name=\"logo-nodejs\"></ion-icon>'),
(3, 'Разное', 'Пользователи скрыли или удалили описание категории!', 332, '<ion-icon name=\"logo-web-component\"></ion-icon>'),
(4, 'Технология сайтостроения', 'Пользователи скрыли или удалили описание категории!', 134, '<ion-icon name=\"terminal-outline\"></ion-icon>');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `category_id`, `title`, `text`, `date`, `views`) VALUES
(81, 4, 'ewfwef', 'wefwefwe32432432423', '2021-08-24 18:50:22', 34),
(82, 2, 'ewfwef', 'wefwefwe324324324234', '2021-08-24 18:50:28', 36),
(83, 2, 'ewfwef', 'wefwefwe324324324234', '2021-08-24 18:50:28', 34),
(84, 3, 'ewfwef', 'wefwefwe324324324234', '2021-08-24 18:50:29', 37),
(85, 1, 'ewfwef', 'wefwefwe324324324234', '2021-08-24 18:50:29', 34),
(86, 1, 'ewfwef', 'wefwefwe324324324234', '2021-08-24 18:50:29', 35),
(87, 2, 'ewfwef', 'wefwe', '2021-08-24 18:50:29', 35),
(88, 4, 'ewfwef', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', '2021-08-24 18:57:29', 35);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
