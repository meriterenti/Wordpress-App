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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'admin');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'aGaz54NdGfG1TfMb');

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
define('AUTH_KEY',         'QCV{PXI}klXj.&2Y^/SIl>&L4|lL!pjvCm8+hA@`G%VYTXuO^^@Q&3%{x8hl!LM0');
define('SECURE_AUTH_KEY',  '7Ny6&Bmx+4tJ(X@?`V8Su]U~TfgJ;rLt@=h_P5Ka|c(+ngzbaZ;0aVhbvyCAC_*+');
define('LOGGED_IN_KEY',    'jw &r|G}~DKuno;Ro0]~{! %i%GSn:lw!Wrc`Be+.7,81lQk uG/#Ui1B9*2+A# ');
define('NONCE_KEY',        'upM]BangmknyVn7nNR=vjxI?l0WVOwQe|^|`;DmCdBh2/?}+)A|7vS:?=HS^S sX');
define('AUTH_SALT',        '1G{yJ$@gIHP5*>70y1V!jy/)#UVtc7`A{&<NMMs#gNitk[X7KuPESx aoMVr_G)7');
define('SECURE_AUTH_SALT', 'BaHHpIi7gtoL~7v~HzDh_orIj8+%)Iv[.[md{%#!BW>]T,48lNQ=/5@*|>i7o&9^');
define('LOGGED_IN_SALT',   ':GQ$Thqb%QI#cUO5vyB*pH @U4cD~Z+vQv`Y$N:V^s6%`YE&bym1pb<$JO!/+38C');
define('NONCE_SALT',       '9X?Aw^CXD?Et2qIcd)e^x_1ah|<!8+f]*]W/}{-xh!74l*cY+b<~7UF#p4tChQ9i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
