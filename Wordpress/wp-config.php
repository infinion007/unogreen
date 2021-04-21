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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'T|_FwBxbvVdgiQl:GCN52dOI=*!=LVWc:W<DO#{+n`i)^#k63007Z]S?&JjwD@lf' );
define( 'SECURE_AUTH_KEY',  '7RUKz{:~jBgtT=Z)@Ok02G7~.Cbx]u6(ecAQ0)o=8gD|o(+kmuM4G@jSe+.HRBGl' );
define( 'LOGGED_IN_KEY',    '6#KZ`ZC?KY2rJn#s<=sQpP{jKo6@:HE^#LMc<#+J}EkY/;L$sg~y,yMMnL]Wo}Wk' );
define( 'NONCE_KEY',        'CKDm&^s4NM=5EvC;55mqu~1NIEJq|w9{BILt1m.b`8@qqKb&(0>&VX{Lnx|ldJUa' );
define( 'AUTH_SALT',        'lEtcUV^=@P 6%2XP_LDbm{tY,9#6s!4Ex.$o((B@u;%6KuER=U!h8=nY8e^a3n3d' );
define( 'SECURE_AUTH_SALT', '!2#|N,PE@f3rJX`<N3()uq{>0rJ].q?~#5^TSId!0[OBwzFmPRGnj~-Q&%fDdbgp' );
define( 'LOGGED_IN_SALT',   'Wo^$]T1TKl8:tudN0 @9x64d[ZM9lPTXS*1G#74Z<#Hy:c95;gOXJOz*mr+%31b+' );
define( 'NONCE_SALT',       ' g$w6=8^1bcCiS.a#[ A.q0C58E2GrS8vu9PD46_7?qO-,-a16+GPlX]b<(f8(LV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
