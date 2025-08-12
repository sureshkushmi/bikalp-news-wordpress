<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bikalp' );

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
define( 'AUTH_KEY',         '5q{3V>(}S{a;>qu?uK[}Nf8K?&VD<g~&gSHQRh;aqlEsH4Zu/%L7ok$I8iD8ade.' );
define( 'SECURE_AUTH_KEY',  'K$39s4e~UyJTfozGb568~T0d-51NDc|w0Ouk)|;D%g!Osh=. )-*:.o46aT4dOd<' );
define( 'LOGGED_IN_KEY',    'I=TRQ)YdA6fupp 6?8#h@sBM[,hde_<i[p^ffCRUw?6j?aTm!B>@3j$~b5N$<{<$' );
define( 'NONCE_KEY',        '$!OvA<,fJluN0[B7[Yu1B$Qo@8|ENm.h{jG~wqt%EJ)6QTl)4AM=k:2]x)Qe`]m8' );
define( 'AUTH_SALT',        '{h nAiI0uW&#^E&yQE2Zx{P`x$WioR6&s+[Pnf5; |4Q*S/=7vO%=>UyRGK+^9Ea' );
define( 'SECURE_AUTH_SALT', 'I`yQla[NoVFt d*8,A}E6k,3)#l@mT#8+<Tl%xB!V9jrRi47u(7({HY8K1+@mOqZ' );
define( 'LOGGED_IN_SALT',   ';Ww%KC);[p?YYU4v/88`elR$hbZxeVrt[s6w)PGl%$|QEm!kNYH256Dd>^Y]8zW]' );
define( 'NONCE_SALT',       '%F)d0;pf-t-H*e[t)o.bzZ8q1E,Q}a>e?SaB+Rcv{oaoZQbit9Yd1**Ln}$^qiF=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
