-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 03 2020 г., 08:26
-- Версия сервера: 5.7.31
-- Версия PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `readyplan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `caption` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT '999',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blocks`
--

INSERT INTO `blocks` (`id`, `type`, `img`, `title`, `caption`, `created_at`, `updated_at`, `parent_id`, `order`) VALUES
(1, 'first', NULL, 'Универсальное решение для проектных организаций ReadyPlan', 'Все проекты компании как на&nbsp;ладони: управление портфелем проектов, мониторинг этапов работ, загруженности сотрудников, формирование отчетов по&nbsp;заданным параметрам&nbsp;&mdash; по&nbsp;отделам, видам работ, исполнителям и&nbsp;срокам.', '2020-10-31 10:53:00', '2020-10-31 11:56:30', NULL, 999),
(2, NULL, 'blocks/icon_1.png', 'Единое информационное пространство', '<p>Гибкий и прозрачный подход к распределению прав и обязанностей.</p>', '2020-10-31 10:57:00', '2020-11-01 09:43:35', 1, 999),
(3, NULL, 'blocks/icon_2.png', 'Возможность удаленной работы', 'Веб-платформа и&nbsp;клиент под мобильные устройства.', '2020-10-31 10:59:25', '2020-10-31 10:59:25', 1, 999),
(4, NULL, 'blocks/icon_3.png', 'Хранение большого объема данных', 'Поддержка СУБД MySQL/PosgreSQL. Обменивайтесь файлами любого типа и&nbsp;любого размера.', '2020-10-31 11:00:00', '2020-10-31 11:00:54', 1, 999),
(5, NULL, 'blocks/icon_1.png', 'Тайм-менеджмент', 'Отслеживайте и&nbsp;анализируйте время, затраченное сотрудниками на&nbsp;выполнение работ. Делайте предварительную оценку по&nbsp;трудозатратам для сравнения &laquo;плана&raquo; и&nbsp;&laquo;факта&raquo;.', '2020-10-31 11:02:42', '2020-10-31 11:02:42', 1, 999),
(6, NULL, 'blocks/icon_2.png', 'Диаграмма Ганта', 'Контроль за&nbsp;выполнением работ в&nbsp;разрезе одного, нескольких или всех проектов. Вы&nbsp;не&nbsp;пропустите важный дедлайн и&nbsp;сможете предупредить срыв сроков по&nbsp;каждому этапу работ.', '2020-10-31 11:03:30', '2020-10-31 11:03:30', 1, 999),
(7, NULL, 'blocks/icon_3.png', 'Анализ статистики', 'Детальное планирование работ как по&nbsp;текущим, так и&nbsp;перспективным проектам. Возможность анализа накопленной статистики с&nbsp;целью планирования финансовых и&nbsp;трудовых затрат по&nbsp;новым проектам.', '2020-10-31 11:04:13', '2020-10-31 11:04:13', 1, 999),
(8, 'second', NULL, 'Преимущества', NULL, '2020-10-31 11:47:00', '2020-10-31 11:56:51', NULL, 999),
(9, NULL, 'blocks/block_1.png', 'Оптимальное соотношение цены и качества', '<p>У&nbsp;Вас не&nbsp;будет затрат на&nbsp;покупку дорогостоящих программных продуктов, Вы&nbsp;вкладываете деньги только в&nbsp;адаптацию ReadyPlan и&nbsp;обучение сотрудников;</p>\r\n<p>&mdash;&nbsp;экономичное решение, вы&nbsp;платите только за&nbsp;администрирование и&nbsp;сервер (нет трат на&nbsp;IT-инфраструктуру);</p>', '2020-10-31 11:49:12', '2020-10-31 11:49:12', 8, 999),
(10, NULL, 'blocks/block_2.png', 'Опыт работы', '<p>Более 10&nbsp;лет в&nbsp;сфере проектирования. Понимаем устройство основных бизнес-процессов. Опыт референтных внедрений.</p>', '2020-10-31 11:49:41', '2020-10-31 11:49:41', 8, 999),
(11, NULL, 'blocks/block_3.png', 'Адаптация “под ключ”', '<p>Открытая платформа и&nbsp;знание технологий позволяют нам настроить решение под любые требования.</p>', '2020-10-31 11:50:16', '2020-10-31 11:50:16', 8, 999),
(12, NULL, 'blocks/block_4.png', 'Безопасность', '<p>Все данные защищены от&nbsp;воздействия извне, а&nbsp;также могут частично или полностью скрываться от&nbsp;сотрудников компании в&nbsp;зависимости от&nbsp;прав доступа.</p>', '2020-10-31 11:50:52', '2020-10-31 11:50:52', 8, 999),
(13, 'left', 'blocks/1.png', 'Управление портфелем и&nbsp;ресурсами проектов', '<ul>\r\n<li>&mdash;&nbsp;Создание и&nbsp;ведение проектов</li>\r\n<li>&mdash;&nbsp;Создание типовых проектов</li>\r\n<li>&mdash;&nbsp;Управление ролями в&nbsp;проекте</li>\r\n</ul>', '2020-10-31 12:07:00', '2020-10-31 12:17:27', NULL, 999),
(14, 'right', 'blocks/1.png', 'Аналитика и&nbsp;управленческая отчетность (вкладка оперативный план + обзор)', '<ul>\r\n<li>&mdash;&nbsp;Диаграмма Ганта</li>\r\n<li>&mdash;&nbsp;Мониторинг планируемого и&nbsp;затраченного времени</li>\r\n<li>&mdash;&nbsp;Кастомная фильтрация для любого объема данных</li>\r\n</ul>', '2020-10-31 12:17:00', '2020-10-31 12:17:43', NULL, 999),
(15, 'left', 'blocks/1.png', 'Хранение данных', '<p>Обмен заданиями, проектной документацией между отделами.</p>\r\n<p>&nbsp;</p>', '2020-10-31 12:21:00', '2020-10-31 12:22:05', NULL, 999),
(16, 'tech', 'blocks/how.png', 'Технические преимущества', NULL, '2020-10-31 12:26:00', '2020-10-31 12:29:44', NULL, 999),
(17, NULL, 'blocks/icon_8.png', 'Срок внедрения ReadyPlan', '<p>Адаптация продукта под специфику Вашей организации занимает от&nbsp;1&nbsp;недели до&nbsp;нескольких месяцев в&nbsp;зависимости от&nbsp;организационной структуры и&nbsp;желаемого функционала.</p>', '2020-10-31 12:27:53', '2020-10-31 12:27:53', 16, 999),
(18, NULL, 'blocks/icon_9.png', 'Функционал и&nbsp;настройки программы', '<p>которые необходимых для ведения деятельности и&nbsp;эффективного использования&nbsp;ПО</p>', '2020-10-31 12:28:57', '2020-10-31 12:28:57', 16, 999),
(19, NULL, 'blocks/icon_10.png', 'Оргструктура организации', NULL, '2020-10-31 12:29:26', '2020-10-31 12:29:26', 16, 999),
(20, 'subscribe', NULL, 'Далеко-далеко за словесными горами.', '<p>Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные.</p>', '2020-10-31 12:35:24', '2020-10-31 12:35:24', NULL, 999),
(21, 'integration', NULL, 'Возможности интеграции', NULL, '2020-10-31 12:37:08', '2020-10-31 12:37:08', NULL, 999),
(22, NULL, 'blocks/logo_1.png', NULL, NULL, '2020-10-31 12:37:00', '2020-10-31 12:38:06', 21, 999),
(23, NULL, 'blocks/logo_2.png', NULL, NULL, '2020-10-31 12:38:00', '2020-10-31 12:38:36', 21, 999),
(24, NULL, 'blocks/logo_3.png', NULL, NULL, '2020-10-31 12:39:01', '2020-10-31 12:39:01', 21, 999),
(25, NULL, 'blocks/logo_4.png', NULL, NULL, '2020-10-31 12:39:26', '2020-10-31 12:39:26', 21, 999),
(26, 'for', NULL, 'Для кого', NULL, '2020-10-31 12:42:04', '2020-10-31 12:42:04', NULL, 999),
(27, NULL, 'blocks/icon_1.png', 'Работайте в едином информационном пространстве', '<p>ТОП-менеджеры компаний</p>', '2020-10-31 12:42:52', '2020-10-31 12:42:52', 26, 999),
(28, NULL, 'blocks/icon_2.png', 'Финансовые потоки', '<p>Главные инженеры проектов</p>', '2020-10-31 12:43:33', '2020-10-31 12:43:33', 26, 999),
(29, NULL, 'blocks/icon_3.png', 'Мониторинг', '<p>Проектные подразделения</p>', '2020-10-31 12:44:08', '2020-10-31 12:44:08', 26, 999),
(30, 'faq', 'blocks/faq.png', 'FAQ', NULL, '2020-10-31 12:47:00', '2020-10-31 12:47:00', NULL, 999),
(31, NULL, NULL, 'Стоимость', '<p>Зависит от&nbsp;функционала, оргструктуры. Количество проектов, настройки.</p>', '2020-10-31 12:47:48', '2020-10-31 12:47:48', 30, 999),
(32, NULL, NULL, 'Скорость внедрения', '<p>Зависит от&nbsp;функционала, оргструктуры. Количество проектов, настройки.</p>', '2020-10-31 12:48:22', '2020-10-31 12:48:22', 30, 999),
(33, NULL, NULL, 'Как происходит поддержка продукта?', '<p>Зависит от&nbsp;функционала, оргструктуры. Количество проектов, настройки.</p>', '2020-10-31 12:49:04', '2020-10-31 12:49:04', 30, 999),
(34, NULL, NULL, 'Что конкретно я получу?', '<p>Что получает заказчик: выгоды<br />&mdash; Генеральный директор<br />Деньги<br />&mdash; Главный инженер (соблюдение сроков)<br />Возможность вовремя увидеть риск провала проекта<br />Выполненные проекты<br />Возможности интеграции (Navisworks &hellip;)</p>', '2020-10-31 12:49:37', '2020-10-31 12:49:37', 30, 999),
(35, 'footer', NULL, 'Узнайте больше о возможностях ReadyPlan', '<p>Оставьте свои контактные данные, наш менеджер свяжется с вами и вышлет подробную презентацию о программе</p>', '2020-10-31 12:58:00', '2020-10-31 12:59:10', NULL, 999),
(36, 'slider', NULL, 'Слайдер', NULL, '2020-10-31 13:07:00', '2020-11-01 09:39:51', NULL, 1),
(37, NULL, 'blocks/slide_1.png', 'Управляйте проектами компании эффективно', '<p>Детальное планирование всех работ, контроль за сроками выполнения, гибкое распределение обязанностей. Обмен данными в едином информационном пространстве. Адаптируем систему управления проектной организацией под под Ваши потребности в срок от 1 недели до 2-х месяцев.</p>', '2020-10-31 13:09:12', '2020-10-31 13:09:12', 36, 999),
(38, NULL, 'blocks/slide_1.png', 'Доступ к&nbsp;актуальной информации в&nbsp;любое время', '<p>Следите за&nbsp;выполнением работ из&nbsp;любой точки мира с&nbsp;ПК или мобильного устройства. Получайте уведомления о&nbsp;важных событиях по&nbsp;электронной почте.</p>', '2020-10-31 13:09:00', '2020-11-01 06:33:34', 36, 999),
(42, NULL, NULL, 'ascascascascascascascac sacacacsascasc', '<div class=\"col-lg-2 col-md-5 col-10\">\r\n<div class=\"mb-4\">\r\n<h4 class=\"text-purple\">Features</h4>\r\n</div>\r\n<ul class=\"list-unstyled\">\r\n<li><a class=\"link-dark\" href=\"#\">Timeline Review</a></li>\r\n<li><a class=\"link-dark\" href=\"#\">Custom fields</a></li>\r\n<li><a class=\"link-dark\" href=\"#\">Custom Templates</a></li>\r\n<li><a class=\"link-dark\" href=\"#\">Task dependencies</a></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-lg-2 col-md-5 col-10\">\r\n<div class=\"mb-4\">\r\n<h4 class=\"text-purple\">Company</h4>\r\n</div>\r\n<ul class=\"list-unstyled\">\r\n<li><a class=\"link-dark\" href=\"#\">about us</a></li>\r\n<li><a class=\"link-dark\" href=\"#\">pricing plan</a></li>\r\n<li><a class=\"link-dark\" href=\"#\">Privacy &amp; Policy</a></li>\r\n<li><a class=\"link-dark\" href=\"#\">latest news</a></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-lg-2 col-md-5 col-10\">\r\n<div class=\"mb-4\">\r\n<h4 class=\"text-purple\">Customers</h4>\r\n</div>\r\n<ul class=\"list-unstyled\">\r\n<li><a class=\"link-dark\" href=\"#\">login</a></li>\r\n<li><a class=\"link-dark\" href=\"#\">support</a></li>\r\n<li><a class=\"link-dark\" href=\"#\">help center</a></li>\r\n</ul>\r\n</div>', '2020-11-02 11:09:00', '2020-11-02 11:11:00', 35, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `company`, `position`, `phone`, `subject`) VALUES
(41, 'No name', 'admin@admin.com', NULL, '2020-11-02 11:27:32', '2020-11-02 11:27:32', NULL, NULL, NULL, 'Попробовать'),
(42, 'No name', 'admin@admin.comq', NULL, '2020-11-02 12:15:30', '2020-11-02 12:15:30', NULL, NULL, NULL, 'Попробовать');

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE IF NOT EXISTS `data_rows` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(62, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 11, 'type', 'text', 'Type', 0, 1, 1, 1, 1, 1, '{}', 6),
(64, 11, 'img', 'media_picker', 'Изображение', 0, 1, 1, 1, 1, 1, '{\"show_as_images\":true}', 2),
(65, 11, 'title', 'text', 'Заголовок', 0, 1, 1, 1, 1, 1, '{}', 3),
(66, 11, 'caption', 'rich_text_box', 'Текст', 0, 0, 1, 1, 1, 1, '{}', 4),
(68, 11, 'block_belongsto_block_relationship', 'relationship', 'Родительский блок', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Block\",\"table\":\"blocks\",\"type\":\"belongsTo\",\"column\":\"parent_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"blocks\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(69, 11, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 8),
(70, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(71, 11, 'parent_id', 'text', 'Parent Id', 0, 1, 1, 1, 1, 1, '{}', 10),
(72, 11, 'order', 'text', 'Order', 0, 1, 1, 1, 1, 1, '{}', 7),
(73, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(74, 14, 'name', 'text', 'Имя', 0, 1, 1, 1, 1, 1, '{}', 2),
(75, 14, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(76, 14, 'message', 'text', 'Сообщение', 0, 0, 1, 1, 1, 1, '{}', 8),
(77, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(78, 16, 'block_id', 'text', 'Block Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(79, 16, 'name', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{}', 3),
(80, 16, 'nav_hasone_block_relationship', 'relationship', 'Блок', 0, 1, 1, 1, 1, 1, '{\"scope\":\"parent\",\"model\":\"App\\\\Models\\\\Block\",\"table\":\"blocks\",\"type\":\"belongsTo\",\"column\":\"block_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"blocks\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(81, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(82, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(83, 16, 'order', 'number', 'Порядок', 0, 1, 1, 1, 1, 1, '{}', 6),
(84, 14, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 9),
(85, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(86, 14, 'company', 'text', 'Компания', 0, 1, 1, 1, 1, 1, '{}', 4),
(87, 14, 'position', 'text', 'Должность', 0, 1, 1, 1, 1, 1, '{}', 6),
(88, 14, 'phone', 'text', 'Телефон', 0, 1, 1, 1, 1, 1, '{}', 5),
(89, 14, 'subject', 'text', 'Тема', 0, 1, 1, 1, 1, 1, '{}', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE IF NOT EXISTS `data_types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(10, 'block', 'block', 'Блок', 'Блоки', NULL, 'App\\Block', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-10-31 10:31:52', '2020-10-31 10:31:52'),
(11, 'blocks', 'blocks', 'Блок', 'Блоки', 'voyager-window-list', 'App\\Models\\Block', NULL, 'App\\Http\\Controllers\\BlockController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-31 10:34:13', '2020-11-01 09:22:52'),
(13, 'contacts', 'contacts', 'Контакт', 'Контакты', 'voyager-people', 'App\\Models\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-11-01 11:33:34', '2020-11-01 11:35:07'),
(14, 'contact', 'contact', 'Контакт', 'Контакты', 'voyager-people', 'App\\Models\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-11-01 11:36:42', '2020-11-02 10:57:44'),
(15, 'navbar', 'navbar', 'Пункт меню', 'Пункты меню', NULL, 'App\\Models\\Navbar', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-11-02 10:09:09', '2020-11-02 10:09:09'),
(16, 'navs', 'navs', 'Пункт меню', 'Пункты меню', 'voyager-list', 'App\\Models\\Nav', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"order\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-11-02 10:11:41', '2020-11-02 10:49:37');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-10-31 10:08:58', '2020-10-31 10:08:58');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Панель', '', '_self', 'voyager-boat', '#000000', NULL, 1, '2020-10-31 10:08:58', '2020-11-01 06:07:37', 'voyager.dashboard', 'null'),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2020-10-31 10:08:58', '2020-11-02 10:14:41', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 7, '2020-10-31 10:08:58', '2020-11-02 10:14:41', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 8, '2020-10-31 10:08:58', '2020-11-02 10:14:41', 'voyager.roles.index', NULL),
(5, 1, 'Инструменты', '', '_self', 'voyager-tools', '#000000', NULL, 9, '2020-10-31 10:08:58', '2020-11-02 10:14:41', NULL, ''),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-10-31 10:08:58', '2020-11-01 06:42:40', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-10-31 10:08:58', '2020-11-01 06:42:40', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-10-31 10:08:58', '2020-11-01 06:42:40', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-10-31 10:08:58', '2020-11-01 06:42:40', 'voyager.bread.index', NULL),
(10, 1, 'Настройки', '', '_self', 'voyager-settings', '#000000', NULL, 6, '2020-10-31 10:08:58', '2020-11-02 10:14:41', 'voyager.settings.index', 'null'),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-10-31 10:08:59', '2020-11-01 06:42:40', 'voyager.hooks', NULL),
(17, 1, 'Блоки', '', '_self', 'voyager-window-list', NULL, NULL, 4, '2020-10-31 10:34:13', '2020-11-02 10:14:41', 'voyager.blocks.index', NULL),
(19, 1, 'Контакты', '', '_self', 'voyager-people', NULL, NULL, 3, '2020-11-01 11:36:42', '2020-11-02 10:14:41', 'voyager.contact.index', NULL),
(21, 1, 'Пункты меню', '', '_self', 'voyager-list', NULL, NULL, 2, '2020-11-02 10:11:41', '2020-11-02 10:14:41', 'voyager.navs.index', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `navs`
--

CREATE TABLE IF NOT EXISTS `navs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `block_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` int(11) DEFAULT '999',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `navs`
--

INSERT INTO `navs` (`id`, `block_id`, `name`, `created_at`, `updated_at`, `order`) VALUES
(1, 36, 'Система управления', '2020-11-02 10:18:00', '2020-11-02 10:48:25', 1),
(2, 1, 'Функционал', '2020-11-02 10:19:00', '2020-11-02 10:48:35', 2),
(3, 8, 'Преимущества', '2020-11-02 10:22:00', '2020-11-02 10:48:41', 3),
(4, 21, 'Внедрение', '2020-11-02 10:23:00', '2020-11-02 10:48:54', 5),
(5, 26, 'Для кого?', '2020-11-02 10:23:00', '2020-11-02 10:49:04', 6),
(6, 20, 'Стоимость', '2020-11-02 10:23:00', '2020-11-02 10:48:47', 4),
(7, 35, 'Контакты', '2020-11-02 10:24:00', '2020-11-02 10:49:10', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(2, 'browse_bread', NULL, '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(3, 'browse_database', NULL, '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(4, 'browse_media', NULL, '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(5, 'browse_compass', NULL, '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(6, 'browse_menus', 'menus', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(7, 'read_menus', 'menus', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(8, 'edit_menus', 'menus', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(9, 'add_menus', 'menus', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(10, 'delete_menus', 'menus', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(11, 'browse_roles', 'roles', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(12, 'read_roles', 'roles', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(13, 'edit_roles', 'roles', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(14, 'add_roles', 'roles', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(15, 'delete_roles', 'roles', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(16, 'browse_users', 'users', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(17, 'read_users', 'users', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(18, 'edit_users', 'users', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(19, 'add_users', 'users', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(20, 'delete_users', 'users', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(21, 'browse_settings', 'settings', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(22, 'read_settings', 'settings', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(23, 'edit_settings', 'settings', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(24, 'add_settings', 'settings', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(25, 'delete_settings', 'settings', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(41, 'browse_hooks', NULL, '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(47, 'browse_block', 'block', '2020-10-31 10:31:52', '2020-10-31 10:31:52'),
(48, 'read_block', 'block', '2020-10-31 10:31:52', '2020-10-31 10:31:52'),
(49, 'edit_block', 'block', '2020-10-31 10:31:52', '2020-10-31 10:31:52'),
(50, 'add_block', 'block', '2020-10-31 10:31:52', '2020-10-31 10:31:52'),
(51, 'delete_block', 'block', '2020-10-31 10:31:52', '2020-10-31 10:31:52'),
(52, 'browse_blocks', 'blocks', '2020-10-31 10:34:13', '2020-10-31 10:34:13'),
(53, 'read_blocks', 'blocks', '2020-10-31 10:34:13', '2020-10-31 10:34:13'),
(54, 'edit_blocks', 'blocks', '2020-10-31 10:34:13', '2020-10-31 10:34:13'),
(55, 'add_blocks', 'blocks', '2020-10-31 10:34:13', '2020-10-31 10:34:13'),
(56, 'delete_blocks', 'blocks', '2020-10-31 10:34:13', '2020-10-31 10:34:13'),
(57, 'browse_contacts', 'contacts', '2020-11-01 11:33:34', '2020-11-01 11:33:34'),
(58, 'read_contacts', 'contacts', '2020-11-01 11:33:34', '2020-11-01 11:33:34'),
(59, 'edit_contacts', 'contacts', '2020-11-01 11:33:34', '2020-11-01 11:33:34'),
(60, 'add_contacts', 'contacts', '2020-11-01 11:33:34', '2020-11-01 11:33:34'),
(61, 'delete_contacts', 'contacts', '2020-11-01 11:33:34', '2020-11-01 11:33:34'),
(62, 'browse_contact', 'contact', '2020-11-01 11:36:42', '2020-11-01 11:36:42'),
(63, 'read_contact', 'contact', '2020-11-01 11:36:42', '2020-11-01 11:36:42'),
(64, 'edit_contact', 'contact', '2020-11-01 11:36:42', '2020-11-01 11:36:42'),
(65, 'add_contact', 'contact', '2020-11-01 11:36:42', '2020-11-01 11:36:42'),
(66, 'delete_contact', 'contact', '2020-11-01 11:36:42', '2020-11-01 11:36:42'),
(67, 'browse_navbar', 'navbar', '2020-11-02 10:09:09', '2020-11-02 10:09:09'),
(68, 'read_navbar', 'navbar', '2020-11-02 10:09:09', '2020-11-02 10:09:09'),
(69, 'edit_navbar', 'navbar', '2020-11-02 10:09:09', '2020-11-02 10:09:09'),
(70, 'add_navbar', 'navbar', '2020-11-02 10:09:09', '2020-11-02 10:09:09'),
(71, 'delete_navbar', 'navbar', '2020-11-02 10:09:09', '2020-11-02 10:09:09'),
(72, 'browse_navs', 'navs', '2020-11-02 10:11:41', '2020-11-02 10:11:41'),
(73, 'read_navs', 'navs', '2020-11-02 10:11:41', '2020-11-02 10:11:41'),
(74, 'edit_navs', 'navs', '2020-11-02 10:11:41', '2020-11-02 10:11:41'),
(75, 'add_navs', 'navs', '2020-11-02 10:11:41', '2020-11-02 10:11:41'),
(76, 'delete_navs', 'navs', '2020-11-02 10:11:41', '2020-11-02 10:11:41');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-10-31 10:08:58', '2020-10-31 10:08:58'),
(2, 'manager', 'Контент менеджер', '2020-10-31 10:08:58', '2020-11-01 09:45:51');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'ReadyPlan', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/October2020/Td9Y8iOTuViBGKMmDSjn.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'ReadyPlan', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'CMS for ready-plan.ru', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'site.phone', 'Телефон', '+7 (863) 200-00-00', NULL, 'text', 6, 'Site'),
(12, 'site.email', 'Email', 'readyplan@readyplan.ru', NULL, 'text', 7, 'Site');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE IF NOT EXISTS `translations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-10-31 10:08:59', '2020-10-31 10:08:59'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-10-31 10:08:59', '2020-10-31 10:08:59');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$P2Uw37UeSmKr8sONHFKYHetloG3RwMVLPpUuslLWXcMzG/346l3Y2', 'e36q5HMUNSzIdhlGV4Bjjm7usKH0a8S1R4ejcFT8FmwFIePU98vaQ1Ath1oi', '{\"locale\":\"ru\"}', '2020-10-31 10:08:59', '2020-10-31 10:19:50'),
(2, 2, 'Менеджер', 'manager@manager.com', 'users/default.png', NULL, '$2y$10$l2yt2rKVH0oRnjtxNBbV6OAqyHxszJJJnLQCWwSvJXBYeaiDw2r2.', NULL, '{\"locale\":\"ru\"}', '2020-11-01 09:46:55', '2020-11-01 09:47:33');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
