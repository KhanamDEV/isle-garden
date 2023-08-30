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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/users/2/main.jp-33263d11d5f12320/web/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wp-isle' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define('AUTH_KEY',         'Bf~zgO5@z{#$k|/`$~t+WshO442}7e<2@zqp(m:wXawH-.X=kU-_^`.&=Wz<O*Ir');
define('SECURE_AUTH_KEY',  '&W,^orVP+-d]-s8.Iab+j,AetDRvPp*MFzkRc<gxFw~AZK0s]W#=+Z!<sep,Ep(9');
define('LOGGED_IN_KEY',    '))%T>L;ZM*No6%B7NT)f#l5 20dABi9(~vEUS@]W+qVF8E{6!?7E>x+wY+FkgWQi');
define('NONCE_KEY',        't{{6v%2/};jr<#@E`+R:=*8?d[wP0CB!jpT_[%-XbC>n1U-}sD.dZ&l5#Kf#UPc=');
define('AUTH_SALT',        '#|6,G,t,-n<[D_-p>Z%I8DM<,hXNc.j-pe{@,%1=U5B?c(*A;C$+pVrZex)B#dKp');
define('SECURE_AUTH_SALT', 'p2v_c` T,Xot+DLn@hNw__BI+X})ipmoayXdi`t9~k0*;`0Nn=u&6ja0#,Kak[|k');
define('LOGGED_IN_SALT',   '9#3DQf9n}|jz-8;gVE}<N^4^6(V62zV[lgj6S?2pO}T9bGu#_<nL<+@&$AS{ =+j');
define('NONCE_SALT',       '0Y}a!KJ%h}a2RCc`?oZcu$*sNpN N)u$%+zo*@l!0]?%1LZTXrJ{c!1;4QlTSk?Z');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
