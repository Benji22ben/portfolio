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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/<{%xDna2wx.tEqMS-ZoCT{sc|Fi%+Hmy5a/vR5H{oT@<x9=_h7CCU<4+^%6eC: ' );
define( 'SECURE_AUTH_KEY',  'Ct&Jmt7Mx=03W?b*=yhU.~z(f K5n7Wu1??(YQY8Q[Bol:oD@#x#V*AxnHraKg(m' );
define( 'LOGGED_IN_KEY',    'q<crd_|l |9I-U#HKDLg&ffbW@hFx{K6WU0R;!(JDAm< A!T/z3f1_g)3?+j1izd' );
define( 'NONCE_KEY',        'N(L:..eyBzqwt(%^7_0cuDA!c7 uPU.Qx5yZPXB(;k}?J6]09e{g8X]@ idP@Tk4' );
define( 'AUTH_SALT',        'l2JG~B0{e]cOM-U?`{yZJ4c_NpG$|vJkcfP:H,H?%0XyMHIdJ}@qwk!=/uR7Egy9' );
define( 'SECURE_AUTH_SALT', 'q;;A+~>kz@CA$O|x3MR;A1Fm>zSkKjaq.Tq:A> `vuE52bx:0UIkXa}.mwd,&2_t' );
define( 'LOGGED_IN_SALT',   'b0Q0xibS4ClDaa8CdO?COEM)8X_bc!FAB(A> <By, ZvxWeaS97vJB2/3jB4k/v,' );
define( 'NONCE_SALT',       '@j}/w4^iBZ7g*Fy,>2d^qXW>xs`_SOd[PJ,|EJ3:FYZeL4or5l[rC<d2:As;Qojj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bn_';

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
