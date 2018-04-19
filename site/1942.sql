-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 03 2017 г., 11:41
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `1942`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `idc` int(100) NOT NULL AUTO_INCREMENT,
  `tel` varchar(30) NOT NULL DEFAULT '0',
  `opistel` varchar(100) NOT NULL DEFAULT '0',
  `adres` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(30) NOT NULL DEFAULT '0',
  `opisemail` varchar(100) NOT NULL DEFAULT '0',
  `namec` varchar(255) NOT NULL DEFAULT '0',
  `texthead` text NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=86 ;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`idc`, `tel`, `opistel`, `adres`, `email`, `opisemail`, `namec`, `texthead`) VALUES
(54, '0', '0', '0', '0', '0', 'ИП Иванов А.А.', 'Мобильные телефоны<br>\r\n'),
(55, '0', '0', '127254, Москва, ул. Руставели, д. 1/2', '0', '0', '0', ''),
(56, '0', 'основной', '0', '0', '0', '0', ''),
(57, '0', 'отдел продаж', '0', '0', '0', '0', ''),
(60, '0', 'сотовый', '0', '0', '0', '0', ''),
(63, '0', '0', '0', '0', 'Skype', '0', ''),
(64, '0', '', '0', '0', 'ICQ', '0', ''),
(65, '0', '0', '0', '0', 'email', '0', ''),
(67, '0', '0', '0', '0', 'email-2', '0', ''),
(83, '0', '0', '0', '0', 'E-mail', '0', ''),
(82, '0', '', '0', '0', '0', '0', ''),
(81, '0', '', '0', '0', '0', '0', ''),
(80, '8-800-200-80-65', 'бесплатный', '0', '0', '0', '0', ''),
(78, '0', '0', '0', '0', 'email-3', '0', ''),
(84, '0', '0', '0', 'info@matriza.ru', 'Техподдержка', '0', ''),
(85, '0', '0', '0', 'info@randor.ru', 'Техподдержка', '0', '');

-- --------------------------------------------------------

--
-- Структура таблицы `glav`
--

