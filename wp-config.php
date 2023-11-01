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
define( 'DB_NAME', 'youtube' );

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
define( 'AUTH_KEY',         'r}w1!X%T5GriSa45C`t]0EQ|,fD([;|j#Mr[1_^>Dmc4>{:hSS3jXj} F-}FJ~6B' );
define( 'SECURE_AUTH_KEY',  '>}(PCTWMV{s$jh~bIXRuFB15c4zC{-vKI}adICT36Ls3&P{!._p3{pW7v+`g9IkS' );
define( 'LOGGED_IN_KEY',    '>Oy[hNnr3=3O!Ln%%2e[}raU4.KPLnW[6PO1&ERPj,A% m1K[#^[Uj!*)}/-TWKR' );
define( 'NONCE_KEY',        'E$=W>;clygH!y6VJ8<:%9;YcDAZZ& @DC$0G=QzCk6-/!/HGxg>6]f*RtJJA7oHN' );
define( 'AUTH_SALT',        'L78[]/R<mr.?6:3-VSibDs]7U)L buA,nga85%sp>+3Khec3(:oF[![l+K.ef6_q' );
define( 'SECURE_AUTH_SALT', 'Ooe.T~TzAD=VLC>Z6+/.j+8:gocvRpt,Q8L/R<mVI?58zM7EPOrb]bcKop21_BBO' );
define( 'LOGGED_IN_SALT',   '_r)lgjcNTF9bz`2Q_ZQ8FVg%_ODT+<`<SHo/csu&a,T`kp.Q)!W t1ZiU}a..>KB' );
define( 'NONCE_SALT',       '5*W,kkY&rW&w!?-yf%o`$OTcTM1vzI_J49l=,x#~D@y.+%$dj&W-q(2B!/y_9Fb5' );

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
