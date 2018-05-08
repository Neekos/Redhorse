-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 08 2018 г., 13:12
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `discription`, `text`, `img`, `date_time`) VALUES
(1, 'Изучаем Slim', 'Изучение правил и ....', 'Тут текст', '', '2018-04-10 09:30:06'),
(2, 'Новая статья', 'Тут может быть что угодно ', 'тут текст', '', '2018-04-17 10:00:13'),
(3, 'Хорошая новость', 'Описание новости', 'длыовадлфоываждлофывжалдофывдлаофдылвоа', 'images/photo', '2018-04-16 13:12:10'),
(4, 'Плохая новость ', 'Тут описание плохой новсти', 'дфовыафроушоадфоуащожфыоуаодфоуаожауофдлафошыовадолывапжок пожыкопжоыькщпацщшкгщцгмщышвзащсэывщызщшплмпщзцбысэщашпщылбсщпл', 'images/photo', '2018-04-15 13:18:12'),
(5, 'Отображение времен', 'описание', 'фдлоадфываождо', '/image', '2018-04-14 14:15:23'),
(6, 'Автоматическое время', 'Описане', 'текст', 'картинка', '2018-04-18 15:49:49');

-- --------------------------------------------------------

--
-- Структура таблицы `blocked`
--

CREATE TABLE `blocked` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blocked`
--

INSERT INTO `blocked` (`id`, `ip`) VALUES
(1, '::1'),
(2, '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Конные прогулки и катание на лошадях', 0),
(2, 'Катание на лошади и пони', 1),
(3, 'Конные прогулки по лесу', 1),
(4, 'Программа для самых маленьких', 0),
(5, 'Индивидуальные занятия по программе \"Без седла\"', 4),
(6, 'Обучение Верховой езде', 0),
(7, 'Пони школа', 6),
(8, 'Базовый курс для начинающих', 6),
(9, 'Специализация', 6),
(10, 'Иппотерапия', 0),
(11, 'Оздоровительная верховая езда', 10),
(12, 'Фотосессии', 0),
(13, 'Аренда животных для фотосессий', 12),
(14, 'Постой лошади, аренда денника', 0),
(15, 'Постой лошади', 14),
(16, 'Услуги бейтора', 0),
(17, 'Мацион', 16),
(18, 'Подготовка молодых лошадей', 16),
(19, 'Подготовка к соревнования', 16),
(20, 'Услуги коневода', 0),
(21, 'Разминка лошадей', 20),
(22, 'Мойка,сушка лошади', 20),
(23, 'Седловка лошади', 20),
(24, 'Услуги коваля', 0),
(25, 'Расчистка копыт', 24),
(26, 'ковка без материала', 24),
(27, 'Ковка с материалом', 24),
(28, 'Прочие услуги', 0),
(29, 'Экскурсия по конюшне', 28),
(30, 'Продажа конского навоза', 28);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'первая категоря', 0, 0),
(2, 'Вторая категория', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephon` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `telephon`, `message`) VALUES
(0, 'Андрей', 'Nk@mail.ru', '89345040564', 'Оставил сообщение!');

-- --------------------------------------------------------

--
-- Структура таблицы `day_of_the_week`
--

CREATE TABLE `day_of_the_week` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `day_of_the_week`
--

INSERT INTO `day_of_the_week` (`id`, `day`) VALUES
(7, 'Будни'),
(8, 'Выходные');

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `title`, `img`, `date_time`) VALUES
(1, 'Новое фото', '/template/images/06-funny-cat-wallpapercat-wallpaper.jpg', '2018-05-04 17:21:32'),
(2, 'Второе фото', '/template/images/6.jpg', '2018-05-04 17:24:25'),
(3, 'Лошадка', '/template/images/1.jpg', '2018-05-04 17:43:41');

-- --------------------------------------------------------

--
-- Структура таблицы `number_of_lessons`
--

CREATE TABLE `number_of_lessons` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `number_of_lessons`
--

