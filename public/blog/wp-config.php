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
define( 'DB_NAME', 'bookstationwpdb' );

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
define( 'AUTH_KEY',         'cRD~oIwv&D!Hh,eb@ktX{+CdatlSp797$psNa)o1/>6Vi}QQV< ?D|1*r/MC34im' );
define( 'SECURE_AUTH_KEY',  'vPp,[=y8[gV9|NdUlI2sKT5hQ5 eUSbj7C-j~)FT2+[HkoL%MAWuL->j:nC<pg#T' );
define( 'LOGGED_IN_KEY',    'Z1pVzd DCtS2qoqx]FH*/I_oD>u<LyQ_0g!c|x{J/ZKD.Ixnz=3oJa[qv(JCoU7M' );
define( 'NONCE_KEY',        'dj@fr#yrakH2b!w5{8jy|dq1nH>^)WN~2WpgLj_Nj=(9[MJb^gRP1nLW{L6~blS4' );
define( 'AUTH_SALT',        'ycX-,Ln->=2Oba=hAF6R0Ykknc[A>3=NWL%)Z {dh$:%;_3<{ct=y9EFVP_&3Yl_' );
define( 'SECURE_AUTH_SALT', 'KMx44Afr/~B6]C|I%>[zyDJghgPm cb}s8$}r]3zAlL`aW|aZ{/EO@v7Luw/P_Vf' );
define( 'LOGGED_IN_SALT',   'iMi0wkHnY=wP6lgH`V^=IF^m32aoqWoXt3IDc!ZUG`W,/ZM(:rSI}$.I2z}7IUGw' );
define( 'NONCE_SALT',       '?3fMV(- #:6QNxXy|_@_Dh/Dw}Hp[C.f?o5b?QI::RiuTRp.LP9J$+ne$Li#](L(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bookstation321_';

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
