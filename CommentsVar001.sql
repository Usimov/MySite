-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 25 2016 г., 09:06
-- Версия сервера: 5.7.11-log
-- Версия PHP: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `my_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `Name` mediumtext,
  `Date` date DEFAULT NULL,
  `Comment` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`Name`, `Date`, `Comment`) VALUES
('Сергей Кот', '2016-01-13', 'Понравилась работа, хороший текст. Благодарю'),
('Паша', '2015-11-19', 'Хе, комменты? Все прикрутил на сайте как надо. Формы и кнопки.'),
('БГУ', '2015-09-29', 'Дзякуй, Игар Грын, за вашу работу. Вы зрабили добры текст для нашего сайта.'),
('Вайлдберис', '2016-03-04', 'Первого апреля заказали - четвертого уже сделал. Оперативно работает!'),
('Бондарев', '2016-05-02', 'Настроил вордпресс. В целом все прошло нормально.'),
('Студия "Лига"', '2016-01-31', 'Были косяки, но потом все исправил. Упорный парень');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