INSERT INTO `number_of_lessons` (`id`, `number`) VALUES
(1, '1 занятие'),
(2, 'Абонемент 4 занятия (месяц)'),
(3, 'Абонемент 8 занятий 2 раза в неделю'),
(4, 'Абонемент 12 занятий (месяц)'),
(5, 'Абонемент 16 занятий (месяц)'),
(6, 'Абонемент Без лимитный 30 занятий (месяц)');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_of_order` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `date_of_order`) VALUES
(1, 1, '2018-04-17 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `order_list`
--

CREATE TABLE `order_list` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_ product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `id_services` int(11) NOT NULL,
  `zam` varchar(255) NOT NULL,
  `id_number` int(11) NOT NULL,
  `price_weekdays` varchar(255) NOT NULL,
  `price_weekend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `id_services`, `zam`, `id_number`, `price_weekdays`, `price_weekend`) VALUES
(1, 1, '', 1, '600', '700'),
(2, 1, '', 3, '2900', '3100'),
(3, 1, '15 дней', 4, '6000', ''),
(4, 1, '15 дней', 5, '10000', ''),
(12, 2, '', 1, '650', '700'),
(13, 2, '', 2, '2400', '2600'),
(14, 2, '', 3, '3800', '4200'),
(15, 2, '15 дней', 6, '5100', ''),
(16, 2, '15 дней', 5, '6400', ''),
(17, 2, '15 дней', 6, '10500', '');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id`, `username`, `dat`, `msg`) VALUES
(1, 'Паша', '2018-05-01 18:22:44', 'Что все сложно!');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(0, 'user'),
(1, 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `discription`, `parent_id`) VALUES
(1, 'Индивидуальные занятия с тренером для детей и взрослых', 'Продолжительность 1 занятия – 45 минут, с учетом седловки\r\nПрограмма индивидуальных занятий подбирается конкретно под каждого всадника. Это может быть: занятие по выездке, конкуру, поездки в лес, теоретические занятия + практика в конюшне, езда без седла, подготовка к различным соревнованиям.', 1),
(2, 'Развивающие занятия для детей от 2-х лет по программе «Я люблю свою лошадку». Пони-клуб (для детей с 5 до 8 лет)', 'Продолжительность 1 занятия – от 30 до 45 мину\r\n', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `time_of_lessons`
--

CREATE TABLE `time_of_lessons` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `time_of_lessons`
--

INSERT INTO `time_of_lessons` (`id`, `time`) VALUES
(1, '10 мин'),
(2, '30 мин'),
(3, '45 мин'),
(4, '60 мин');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'Групповой'),
(2, 'Идивидуальный');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephon` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_join` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `middlename`, `email`, `telephon`, `password`, `date_join`, `role`) VALUES
(1, 'user', 'user', 'user', 'user@mail.ru', '900000000', 'ee11cbb19052e40b07aac0ca060c23ee', '2018-04-27 15:52:41', 0),
(2, 'admin', 'admin', 'admin', 'admin@mail.ru', '90000000', '21232f297a57a5a743894a0e4a801fc3', '2018-04-27 15:53:12', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blocked`
--
ALTER TABLE `blocked`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `day_of_the_week`
--
ALTER TABLE `day_of_the_week`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `number_of_lessons`
--
ALTER TABLE `number_of_lessons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_serves` (`id_ product`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_services` (`id_services`),
  ADD KEY `id_number` (`id_number`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Индексы таблицы `time_of_lessons`
--
ALTER TABLE `time_of_lessons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `blocked`
--
ALTER TABLE `blocked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `day_of_the_week`
--
ALTER TABLE `day_of_the_week`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `number_of_lessons`
--
ALTER TABLE `number_of_lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_list_ibfk_2` FOREIGN KEY (`id_ product`) REFERENCES `product` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_services`) REFERENCES `services` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_number`) REFERENCES `number_of_lessons` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
