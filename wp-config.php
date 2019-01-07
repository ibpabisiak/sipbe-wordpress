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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jajeczkabiznesu');

/** MySQL database username */
define('DB_USER', 'sipbe');

/** MySQL database password */
define('DB_PASSWORD', 'sipbe');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<=u6>yJ(Z72;%7M*(iUBM3-Vv+fv7D]+>;?RKUuy=1NP9gC^{>>,j|6fHVeVS%?u');
define('SECURE_AUTH_KEY',  'CMg`,l&,T,:uS-2G,H 9UU?Hw8>8R0vlu]&P{cxoMEoZ6eElHi+ww2>:Tq3O2wX.');
define('LOGGED_IN_KEY',    'm68U jYOigD6J}7I+1uSae 5uWb(vr9bzvJ2~F.tOaF801tM @).Xf)]<RNEgOL0');
define('NONCE_KEY',        'xm8Z@Z8KKF2z/l4UgIKdmzW IIclz|Pi^<daT>F}Rb}6#.BRclnD+<CpE.wCoUQb');
define('AUTH_SALT',        '?Tp%pu^)ae(rcz6~{^XG@lnQ]QG3lUNN2(]mTR`@{UaO-;-%*^AT7D.8@pDzwpBF');
define('SECURE_AUTH_SALT', 'nwl6f8_!K,]l=:&}@yCDW4@ tY;y-E (w9T#DoP=Rf2#,4X f}4j)d%*S$PB8DBS');
define('LOGGED_IN_SALT',   'qWzVM>u6kyGQ%@17_8`J*3DU-f1+>b.`r:PE8o{pX#lq[Mq^EH]3%H=WqrKvY7>>');
define('NONCE_SALT',       ';zu0-{.3a[po:*@ ;0E?I*(|B|u+Az(`_-U-Y^Z^F%uFv=%m(xy@r3FOFP]%;WEs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
