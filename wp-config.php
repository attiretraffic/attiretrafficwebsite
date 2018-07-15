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
define('DB_NAME', 'attiretraffic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')/)+H~;{3)IjB7e~tc4uSp]SHm2?!cO^iV:,lfDW&GsTC|11{hFo O6rsdSKI*i{');
define('SECURE_AUTH_KEY',  'D9:aByQ`t`~d[Q?6rxo[E(5_ffrnb7=i@Zt|.K= yl,vyC77vaKjQK/ZE,:dSy8<');
define('LOGGED_IN_KEY',    'n|25N7B:v=[>XE@4[]mA5xr *Rka}lEW6ZoRTC/8A2e;SM%B:$&)&sa~_7[.wtSO');
define('NONCE_KEY',        'd:Jbm^+lQsEa6VWRVWt[aQGf_)bopFFNXs[`/I2C:t1M%_==w13e/u-4/,*LIT#t');
define('AUTH_SALT',        '>SMG:c5qK+:L SF|~SH){ZQ7{_Ht-)CWVTUzWds{1Uu_ZIH*oE36;NJr6?V%@Ci+');
define('SECURE_AUTH_SALT', '>|1w*WCE3By2w[8=t%_g4wU]&+3SH4mh, Z6rU+0,)KA5{AZnuR^H0e=M+uH$-*{');
define('LOGGED_IN_SALT',   '6C0dA</pixgQwCPxdW,Sy_=S@f+aEQ|P<fbwD%ZJsT~4h]M2`&u3W .(42B3LH-h');
define('NONCE_SALT',       'K[WfD??ie/DzG[8jg=zML9Lmrg| QU,@T`6/4N:=GH9P.=LrFVDbG iS=A[Ue8R.');

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
