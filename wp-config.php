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
define( 'DB_NAME', 'shopthethao' );

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
define( 'AUTH_KEY',         '3#.zK=U(WXZ;^0]RN3LW5YD/Li_ae(sa<L-n4FZjvM&)<Ny#7,HU+p|r,C)gcVIP' );
define( 'SECURE_AUTH_KEY',  'yX,$+J2biGtVJk)nsFC0S}Za8*J NG#h^Xr]]F[,f=(k?MHu*#t|=jL)iS|lNb$1' );
define( 'LOGGED_IN_KEY',    'Cf?:`W<Y:xp.JNE~l!:Or;[SNe]*^WXK}xZyAOyg| FZZ@SJ/Wp0IYWi$w8j*V0C' );
define( 'NONCE_KEY',        'XUB6dy$6/!k;G?;bw%5&sE3dfxbz9=V*;G}w;h0czSaT&,!Q.7{){t(P)d7Q]Bw{' );
define( 'AUTH_SALT',        'q:>id?;{tp,,@Q*&,.2-m$~0(&mY%dW:pLli<iJs8BeVi fLPR!&ndQH0A-TsrHZ' );
define( 'SECURE_AUTH_SALT', 'KV8]3N_THfWWT}Ja*UmfDpga2!kK-hgb-_$o84Q?4LS]pC%tyZ=gA:|4vel2tbDu' );
define( 'LOGGED_IN_SALT',   'Na,r^2~j#kt2T!^{K@Ah<@g#x!To8tX:)Cyv{`0JG/nt;`xO7)ruL*R}k3 ;A58Q' );
define( 'NONCE_SALT',       'p6[i5DLTuhfx|#Z0e!)7DZ)@pO+^bF3G5Xg(P`B*a3S1Vj#$+{xVjt1<3&?j^MsV' );

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
