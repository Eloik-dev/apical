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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'apical_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '3=F3y1uqfwG/4)9|QzPvA%q=IyyR}U`ZR05W&|?n^4svbc-dHJ*a|jv]LQy3=LmM' );
define( 'SECURE_AUTH_KEY',  'wf1XzcOh<Qsz0<HZH3{bvcCRZVypR)z,vs^x69E |!-2)Ko*gQ=TPlh3v3K`%5W2' );
define( 'LOGGED_IN_KEY',    '|qDhYEJdJ||T#Sc;d1{9MALUiN85J({2zVZj?:xUPBsEi0RX@6:x--0dD@nbOg3J' );
define( 'NONCE_KEY',        '/)9j!Rhj<rcdP2sP4dy?; JL#jWx)w_[=4j#8@?!Dt|c1 Ce2/tB?vl~hx-)WkKt' );
define( 'AUTH_SALT',        'HA iUyYEf>e9zPI2,]]AlFPSiA)@&^a0?(h=<A!8e( QOM4@)e5[rZnJt!|6bL50' );
define( 'SECURE_AUTH_SALT', 'pR3H)m8CJ~ymR}CQ3@3RZ98m/K=ZFxL!ph4~U/QrgsXLSJkzkLsAH;g].d`Xe p>' );
define( 'LOGGED_IN_SALT',   'tO?YpL|wVUlZ#..7]Jg4P0j[;^+1o~,+-QWMZpH0jpm067eP,Rfvj!A|VVQSc4.U' );
define( 'NONCE_SALT',       'g=-.=MrdPoY3=IlYz7b-a9A_Hhs@6lM,G*Z{TsR,8V]Ign(iZAztD8,,U^`)v}GJ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
