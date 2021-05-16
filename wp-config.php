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
define( 'DB_NAME', 'fitpage' );

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
define( 'AUTH_KEY',         'nC8$T2$a{8`b7c[L06$s^;1VHL}yD#5wF7&v<;<]72dxa8P`C;G]w4zrzMfOEi,+' );
define( 'SECURE_AUTH_KEY',  '3r6^v(T17dJM)Il_?,!7n6t&6LrTznMvlv!4LUXl7H<1*A<I=C~q:eC@[{|@q(E$' );
define( 'LOGGED_IN_KEY',    'B3^@gs$G:#xW4,23LAUT>4*2HYREg)PkId:-s@PN#,SOA3A+:^7#+8CD|;Kl}e}+' );
define( 'NONCE_KEY',        'V[_N=V~YiDh&MpuW$T=9C(5J<WAZK0z07g^:BL5ZuRz{Vn0`uiaV/p4/Z#[m0JW7' );
define( 'AUTH_SALT',        ':w^jyWF8g,UAutG)yy*pGN7xywO#[Fo1Rmp+J[DSDf]LRR9r^q5#lh>{!s5v%]z[' );
define( 'SECURE_AUTH_SALT', '6tjGn?<Ow?m&F_<ot1*hZ6t9v05uR4J.0~izbmg;h~rDU~TdRZ>5t%p>ix<%_G(@' );
define( 'LOGGED_IN_SALT',   'Y>Y*LkeCgaO@94XdxfM]?zEL.S[m*2fC5!n/=CE4mwIUsO3D,:WLz<SEPr0Qq^b+' );
define( 'NONCE_SALT',       '$Y`8q&bkJxX^w%1-_JZD9J@uvsTe%z!d}ogfPvg(6B0[&_==Y_vEp5JYBz-+:=/t' );

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
