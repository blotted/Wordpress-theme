<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'steve_blog');

/** Имя пользователя MySQL */
define('DB_USER', 'stevevai');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'UUDZ5ZGuK9Df3uT7');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')%*-8$e@io87Q+LAddZZxnBO!pjgS8^5Kp)q+u)&%sO=$v18+TZ5I4V{*j`f8g*#');
define('SECURE_AUTH_KEY',  'e=kZP5b^j}P-XAbMp$,WbwtqJ.C)@[I}QTE,wVZaAGW1~SZg?oEnNYA]a;>h oT.');
define('LOGGED_IN_KEY',    '/Gsv,<}_pn7}@:H$$/!4{}ulW]Q]6AYoJ$>lof%P$fM3T)5K)axTn(PAF=etrm&Z');
define('NONCE_KEY',        '!/(L@F$9Ef[QOF_auv9j1-=V;+OM6tCA65Fj|$CR!R+6X;I?o)mewALpeX//+*F}');
define('AUTH_SALT',        '*bL.F4?XUr=|SGtwMu?40:pzdVX1QaP&j4_$|]NB|ICGKYf6.yo#-22*GoCOPr@H');
define('SECURE_AUTH_SALT', 'fh !7FF}UiT-}!kmMDq2jF2~q*-QPxL<aC-8?v0ES6]+,R/K@|<%}[|niyO=NLAw');
define('LOGGED_IN_SALT',   'E`[0-Bl+IU*! |Afa>1lwnYgI]ID(=h|*BwY;G`5EGW/L7l=kbwEq=[)>|4|)^Yn');
define('NONCE_SALT',       'P6-wQu;xdKCe~Y{u|+tCrRE[-,++rQlg+am4@^91(LTa--a`6/<KVNW)Vu^to3$8');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'dbsv_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
