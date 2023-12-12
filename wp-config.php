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
define( 'DB_NAME', 'p4' );

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
define( 'AUTH_KEY',         '^6>SO:V8mIe*3o-5JxU!2_,r3LZ5x3<Z[xd/0>*# 3OuqKr9~E@cLc-^;8k5PSQf' );
define( 'SECURE_AUTH_KEY',  '@k]DCKP?vd:Wy#G6O3lKxaMth-_LzByrw !-^<@$!3[|EbD|/C;yTwFL&6OP]-zm' );
define( 'LOGGED_IN_KEY',    'Q/MG=qu68 <]YnK$GZHFPR&)#wu?CAbg[VA,!o=>hINJGD!#2_*>p:`QMRRZ(u[K' );
define( 'NONCE_KEY',        'piuh})+G_>$HF0n|P2ZbX|mBTKZI0;U&2pxp/+1Rw!<{ub(q+v0M(Jrg__%`[jF|' );
define( 'AUTH_SALT',        'h4,f~klQZ(VkODoil8vH{H7x{sA0[_$)Y}ZT?@UG`x8Am1Qk-ej%p{zbC3NT~}6q' );
define( 'SECURE_AUTH_SALT', '<4gy2R~,M^bT@c#9,>p ^$T,qKord:]=UP}.numF#@r{s%ev.^EpN}5 r8KPMzs=' );
define( 'LOGGED_IN_SALT',   'U}R}|4Xu6uOxX!Ao[7 62J,6nvB|64x=(LPsDtj)@+i<`k79R^Z5jh/V</)p%C-u' );
define( 'NONCE_SALT',       'f6x2B/>EDWc@Guw #U$?YLy%<6:Z=byUuOgJx/|W}aS {b;6u:[[:mf.&`TC!iqQ' );

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
