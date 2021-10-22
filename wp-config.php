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
define( 'DB_NAME', 'pizza' );

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
define( 'AUTH_KEY',         '89?7%-`z3f|M&[dJY366yh^tEf@28tfA1+iH9zxe5+S#tj63<%.yqwA[AYqn|[C~' );
define( 'SECURE_AUTH_KEY',  'Q@`Jrm|?4b|I{gK(Gs>Y#lP_<H3.nST@F=-EqdjlR=Y 1g&/+HQ[`BW1yC<G<X5d' );
define( 'LOGGED_IN_KEY',    '{O/{J;cv2A:KFU8Woo$byzq!n2_K=k3|mf^>8%--_>90q#pmecZ`2&kQTdAB?)+p' );
define( 'NONCE_KEY',        '>HP3/Ua|-3`MRpr`^}b_g:GP`t EoC7o^C&yCD~juQ7D|T4<JH+Li(@V-qK=BzKO' );
define( 'AUTH_SALT',        'T8X5o,7<rK}{y_{iM&tI&iVHk<M9=}Nvz/sVb60Hs$s|w81;UIi:i.Bu59JE`-2U' );
define( 'SECURE_AUTH_SALT', 'q /Q|ca^]D_Zbfr(/gi6Dh?u`c,|43xRBj!Xa&<3S+jhQ5w:6!hP]T}{R/0bnE.z' );
define( 'LOGGED_IN_SALT',   ':8+6-kMA;h<gkSXJpD;a+S5uT&2|w8~X!s$jT@B,+__O$`6jkX,w2|GVIxQ,ebUR' );
define( 'NONCE_SALT',       'Btc*~Fx3S} Ace Jh!di d$T9j$x~4#B1HojiL0f`J5AQ._X_5&YH;5gn6uR>~XC' );

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