CREATE TABLE IF NOT EXISTS `glav` (
  `idz` int(10) NOT NULL AUTO_INCREMENT,
  `zapis` text NOT NULL,
  `zagindex` varchar(255) NOT NULL,
  `iduz` int(10) NOT NULL,
  `datez` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idz`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `glav`
--

INSERT INTO `glav` (`idz`, `zapis`, `zagindex`, `iduz`, `datez`) VALUES
(12, '<p class="font_8"><span><span class="color_14">Мы продаём только оригинальную продукцию, а ещё &ndash; угощаем своих клиентов чаем и конфетами. Наши консультанты помогут Вам выбрать подходящее устройство, подробно расскажут обо всех его плюсах и минусах. Наш магазин ценит Ваше время, поэтому мы обладаем одной из самых быстрых служб доставки товаров. Качество и оригинальность наших гаджетов не вызывают сомнений, а их ассортимент просто огромен. Не удивительно, что за последний год&nbsp;количество наших постоянных клиентов значительно выросло. Мы ценим каждого человека, обратившегося к нам и наши клиенты отвечают нам взаимностью.&nbsp;</span></span></p>\r\n<p class="font_8"><span><span class="color_14">&#8203;</span></span></p>\r\n<p class="font_8"><span><span class="color_14">Наш магазин &nbsp;никогда не останавливается на достигнутом!&nbsp;Наш ассортимент становится всё шире и разнообразней, а цены остаются всё такими же привлекательными.</span></span></p>\r\n<p class="font_8">&nbsp;</p>\r\n<div id="comp-ih1ryofd" class="s3">\r\n<p class="font_7"><span><span>Подпишитесь прямо сейчас и будьте в курсе всех новинок, скидок и акций!</span></span></p>\r\n</div>\r\n<div id="comp-ixkbl5yq" class="s3">\r\n<h2 class="font_2"><span><span><span class="color_14">Рады&nbsp;видеть вас в&nbsp;нашем магазине!</span></span></span></h2>\r\n</div>', 'МЫ ЛУЧШИЕ В СВОЕЙ СФЕРЕ', 0, '2017-05-03 06:58:16');

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `idi` int(10) NOT NULL AUTO_INCREMENT,
  `namei` text NOT NULL,
  `linki` text NOT NULL,
  `datei` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idui` int(10) NOT NULL,
  `udali` int(1) NOT NULL,
  `tip` int(2) NOT NULL DEFAULT '1',
  `nametov` text NOT NULL,
  `art` varchar(255) NOT NULL,
  `prise` varchar(255) NOT NULL,
  `met` varchar(255) NOT NULL,
  `ves` varchar(255) NOT NULL,
  PRIMARY KEY (`idi`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=118 ;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`idi`, `namei`, `linki`, `datei`, `idui`, `udali`, `tip`, `nametov`, `art`, `prise`, `met`, `ves`) VALUES
(116, '<ul class="n-product-spec-list">\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">мартфон, Android 7.0</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">поддержка двух SIM-карт</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">экран 6.2", разрешение 2960x1440</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">камера 12 МП, автофокус, F/1.7</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">память 64 Гб, слот для карты памяти</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">3G, 4G LTE, LTE-A, Wi-Fi, Bluetooth, NFC, GPS, ГЛОНАСС</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">объем оперативной памяти 4 Гб</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">аккумулятор 3500 мА&sdot;ч</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">вес 173 г, ШxВxТ 73.40x159.50x8.10 мм</li>\r\n</ul>', '0305171121439.jpg', '2017-05-03 07:21:43', 0, 0, 41, 'Samsung Galaxy S8+', '1217323', '59990', '', '1'),
(117, '<ul class="n-product-spec-list">\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">смартфон, Android 5.1</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">поддержка двух SIM-карт</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">экран 5.2", разрешение 1280x720</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">камера 13 МП, автофокус</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">память 16 Гб, слот для карты памяти</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">3G, 4G LTE, Wi-Fi, Bluetooth, NFC, GPS, ГЛОНАСС</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">объем оперативной памяти 2 Гб</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">аккумулятор 3100 мА&sdot;ч</li>\r\n<li class="n-product-spec-list__item n-product-spec-list__item_type_friendly">вес 159 г, ШxВxТ 72.30x145.80x8.10 мм</li>\r\n</ul>', '0305171123119 (1).jpg', '2017-05-03 07:23:11', 0, 0, 41, 'Samsung Galaxy J5 (2016) SM-J510F/DS', '4543534', '13 989', '', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `idmod` int(11) NOT NULL AUTO_INCREMENT,
  `namemod` varchar(255) NOT NULL,
  `udalmod` int(1) NOT NULL DEFAULT '0',
  `linkim` text NOT NULL,
  `opism` text NOT NULL,
  `kkk` int(1) NOT NULL DEFAULT '0',
  `fat` int(11) NOT NULL,
  PRIMARY KEY (`idmod`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=42 ;

--
-- Дамп данных таблицы `model`
--

INSERT INTO `model` (`idmod`, `namemod`, `udalmod`, `linkim`, `opism`, `kkk`, `fat`) VALUES
(39, 'C экраном до 4 дюймов', 0, '0305171116385 (2).jpg', '\r\n\r\n\r\n ', 1, 38),
(40, 'С экраном до 5 дюймов', 0, '0305171116555 (3).jpg', '\r\n\r\n\r\n ', 1, 38),
(41, 'С экраном свыше 5 дюймов', 0, '0305171117145 (4).jpg', '\r\n\r\n\r\n ', 1, 38),
(38, 'Samsung', 0, '0305171114545 (1).jpg', 'Компания SAMSUNG образована в 1969 году. Сейчас в корпорации Samsung Electronics насчитывается 21 производственное дочернее предприятие, 29 торговых подразделений и 24 зарубежных представительства в 46 странах мира. Продукция компании охватывает практически весь спектр потребительских товаров.\r\n\r\n ', 0, 0),
(37, 'Мобильные телефоны Xiaomi', 0, '0305171113265.jpg', ' Xiaomi Tech — китайская стартап-компания, основанная в 2010 году. Деятельность компании началась с разработки Android-прошивки MIUI. В 2011 году был выпущен свой собственный телефон — первое устройство с изначально предустановленным MIUI, конкурентоспособными техническими характеристиками и невысокой ценой.\r\n\r\n\r\n ', 0, 0),
(36, 'Apple', 0, '0305171108435sblack-228x228.jpg', 'Мобильные телефоны Apple\r\n\r\n\r\n ', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `idn` int(11) NOT NULL AUTO_INCREMENT,
  `daten` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idun` int(10) NOT NULL,
  `zagn` varchar(255) NOT NULL,
  `bodyn` text NOT NULL,
  `udaln` int(1) NOT NULL DEFAULT '0',
  `newsrazdel` varchar(12) NOT NULL,
  PRIMARY KEY (`idn`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=33 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`idn`, `daten`, `idun`, `zagn`, `bodyn`, `udaln`, `newsrazdel`) VALUES
(32, '2017-05-03 07:36:42', 0, 'Доставка и оплата', '<p style="margin: 2px 0px 20px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Самовывоз -&nbsp;<span style="margin: 0px; padding: 0px; color: #008000;">Бесплатно</span></strong></p>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Ежедневно: с 11:00 - 21:00</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Обязательный предварительный резерв товара за 2 часа.</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Самовывоз расположен по адресу: Москва, Багратионовский проезд, дом 7 корпус 20А (Офис Gallary)&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Доставка по Москве</strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Быстрая доставка&nbsp;- день в день и при заказе до 19.00 - 490 рублей.</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">За пределами МКАД - от 590 рублей.</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Условия и стоимость доставки согласовываются заранее c нашими менеджерами.</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Доставка по МО</strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Доставка за пределы МКАД выполняется не далее 10 км от МКАД. Стоимость зависит от удалённости от МКАД и согласовывается заранее с нашими менеджерами. Более точную информацию Вы можете получить по телефону +7 (495) 008-97-54</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Доставка оплачивается, даже если Вы:</strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Передумали покупать товар, но курьер уже выехал</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Решили отказаться от товара при приеме заказа</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Условия оплаты</strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">В нашем магазине предусмотрен только наличный расчет - курьеру при получении заказа</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><span style="margin: 0px; padding: 0px; font-size: 10pt;">&nbsp;</span>&nbsp;&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Режим работы</strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><span style="margin: 0px; padding: 0px; font-size: small;">Ежедневно с 10:00 до 21:0</span></div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Самовывоз - Бесплатно</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;"></div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Ежедневно: с 11:00 - 21:00</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Обязательный предварительный резерв товара за 2 часа.</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Самовывоз расположен по адресу: Москва, Багратионовский проезд, дом 7 корпус 20А (Офис Gallary)&nbsp;</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">&nbsp;</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;"></div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Доставка по Москве</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Быстрая доставка - день в день и при заказе до 19.00 - 490 рублей.</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">За пределами МКАД - от 590 рублей.</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Условия и стоимость доставки согласовываются заранее c нашими менеджерами.</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">&nbsp;</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Доставка по МО</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Доставка за пределы МКАД выполняется не далее 10 км от МКАД. Стоимость зависит от удалённости от МКАД и согласовывается заранее с нашими менеджерами. Более точную информацию Вы можете получить по телефону +7 (495) 008-97-54</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">&nbsp;</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Доставка оплачивается, даже если Вы:</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Передумали покупать товар, но курьер уже выехал</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Решили отказаться от товара при приеме заказа</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">&nbsp;</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Условия оплаты</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">В нашем магазине предусмотрен только наличный расчет - курьеру при получении заказа</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">&nbsp;&nbsp;</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Режим работы</div>\r\n<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">Ежедневно с 10:00 до 21:00<strong style="font-family: Arial, sans-serif; font-size: 12px; margin: 0px; padding: 0px;">Самовывоз -&nbsp;<span style="margin: 0px; padding: 0px; color: #008000;">Бесплатно</span></strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Ежедневно: с 11:00 - 21:00</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Обязательный предварительный резерв товара за 2 часа.</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Самовывоз расположен по адресу: Москва, Багратионовский проезд, дом 7 корпус 20А (Офис Gallary)&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><img style="margin: 0px; padding: 0px; vertical-align: middle;" src="https://static-eu.insales.ru/files/1/6018/3127170/original/Enterclick_%D1%81%D1%85%D0%B5%D0%BC%D0%B0_%D0%BF%D1%80%D0%BE%D0%B5%D0%B7%D0%B4%D0%B0_new.png" alt="" width="651" height="387" /></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Доставка по Москве</strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Быстрая доставка&nbsp;- день в день и при заказе до 19.00 - 490 рублей.</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">За пределами МКАД - от 590 рублей.</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Условия и стоимость доставки согласовываются заранее c нашими менеджерами.</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Доставка по МО</strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Доставка за пределы МКАД выполняется не далее 10 км от МКАД. Стоимость зависит от удалённости от МКАД и согласовывается заранее с нашими менеджерами. Более точную информацию Вы можете получить по телефону +7 (495) 008-97-54</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Доставка оплачивается, даже если Вы:</strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Передумали покупать товар, но курьер уже выехал</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">Решили отказаться от товара при приеме заказа</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Условия оплаты</strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;">В нашем магазине предусмотрен только наличный расчет - курьеру при получении заказа</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><span style="margin: 0px; padding: 0px; font-size: 10pt;">&nbsp;</span>&nbsp;&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><strong style="margin: 0px; padding: 0px;">Режим работы</strong></div>\r\n<div style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; font-size: 12px;"><span style="margin: 0px; padding: 0px; font-size: small;">Ежедневно с 10:00 до 21:00</span></div>\r\n</div>', 0, '46');

-- --------------------------------------------------------

--
-- Структура таблицы `otziv`
--

CREATE TABLE IF NOT EXISTS `otziv` (
  `idot` int(11) NOT NULL AUTO_INCREMENT,
  `zagotziv` varchar(255) NOT NULL,
  `textotziv` text NOT NULL,
  `dateotziv` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nameotziv` varchar(255) NOT NULL,
  `statotziv` int(1) NOT NULL DEFAULT '0',
  `idtovotziv` int(11) NOT NULL,
  `fatot` int(11) NOT NULL,
  PRIMARY KEY (`idot`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `otziv`
--

INSERT INTO `otziv` (`idot`, `zagotziv`, `textotziv`, `dateotziv`, `nameotziv`, `statotziv`, `idtovotziv`, `fatot`) VALUES
(21, 'Отличный телефон', '  Достоинства: Он такой один) Все замечательно работает софт буквально "скользит", нет подвисаний и т.д. Камера - достойная, звук стал еще лучше - динамик и отдельные наушники - это правда. Экран - как всегда яркий и сочный. Очень гармонично в связки с часами Gear S3 работает – рекомендую. Самсунг к процессу создания «8» подошел очень серьезно после провала «ноте», исправились ребята, в этом и не было сомнения.\r\nНедостатки: В данном случае... - «Цена — это не недостаток, а преимущество!»', '2017-05-03 07:27:27', 'Сергей', 0, 116, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `porder`
--

CREATE TABLE IF NOT EXISTS `porder` (
  `idporder` int(11) NOT NULL AUTO_INCREMENT,
  `idtov` int(11) NOT NULL,
  `idses` text NOT NULL,
  `kolvo` int(11) NOT NULL,
  `nomorder` int(11) NOT NULL,
  `iduslpo` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idporder`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=110 ;

--
-- Дамп данных таблицы `porder`
--

INSERT INTO `porder` (`idporder`, `idtov`, `idses`, `kolvo`, `nomorder`, `iduslpo`) VALUES
(78, 108, 'c2b74e4bd0d796a3380871414f44a793', 1, 111, 0),
(77, 108, 'c2b74e4bd0d796a3380871414f44a793', 2, 110, 0),
(76, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 109, 4),
(75, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 109, 3),
(74, 105, 'c2b74e4bd0d796a3380871414f44a793', 1, 109, 0),
(73, 108, 'c2b74e4bd0d796a3380871414f44a793', 1, 109, 0),
(72, 110, 'c2b74e4bd0d796a3380871414f44a793', 1, 109, 0),
(71, 102, 'c2b74e4bd0d796a3380871414f44a793', 3, 108, 0),
(70, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 108, 4),
(69, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 108, 3),
(68, 105, 'c2b74e4bd0d796a3380871414f44a793', 1, 108, 0),
(28, 98, '13507973bacd191798c83e9fdec1fc42', 2, 103, 0),
(29, 97, '13507973bacd191798c83e9fdec1fc42', 3, 103, 0),
(30, 86, '13507973bacd191798c83e9fdec1fc42', 2, 103, 0),
(31, 88, '13507973bacd191798c83e9fdec1fc42', 1, 103, 0),
(67, 109, 'c2b74e4bd0d796a3380871414f44a793', 1, 108, 0),
(66, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 107, 4),
(65, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 107, 3),
(64, 104, 'c2b74e4bd0d796a3380871414f44a793', 1, 107, 0),
(63, 108, 'c2b74e4bd0d796a3380871414f44a793', 1, 107, 0),
(55, 109, 'c2b74e4bd0d796a3380871414f44a793', 1, 106, 0),
(40, 91, 'ff8d54e7324938c29497d29daf44e517', 12, 0, 0),
(41, 92, 'ff8d54e7324938c29497d29daf44e517', 12, 0, 0),
(79, 109, 'c2b74e4bd0d796a3380871414f44a793', 1, 111, 0),
(54, 102, 'c2b74e4bd0d796a3380871414f44a793', 1, 106, 0),
(52, 108, 'c2b74e4bd0d796a3380871414f44a793', 3, 106, 0),
(62, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 106, 3),
(61, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 106, 4),
(80, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 111, 3),
(82, 108, 'c2b74e4bd0d796a3380871414f44a793', 1, 112, 0),
(83, 102, 'c2b74e4bd0d796a3380871414f44a793', 1, 112, 0),
(84, 109, 'c2b74e4bd0d796a3380871414f44a793', 1, 112, 0),
(85, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 112, 3),
(86, 0, 'c2b74e4bd0d796a3380871414f44a793', 0, 112, 4),
(87, 108, 'c2b74e4bd0d796a3380871414f44a793', 1, 113, 0),
(88, 108, 'f554bc91684d0033e7c228930a79501e', 0, 114, 0),
(93, 0, 'f554bc91684d0033e7c228930a79501e', 0, 114, 3),
(90, 108, 'f554bc91684d0033e7c228930a79501e', 2, 114, 0),
(92, 104, 'f554bc91684d0033e7c228930a79501e', 2, 114, 0),
(94, 108, 'f554bc91684d0033e7c228930a79501e', 1, 115, 0),
(95, 106, 'f554bc91684d0033e7c228930a79501e', 1, 115, 0),
(96, 0, 'f554bc91684d0033e7c228930a79501e', 0, 115, 3),
(97, 114, 'f554bc91684d0033e7c228930a79501e', 5, 116, 0),
(98, 115, 'f554bc91684d0033e7c228930a79501e', 10, 116, 0),
(99, 114, 'f554bc91684d0033e7c228930a79501e', 100, 117, 0),
(100, 114, 'f554bc91684d0033e7c228930a79501e', 12, 118, 0),
(101, 115, 'f554bc91684d0033e7c228930a79501e', 15, 118, 0),
(102, 0, 'f554bc91684d0033e7c228930a79501e', 0, 118, 3),
(103, 0, 'f554bc91684d0033e7c228930a79501e', 0, 118, 4),
(104, 114, 'f554bc91684d0033e7c228930a79501e', 100, 119, 0),
(105, 115, 'f554bc91684d0033e7c228930a79501e', 50, 119, 0),
(106, 0, 'f554bc91684d0033e7c228930a79501e', 0, 119, 3),
(107, 114, 'd2kjrnrdqp27u0j7ub4anhr9f3', 100, 0, 0),
(108, 116, 'f6qrveinur93n4s713glqi8vu2', 2, 120, 0),
(109, 0, 'f6qrveinur93n4s713glqi8vu2', 0, 120, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `razdel`
--

CREATE TABLE IF NOT EXISTS `razdel` (
  `idr` int(100) NOT NULL AUTO_INCREMENT,
  `namer` varchar(100) NOT NULL,
  `logor` varchar(255) NOT NULL,
  `tipr` int(1) NOT NULL DEFAULT '0',
  `podraz` int(10) NOT NULL,
  `udalr` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idr`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=47 ;

--
-- Дамп данных таблицы `razdel`
--

INSERT INTO `razdel` (`idr`, `namer`, `logor`, `tipr`, `podraz`, `udalr`) VALUES
(44, 'Клиенту', '1.png', 1, 0, 0),
(46, 'Доставка', '', 2, 44, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `roli`
--

CREATE TABLE IF NOT EXISTS `roli` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `namerol` varchar(255) NOT NULL,
  `udalrol` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idr`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `roli`
--

INSERT INTO `roli` (`idr`, `namerol`, `udalrol`) VALUES
(1, 'Администратор', 0),
(2, 'Модератор', 0),
(3, 'Оператор', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `nameuser` varchar(255) COLLATE cp1251_bin NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login` varchar(25) COLLATE cp1251_bin NOT NULL,
  `password` varchar(25) COLLATE cp1251_bin NOT NULL,
  `status` int(1) NOT NULL,
  `udaluser` int(1) NOT NULL DEFAULT '0',
  `iduserotd` int(1) NOT NULL,
  `idpkuser` int(6) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`idu`, `nameuser`, `datereg`, `login`, `password`, `status`, `udaluser`, `iduserotd`, `idpkuser`) VALUES
(1, 'superadmin', '2017-05-01 13:59:33', 'admin', 'admin', 1, 0, 2, 1),
(2, 'Матвеев Анатолий Анатольевич', '2017-04-30 21:05:28', 'moderator', 'moderator', 1, 0, 3, 2),
(3, 'Петров Иван Федорович', '2017-04-30 22:22:52', '111122', '111122', 1, 0, 4, 3),
(4, 'Федоров Сергей Алексеевич', '2017-04-30 23:17:50', 'operator', 'operator', 3, 0, 2, 4),
(5, 'Алексеев Иван Иванович', '2017-04-30 23:18:18', '333333', '333333', 3, 0, 2, 1),
(6, 'Антонов Андрей Иванович', '2017-04-30 23:18:42', '444444', '444444', 3, 0, 2, 2),
(7, 'Егоров Тимур Сергеевич', '2017-04-30 23:19:09', '555555', '555555', 3, 0, 2, 2),
(8, 'Иванов Сергей Федорович', '2017-05-01 10:18:00', '777777', '777777', 2, 0, 4, 3),
(9, 'Пушкин Иван Иванович', '2017-05-01 17:33:30', '9999999', '9999999', 1, 0, 4, 4),
(10, 'Фролов Анатолий Федорович', '2017-05-01 09:30:26', 'admin01', 'admin01', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `userreg`
--

CREATE TABLE IF NOT EXISTS `userreg` (
  `idU` int(11) NOT NULL AUTO_INCREMENT,
  `forname` varchar(25) DEFAULT NULL,
  `email` text NOT NULL,
  `telrab` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '0',
  `sirie` varchar(255) NOT NULL,
  `nomzak` int(11) NOT NULL,
  `vsnam` varchar(255) NOT NULL,
  `sumkol` varchar(255) NOT NULL,
  `sumprise` varchar(255) NOT NULL,
  `sumusl` varchar(255) NOT NULL,
  `summazakaza` varchar(255) NOT NULL,
  PRIMARY KEY (`idU`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=54 ;

--
-- Дамп данных таблицы `userreg`
--

INSERT INTO `userreg` (`idU`, `forname`, `email`, `telrab`, `date`, `status`, `sirie`, `nomzak`, `vsnam`, `sumkol`, `sumprise`, `sumusl`, `summazakaza`) VALUES
(53, 'Сергей', 'user109@user.com', '8900000000', '2017-05-03 07:28:18', 0, '', 120, '1', '2', '118', '500', '618');

-- --------------------------------------------------------

--
-- Структура таблицы `usl`
--

CREATE TABLE IF NOT EXISTS `usl` (
  `idusl` int(11) NOT NULL AUTO_INCREMENT,
  `nameusl` varchar(255) NOT NULL,
  `opisusl` text NOT NULL,
  `stoimusl` varchar(255) NOT NULL,
  `proz` int(1) NOT NULL DEFAULT '0',
  `udalusl` int(1) NOT NULL DEFAULT '0',
  `linkusl` text NOT NULL,
  PRIMARY KEY (`idusl`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `usl`
--

INSERT INTO `usl` (`idusl`, `nameusl`, `opisusl`, `stoimusl`, `proz`, `udalusl`, `linkusl`) VALUES
(3, 'Доставка', ' по городу на следующий день после заказа', '500', 0, 0, '180313135725courier.png');

-- --------------------------------------------------------

--
-- Структура таблицы `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `idv` int(100) NOT NULL AUTO_INCREMENT,
  `namevendor` varchar(255) NOT NULL,
  `udalv` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idv`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `vendor`
--

INSERT INTO `vendor` (`idv`, `namevendor`, `udalv`) VALUES
(1, 'Samsung', 0),
(2, 'Apple', 0),
(3, 'Huawei', 0),
(4, 'Xiaomi', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
