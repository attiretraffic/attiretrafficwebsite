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
define('DB_NAME', 'attireTrafficDb');

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
define('AUTH_KEY',         'CvKc-zO-Y(WT@%;tA+Uh8Uy;XGC1bIFZoKl5{~Qx+M7ulGqa&Rb?Jo+qrMX?kM<{');
define('SECURE_AUTH_KEY',  'iV.~1J*,H}|ucH<8_>A9)Vpib91]9g9F9gS)R<=sqkd&|^G]B/p>!k4kD2M+ge|Z');
define('LOGGED_IN_KEY',    '=tb54tvA}>pg9s|+bVY6Tg]C.&JJ,ZE3DA$e_OtM)pM$QOt%?Z@k<0Exgwoiih3c');
define('NONCE_KEY',        ')8*bW6G`L&BraPOUFS?=1^6EChH4[ c/1+*j{jh$0YJ=G7B[m1hw:YfiG_?(qSFR');
define('AUTH_SALT',        '+sj>8)>[j< 3.s!VW!8]wC(/~4PQyovxK/$!AK4f[rmv21h1u`Ia~Q<u&[3:1+3-');
define('SECURE_AUTH_SALT', 'tb,rWsr7tEK4gFF_o3ln%RGK40?Q6W;{ac#^i%Che2D9;AzRad%=i[Og[l8[>xiq');
define('LOGGED_IN_SALT',   '*@@CiGtt8jt4Pn>a<`m q!IhoBd$}GQdQ3 mJu[4m^fZ`SK?Tv{lz.ZeW*a^&46Q');
define('NONCE_SALT',       '*<*lYIkX`|sK^JT0UpDxT5{|$svZmp nssW+wV Ag7~Zt.R9$%LtQ9t!Sy.VTtPr');

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
