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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'Y 6C~!mu!2<Blj$Kd])pjAKnKF ZfF)+IRC|WI*D+;/Y t&Q[oL m?(VJdo;u{F,' );
define( 'SECURE_AUTH_KEY',  'Qc,x&oEiMO&hw8y>()>^x25($60Agah)nq>E)E`6&nV8D+eOwH{fQQQ~s&%eNi?>' );
define( 'LOGGED_IN_KEY',    'vL|rP`-w%r:b4jL^Mmq#<*AmV%i>oN`!ouR][@Q:oc2&x&>U()db?1<5=F^ti]0#' );
define( 'NONCE_KEY',        'D>YPV<V0;kf@[2JZ<oWC;-u!M0H}9n1su5?= GrBxae,k@Aqt@~VwwEt!;ytKfbJ' );
define( 'AUTH_SALT',        '5MiP*-Ej#`X>lpRh8.cLN3?p0m_u@8e]&@!w2|jFkZg`H,7FP%L!K%R`PZ]p2q`b' );
define( 'SECURE_AUTH_SALT', 'v%FE;>}aCZ_A7JzyMV_W3k)J,b]yaAugTd83#}{#/-Z[~yvLG{*%8t3SX4dlX,K2' );
define( 'LOGGED_IN_SALT',   'E?XheK=`W2kut/{ypAyK}?l7d [#HYvzFioetOMfALTtJGW_A4WS0aKbM1~Yg(G!' );
define( 'NONCE_SALT',       '61YDx5%v(DCLF0O&<ND.%*UH{Wh-szf -1P53N>}}iz%FD 4*Sl8=toTQq`Coe`%' );

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
