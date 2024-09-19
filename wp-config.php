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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'fn03ptDnr#[$WXQE/Xil-f}`1HoUYBdx2bdlWj~LlCDW zJjmV-6onXx3JA_~&Mi' );
define( 'SECURE_AUTH_KEY',   '*w_f5Ucro])ZFQ6a3$xVCu^Wz+s,4Ovlr-Qu[(<NwRc50!&g[_3&B, hzn7k&Wd4' );
define( 'LOGGED_IN_KEY',     '2mQ)oMmsv(F_%y]>Y97+KfHlKqF=4b%--Rp t/]kR=W`b=A4c6Ur7/D}&m$,LcS~' );
define( 'NONCE_KEY',         '5Z<L>A1^`?jB:#d<y;[dU#~9afDSq!uIAJF`rg?91nNqi1e&Aurn@{Sq_5-y(vSb' );
define( 'AUTH_SALT',         'iCyReY&56kbCJm8gp!mlKP_^Z+M])l20%OI7j-ta}B2Lf)$LT#X%(+g}B/)>Io)1' );
define( 'SECURE_AUTH_SALT',  '%}14WtyXux1ojZe6|W(W$kaDJ{aA_d2Y^`v2qAo|be9!`2-u:nW[CuIy&3!#1 FW' );
define( 'LOGGED_IN_SALT',    'T&9[2{D70^uEW0f@a![ r8yX=,0#Yq`V?]c0AO?<JE}PWbhH&;|qFoNmBRv/@7?w' );
define( 'NONCE_SALT',        'qUAGa:fNbV9$^s)%QM,BHJzmLo/,f=_eQ-$S$[tPY2H*kM.)! ,OX5jHndh|cGjc' );
define( 'WP_CACHE_KEY_SALT', 'acR-(m5M|ww){PtK;-q;}GoSkoV$Tc55-Ej=VX5_Z0r,ysc~&s{|u}8&siseLY;^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
