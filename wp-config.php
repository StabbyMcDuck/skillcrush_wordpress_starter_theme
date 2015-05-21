<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'regina_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1HC5=1F{k%}J!zdPR!l-40GnBtUL|4-gsa6-aT3{)C~#:X4p)C}OIp=q6ACwu1M[');
define('SECURE_AUTH_KEY',  '0a/,!nNDe:i>JCQI5Ou;/hpJL VC-?*G&5n_HkrNAo|3uF}*w1,x|iRVE|$g~.}1');
define('LOGGED_IN_KEY',    'K+:~9]W!#P`rR;q g6?P]8p1|7v|Vg6Cik8&YRT,0-Bj+O7[jX9 !~C:HRr4UDC]');
define('NONCE_KEY',        'UIC^0+na:HL:uG99k`V~b*#0?RT$[T<JA$3jTa?D&p{+/T}c|SL_M*&cLRMZeQ#t');
define('AUTH_SALT',        '8,E=ajZxnh3l;]u&,{AbK-kO,,!?Q;@NlA(kuR^0| KcPO#<-HC^g7NtjR%+hWkE');
define('SECURE_AUTH_SALT', '&87-LoJ)r`e:,qAv{-[c-_wl.ISl.i/zwc-zoA5no3/A[/x$;!{^kx9]I([+=vkB');
define('LOGGED_IN_SALT',   'OT(_DAg]Hu3N%Ft,+g}YlF|2p%7+]d+? z(971tp,$|UuAWBX6#d:F(_1%jB|(Kr');
define('NONCE_SALT',       '!,j*FUgRSe d4^=I3*1eC5p1yt)0~JQ9-oR~+H#hMc%[CGKXIRfwRJ[%>KV]Z9Q-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
