<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lesson_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&:`?J`5ttVT[-;X[NW3pKL[?tJ`<r1IAB[|qE)h-]})8IZhip!956[fg4TB~t-Z7' );
define( 'SECURE_AUTH_KEY',  '9Oq&t=<onOlij{;Lfn0s<^2+Ixl`:Np.0[1[}kz;-E.A,3m-Du6l&hgsEUiX;UEX' );
define( 'LOGGED_IN_KEY',    'grIIlirR|E+8*WMO#dW8yso(x&I(FC[}#_nlkg.9u41z1L#OmI7f63TEFO;spjaT' );
define( 'NONCE_KEY',        'r@m1?wG,ZH?m$]R94~T?$U^lm;Pr}iH0xiI7[7YVSpbT.JBUu/$7+@._zR;ifj*|' );
define( 'AUTH_SALT',        'X|n$BU+zwHV^bk9}c5I:~jv5ai[{R|Ewapvz;n3T.HL#8&M@_WlpBbi0h!w@cTBX' );
define( 'SECURE_AUTH_SALT', 'g:{z]y8>Zv(35,=wjMTuDSl~FSy,A|2zW`).B KL*zLUYu3k>yy+LcCyY5+bf--S' );
define( 'LOGGED_IN_SALT',   'P{KXeSnyXvrFXP#B{>$/Mqd0BV}n!Z:uP:C@V6`%B[C[iUq/o;5wdKq,#}la4uK(' );
define( 'NONCE_SALT',       'nHG4+C~P_K_mJq4RL3Nzs)_i7d&!ug.*z6P@A dzG+wen%Un:rGb%g,@nMxDWg40' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
