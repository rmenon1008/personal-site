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
define( 'DB_NAME', 'personalwp' );

/** MySQL database username */
define( 'DB_USER', 'personalwpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'planoutbear304' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'msvd@Y*4QGM9$f7y!Jbg/5?_6Orrfuocat!V2p;|UN]P>_F14#_|5 H/Rxpg+_Y^');
define('SECURE_AUTH_KEY',  'XJ-G:HeH$@;N#O`XT8+P6#~0u9iU@1%pp]`1a4]x=t_$f4Ryr7Pu_[7#lR S^d/G');
define('LOGGED_IN_KEY',    'ZE=mPiOY%PLO9MdPc7~5C,=%Q(~=m*mia^L&,9^nUC&$hmucJ(>m+*QU6?;!Y-AF');
define('NONCE_KEY',        '1?QF45}r/H,]ywD-OS$c+F*a|^}z1|o|q*1Ri2?R(i[Zz+%] K-EX# uc1V=rA/q');
define('AUTH_SALT',        '}t=QhX>B0gnJEmhx<+-@?AMIAXjviz-`K%HCw+Q9]n3;M3)+caDpWGB|8IFrmCz[');
define('SECURE_AUTH_SALT', 'F;{4k|9U+g%B4QkaH/hT@fJvq2Q]E$y_a&=trU~4+JD=Uz-~ZG`*K<E|95a`Za[(');
define('LOGGED_IN_SALT',   '%Qon,QSx-x}05^aR![S%i9fN$-;=u*T|-D}trp`dT<O7d|*uYN9qI/P?di-;1ak,');
define('NONCE_SALT',       '|Fi++Pd@)_&%e@A@xbh?_HGC/6BFuSOVVOP5>|Hrz6JWxqtCH@[|FQKdb[~^*k-O');

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

//define( 'WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
