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
define( 'DB_NAME', 'corpus_db' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'pantelis123' );

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
define( 'AUTH_KEY',         'RP-?NR=j)<.5L!)%_~8WG^9~@o@tq2|`vR)ZEk4B+Ffs&3|y*Ecg6@u[5y7(@v/c' );
define( 'SECURE_AUTH_KEY',  'u!3sE&.^ccoL>nW+u:b;9RC1XdNk1N$=`%XI7tw(^*a`dPnY,qgUCZ}&B l=eGOX' );
define( 'LOGGED_IN_KEY',    'eW95)VWAdh1n^mPo<7+P|x+SR[cq01)AvA?_o#cK81s^cORq@Yq(KtE`oJIP_}?(' );
define( 'NONCE_KEY',        '`+>j(-4nZlR<0A86]@voK<?(ni|x@Q96g7SQz9`=DH{Fu~N7]0[2<~_f{N.oO,rW' );
define( 'AUTH_SALT',        '(SO!BpP$00lM7#&2;NyuLF_v5npij70g:6i%EvCJw&+$8bXJc{#Id.xp.&K%n<b&' );
define( 'SECURE_AUTH_SALT', '^sFH?4TfM^sqB9ZB0q19dkHE-r Mtc0aAOBdzZx$=*jCIh mq;7Es>BgSL#)Vv:T' );
define( 'LOGGED_IN_SALT',   'x2:iZ;~xuCpEw!&Ve7<Um3va/SZl.U=We:!uFq]RsVZ3Xn<{bnAm+eZn#V{Nyg~~' );
define( 'NONCE_SALT',       'JkcOU(0_R@6zQ/da@/}*#Ro9MR%Vp]mJ+U[+!R6WV+CLOGDw3@sdPIt$*k)d8E_z' );

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
