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
define('DB_NAME', 'smartcap');

/** MySQL database username */
define('DB_USER', 'smartcap');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'gpFM)i${RmZEtf8dfRg.^myz.[#@G_~leDOcwnv*vFLXlJ(7E SjQ@avRuR]vuwM');
define('SECURE_AUTH_KEY',  '$hKmD:dVH_A%>zm@Q zP5em2Z5$fIe~Z%o~LM=`eX)mQ$H,m]?W`Lrv`%z[:qzUO');
define('LOGGED_IN_KEY',    '43(+nk::CH`ov+)a6?KZ@o&<9cEQha@j:y=a>#AV{b]|$Akk0x .fi_:7^e ?XNN');
define('NONCE_KEY',        '7;BX)L-RJ7@0w1h?yxLj7>eOy6zww^(RQlTqO! )zfY_b(<gS$)RDiph}Xr/u+G!');
define('AUTH_SALT',        'z|kC2HwDW.h$&l*v{64*osLqPAkBdXLR)$x_Mdf,.4hWu{L{KWJMsF;9i- G^vG_');
define('SECURE_AUTH_SALT', 'B:+)D&}U5gLF8}LF]!T_tI^%KEJk*$cdfiTmr&,tC$7vQUg`u,cCA^u=@aMfCbEy');
define('LOGGED_IN_SALT',   'wdk,s;x~+w/%%^JU3Z6GPU]i>$K^A+p,o)M==-AW8$6)m4@ZL!@m75Ym.cc[!T)1');
define('NONCE_SALT',       'h|W>yQP/(YJJ&Qrerv&sJi0~ >CIYSmq8gM`3AD8=bs9K~QS[9v<1Z{2VC^eVgWm');

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
