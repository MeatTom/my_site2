<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite2' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin1' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P9L! NS6?/[f4o[.g50qgwZOEe2z5:QdC2A2NBGz6Ny`SyOsNbk Qan1$ZX`{],i' );
define( 'SECURE_AUTH_KEY',  'fWy::NaRL<|?djNN_0gwDWN]8z)SCi[qzu@re$uV$f2>D8,a3ozG,wzYd%t %+yt' );
define( 'LOGGED_IN_KEY',    'QXHm%xL(M1:]UWmu6KDer%VzLzl{} UT!SDP5#Qs?]psZ7Frr|-pe]29Sk >aiR{' );
define( 'NONCE_KEY',        'KYF&k(zt@oCAN2^n)-|9Tl|w:CaL#czLeij WD`1]qB4fdt>P.P,,[.X;3v(GxXc' );
define( 'AUTH_SALT',        'f&V{?whh)CN^z<!?a5ZH^3HF+vBMc(WJp#!%*[?&=Jz)eoT@S1[EeHeIE8}. /H8' );
define( 'SECURE_AUTH_SALT', '!W}fI:u6~G7>IKhZ{15*XEpjiz=E8sa3=mOl}_2%#ynpcP$y:k6!Ml+#T;#d<x!G' );
define( 'LOGGED_IN_SALT',   '#[<+ZgGCI;^m{4{W6lDbO+BIn}!:n+};6:jOZA1]2{ef6I]}M@oeE;lc0c%kV,6Y' );
define( 'NONCE_SALT',       'ME@/rHM]x)U;P,168Qd>-Qa_C  ?l<b(1#uJSwl{-<#6!9CRWY`F%j6/%so7V5U5' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
