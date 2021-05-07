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
define( 'DB_NAME', 'drip_puff' );

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
define( 'AUTH_KEY',         'y*f&e[4I*Z.[W[490bBn!d$Hv#WI0*JOytY}f*w8cBz)bNWIIjan9XpsiekW*UMJ' );
define( 'SECURE_AUTH_KEY',  'uxuVz5OV72wjA;QKY{JW?2uu_P_TRJF;J_T{XBX/3vWDYNP57X;^F2Z@28DcnM&Q' );
define( 'LOGGED_IN_KEY',    'Tx}7/W#wN1ZmUjA|twBsGT`$~t`N3wOA!sLhZItV{R&&aQy0#a8oDN@NLU%qNM5q' );
define( 'NONCE_KEY',        'OPI-#/^X4gY+%f?17a^5hN06O#g@ J0>#F;^XqI`TIM}m,:R>U$Aa|_)]THQmwD=' );
define( 'AUTH_SALT',        'hW:dw}.HpF24tTq3UA/f4tSElz:q{X},+vEUokt#$Q5cz*]sA$`@ITBL^r&qH;q~' );
define( 'SECURE_AUTH_SALT', 'F`NCb~Q/4wLr/#:4>yrx/G%:tQAX4]PD9D5;x6M;o/&3f~DoRFB;:$cm{q_U0%&+' );
define( 'LOGGED_IN_SALT',   'S9*fl%%&3Uz+!YQ^z13`R8T~d]pm)0fqxf8R*#9tVD4*m3{ugSv3geSly3;k%+-n' );
define( 'NONCE_SALT',       'u3*~mQd}N[dm@Ft!!}I.q|Dc<Si@[(x2Oio!yct@~[|>.Y)I9!fw.;p_CWaD#1s1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dp_';

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
