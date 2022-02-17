<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u129252p124731_sb' );

/** MySQL database username */
define( 'DB_USER', 'u129252p124731_sb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GhivzNU5QZ' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ghk+Vl?EINHPwEercLfMz`am42tp8njkX1pe_2;)+Tf,Z|U}-ps5 r$}%~V;A_ /' );
define( 'SECURE_AUTH_KEY',  'I<qxHQFTT+QZ3*{TK7qoA%@zoV+VTE_puu+49oPvZ=`ps[WtA,2x,XG3-u^@QzCh' );
define( 'LOGGED_IN_KEY',    '{{klNHldo$oCQ=zA>&yN@rf#:6fJ+UK4g)&aPXKhwdFNcj;w2oiVPEc-OqXXol/+' );
define( 'NONCE_KEY',        '@!V5s1l<zaDNp7Sm}wI/Rf(ESQNaWw/z3^B|B$B4}M2TNqGiiWOi%-GJdfUrF:F|' );
define( 'AUTH_SALT',        'lPY8]kYxlDB~V&i!]W`~CiT$#4G&ck`}?lCr!S%f9oaRmkEd{p*#`P4.1AR/ljdX' );
define( 'SECURE_AUTH_SALT', 'Wd`ZO;-v%,Qn[g83@}36^ASm;>Q:[uM;aX,[*-895Gsj9H^8EpM,VhKt?2;TO0`G' );
define( 'LOGGED_IN_SALT',   'x:(@_*1BQ}HjllADVn3~XJQu|E4$5O6u|IdV5WF`-`Jr.#@[?Ub.[OuU]5u<0|RV' );
define( 'NONCE_SALT',       'DT}ll8rm]x;N0F9YGx9c`rFBr#OqO@1w;iV(d&.F}GQ{.rXTSFCDdUC{LuMHuZ]-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
