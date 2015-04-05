<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '5|O8P]I@<29+Vk^xl|f_}yd3U#zvmb;U#Aed`$)Lv4{w?9EqTX;TA<<*0t<r[/(`');
define('SECURE_AUTH_KEY',  '}+FKB6k+iL#0zO?Jc_|,!-|am|[7 sK|1k=)W,a&:yU&CfDwnUqeP4=FnYH|rG.V');
define('LOGGED_IN_KEY',    '%<,{;qw!o*dR}2XZ#.kh7%gLFyhe:79+C.Y;ZTgNIGE!;=9,,0b0bFaDqUAc&[W8');
define('NONCE_KEY',        'Pa[DwbnM/OpIHv7O#5: DB|@O,a1Z0suMc]+><m71=v<~$pXj[P5l.lI/WcI+K>|');
define('AUTH_SALT',        'QMr%rRxC GKpp:HMZT&,W,|}qI0p;jj6dF_hDU||~@)J+%CxMaDH#h+f/~E4J6 a');
define('SECURE_AUTH_SALT', '$+e&^^|W/B=N|Ieo_&vPc-/0F30Az.%v>J]-u[;6-5H7Eej*OOquUftfe++D,_#w');
define('LOGGED_IN_SALT',   '$Yu=Sm-0vL<(n@_%;l~a2mt*G?qdJ}MFc-8f9HCI+:/~<INwE-^dp+08l],*`n~A');
define('NONCE_SALT',       '4 z?>28f<e.}k$Mr2~K2#h|c{]z%?r_p=vfzME-jX^lS]xtQxqp,-xolju+5UL&{');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
