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
define('DB_NAME', 'u186963189_arny');

/** Имя пользователя MySQL */
define('DB_USER', 'u186963189_arny');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'p3n7cRXPSN');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'tp`Jfb$J6Ww>Zfl&@MmaN6;E1pmBJwJQ.]27uhr 1107*rgwk~<^fohKa JJ)%+i');
define('SECURE_AUTH_KEY',  '29=^[Q/0v VYR01ZYd3tvhhC9AESD=8:@=VuR^Ei0P3[rbP^I;lbYS9J(Z=nN@B}');
define('LOGGED_IN_KEY',    'c*#6mq0, GhgCNgcxjv6zH-IRS(]LhnKQD)4+E-X$h+(Nie^JF(`QkY|j=xMK$ N');
define('NONCE_KEY',        'DB+QwJ6#YBW8A,NE3hD&^CFaI|cE5B/^QY]l.#AptP{OFE;6kDYu1AUeKc/%:L#x');
define('AUTH_SALT',        'd,.jg03Ec_<OtoidFz1j?n 0!ttAM.E|D1g5IbE?%qIG:xw1v/bO*?1H3we;gGGD');
define('SECURE_AUTH_SALT', 'uxipH RG4o0V^q,t<.R%2A;|jgr&8dyDub&i=-P[S&1Gq{O}TfT~G/kDKqp8KKq ');
define('LOGGED_IN_SALT',   '^QT0klsT@~MS};{(cpvy%3>B4NOld7]2Ou`RC<bU=oJdEdRas:NX8Iwz3Vn WVW<');
define('NONCE_SALT',       '2l]jc]xuAqSB`@i?X0sw-cM19r}>=g0^8&9u.qY#JJs}]|+Mf9<GPGle$*Z)s/_R');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_aj';

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
