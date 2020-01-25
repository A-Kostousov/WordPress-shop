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
define( 'WP_MEMORY_LIMIT', '96M' );

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-shop' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TmY-n3*J@,|tXw^{!|:B1<Y}sNO z?jj/D6?%J&Zx;7He| Ryg**s?Yy#fE}.<hv' );
define( 'SECURE_AUTH_KEY',  '&+{~T{J<*v0vzAc(cMC:MAAQhWvHQ!)sSV79`0aB6uql)0%M7gGS*t6&u=7FxCbG' );
define( 'LOGGED_IN_KEY',    '3;#V+-]{+l}IPO?WIMca{5>Wz&oztuh:Z^Stg)P/?oRT(@-#-|Sn6PuLII_e(Kfg' );
define( 'NONCE_KEY',        'h MeeQta9-XU:i|ed(?Wu3}d~?n`&Wh_z@ X[ip-X32T0,<U@`v]FK%+W~u|CN7|' );
define( 'AUTH_SALT',        '<?Jd#_icMq-4CQs2(i t@BIuGbF24X&2U:huocy.K-4s&P>9[7(_p;B,Wn&d_MeP' );
define( 'SECURE_AUTH_SALT', '+:xq[:Ta(JB)iy!7`.3uwyb0+8nN@>~w!0J(Vig?bHr@!&(RU$rM8-cu**ka`]Ss' );
define( 'LOGGED_IN_SALT',   'h}Z:K?gSvfJ|ulyrNhk)+JlX#%45i:>DsK#S+uSuP{Xg{+^7c3Qyu]|u{6)eX=6k' );
define( 'NONCE_SALT',       '<zjmkwV8@a{N/,HgvHVc+4xi3{RT>kKUYH!+C?=CG;^+O}GG3vqps M[u_xnis?K' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
