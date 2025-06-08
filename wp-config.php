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
define( 'AUTH_KEY',          'x/cvh9=6z|CR:ak8$HqnKby}N})u;6fw<6MMLu`11=)O q!oT`4bY]} ,tH7WeX!' );
define( 'SECURE_AUTH_KEY',   '^wId;)hl-~rlx1OBK4Jqa6J Y{g,|QIOsWS%1C_9!r;IKc+lk5alYt T~q/d)PWd' );
define( 'LOGGED_IN_KEY',     'f3TkWy|8|S?e(#|iKSH[:v/]]MuT>C=`HDT09dF=WVh]@*ReF4u}:e7N.9v-iix!' );
define( 'NONCE_KEY',         'j@zeMax.k]sN8zwS1{emOVZ#X((ZO~=0zb38Hb5O:PD4[l?6~]D8%;5DQcc^i1@;' );
define( 'AUTH_SALT',         'jE.{_pP?U[w3yp*`}/Zf|iDJ$sMK2w].`V}8R(uw/ P|{?rLrCpTy]haj+F=Xx/G' );
define( 'SECURE_AUTH_SALT',  'vnm-/r1gL8D;*V1RG>`gX7^>Z6;XOH/}zoIzbuBmNl(,1Q8yM? n5{&B}+:^C6?I' );
define( 'LOGGED_IN_SALT',    'zi}3S2Ge[lij:?c4`5^?U3$!MT.y&Id-puGH|Fgm,!Z#CtU_<dh-bkbgw%Xl59JR' );
define( 'NONCE_SALT',        'M.zt5iY1gMh[tM]Bh315t8]E$6I]/m~Qb#+k}{|P~3?+5r9cJe)!UA|.nyz]$X+U' );
define( 'WP_CACHE_KEY_SALT', 'Q{U-l*h>3p=2m5B==cT#MZ^#N*FE~X,*MQ{4mDY;.23&]QhrJW`P_hMBN2S/+A*H' );


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
