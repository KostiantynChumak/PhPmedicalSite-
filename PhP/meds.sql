

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `rol` text NOT NULL,
  `name` varchar(25) NOT NULL,
  `specialization` varchar(15) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `zarplata` int(7) NOT NULL,
  `city` varchar(10) NOT NULL,
  `street` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `rol`, `name`, `specialization`, `phone`, `zarplata`, `city`, `street`) VALUES
(1, 'admin', 'ytyjdbcnm', 'admin', '', '', '', 0, '', ''),
(36, 'patient1', 'ytyjdbcnm', 'patient', 'Karolina', '', '', 0, 'Gdańsk', 'Lewickiego'),
(37, '', '', 'doctor', 'Marcin', 'chirurg', '86515321321', 15000, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `visits`
--
-- Создание: Дек 20 2020 г., 12:59
-- Последнее обновление: Дек 20 2020 г., 14:00
--

DROP TABLE IF EXISTS `visits`;
CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `patient` varchar(40) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `doctor` varchar(40) NOT NULL,
  `date` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `visits`
--

INSERT INTO `visits` (`id`, `patient`, `id_patient`, `doctor`, `date`, `price`, `status`) VALUES
(3, 'Karolina', 36, 'Marcin ', '10.09.2000  00:00', 20, '');

-- --------------------------------------------------------

--
-- Структура таблицы `zaavci`
--
-- Создание: Дек 20 2020 г., 11:28
-- Последнее обновление: Дек 20 2020 г., 11:33
--

DROP TABLE IF EXISTS `zaavci`;
CREATE TABLE `zaavci` (
  `id` int(11) UNSIGNED NOT NULL,
  `patient` varchar(30) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `id_patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zaavci`
--

INSERT INTO `zaavci` (`id`, `patient`, `doctor`, `id_patient`) VALUES
(2, 'Karolina', 'Marcin', 36);

-- --------------------------------------------------------

--
-- Структура таблицы `Marcin`
--
-- Создание: Дек 18 2020 г., 19:02
-- Последнее обновление: Дек 20 2020 г., 14:00
--

DROP TABLE IF EXISTS `Marcin`;
CREATE TABLE `Marcin` (
  `id` int(11) UNSIGNED NOT NULL,
  `data` varchar(20) DEFAULT NULL,
  `svobodnaa_li` varchar(9) DEFAULT NULL,
  `pacient` varchar(40) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Михаил`
--

INSERT INTO `Marcin` (`id`, `data`, `svobodnaa_li`, `pacient`, `price`) VALUES
(1, '10.09.2000  00:00', 'zajęty', 'Marcin', 20),
(2, '10.09.2000  01:00', 'wolny', '', 0),
(3, '10.09.2000  02:00', 'wolny', '', 0),
(4, '10.09.2000  03:00', 'wolny', '', 0),
(5, '10.09.2000  04:00', 'wolny', '', 0),
(6, '10.09.2000  05:00', 'wolny', '', 0),
(7, '10.09.2000  06:00', 'wolny', '', 0),
(8, '10.09.2000  07:00', 'wolny', '', 0),
(9, '10.09.2000  08:00', 'wolny', '', 0),
(10, '10.09.2000  09:00', 'wolny', '', 0),
(11, '10.09.2000  10:00', 'wolny', '', 0),
(12, '10.09.2000  11:00', 'wolny', '', 0),
(13, '10.09.2000  12:00', 'wolny', '', 0),
(14, '10.09.2000  13:00', 'wolny', '', 0),
(15, '10.09.2000  14:00', 'wolny', '', 0),
(16, '10.09.2000  15:00', 'wolny', '', 0),
(17, '10.09.2000  16:00', 'wolny', '', 0),
(18, '10.09.2000  17:00', 'wolny', '', 0),
(19, '10.09.2000  18:00', 'wolny', '', 0),
(20, '10.09.2000  19:00', 'wolny', '', 0),
(21, '10.09.2000  20:00', 'wolny', '', 0),
(22, '10.09.2000  21:00', 'wolny', '', 0),
(23, '10.09.2000  22:00', 'wolny', '', 0),
(24, '10.09.2000  23:00', 'wolny', '', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zaavci`
--
ALTER TABLE `zaavci`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Михаил`
--
ALTER TABLE `Marcin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `zaavci`
--
ALTER TABLE `zaavci`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Михаил`
--
ALTER TABLE `Marcin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
