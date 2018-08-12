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
define('DB_NAME', 'theme_beans');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         's@H-.o=}93`,}jKiNbg3;]e/kpk`Vo*m<6LD|C`EZC[14)iwkDpRFi/{;V_778J/');
define('SECURE_AUTH_KEY',  '2YF.3_41YRkglZ6R*2_p4Z1A%G#Z0SDD(c;m/dc~-D~Jl(n1;_+_Fg0F-~f#mREj');
define('LOGGED_IN_KEY',    'cb/vCM!VLfLN;E^RS[?=s|Its9L+mkDrfpnY.JDSb~d 7[ U|L&,y FpU7?+):Tn');
define('NONCE_KEY',        'Q{GwE?[yG81u694 @lysk/./hS]Xg.Xhl>%~x&MAk78{yhs2oAZwi@;=Q~ ~(sgg');
define('AUTH_SALT',        'tu$Pwdk7)q*%lLV!pog=Vb$3QqopX6XOlsb)Yad}BOi[P z0]?P_<k2<L&$9o?kY');
define('SECURE_AUTH_SALT', 'vRrzI8N0,5XIh5aq(>q0h=*R0}nYrxb^d*^q-ro>CP33/Zkz(a(g&(L~r<MA{6CR');
define('LOGGED_IN_SALT',   'b5>}kLs1{@B*gK_W;{5SRSeL) y)@f#@OqgXJ.OXEjKf~&Ay>6qeCumEA>{jHg&-');
define('NONCE_SALT',       'DAqM8RhB*,0!563mAog043?!45i+IPgc!L-H7uTpu5 410}I0&$IPH[Ct1]SEDOl');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
