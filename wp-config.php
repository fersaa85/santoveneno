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
define('DB_NAME', 'santoveneno');

/** MySQL database username */
define('DB_USER', 'santoveneno');

/** MySQL database password */
define('DB_PASSWORD', 'Qwerty123#');

/** MySQL hostname */
define('DB_HOST', 'santoveneno.db.11363257.hostedresource.com');

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
define('AUTH_KEY',         'G_9@Rl[iR:ZD`+1+y1|PSFhh%esA)8Fs#uA_fS_9{CQU(q;r81f#,r IS+SP0#[K');
define('SECURE_AUTH_KEY',  '6x}r;R2}VU[VAw~lNCRnaG~vZJxHU?8^X5RUs@;cL?:*|!<@4tl(qj3WqX||j^bk');
define('LOGGED_IN_KEY',    'Nt`Y%9VC,s7hjK_sM#T7L>ASz2nsz-ko{i1x_uTG-4_U#jvvAWTmxyvbb(I*{)]_');
define('NONCE_KEY',        'n2?5=xm#wX!]|JcuLXf`+F)m`&dXP7%*YE+K|MFu,{_c!LWCqh9occH%9;Q[M|v*');
define('AUTH_SALT',        '8gzTxXYZjOrdixC*Lz5|zC },zgAH(hR)zdwnuz9I<&(tZjaK1LIJmh,,{oL>lNx');
define('SECURE_AUTH_SALT', 'E6iR%BF.L_ut.KCWW[&HK1irAA=oAKx[Bt$fLx93crKTp]i~) >3Mnic&$%i%kgR');
define('LOGGED_IN_SALT',   'PJ3tOMjFap::)C89)<DPRLxg@k1&]4p;Tp!i1nD5$$g(q-z8u,0lH7@IpKq=erSA');
define('NONCE_SALT',       '[&zO|&t=JZ;R~^.D`cyJ>63i]r}rx%.`jD0U7s/a-~v~!Yqkt4<96 NQMq)L>VDO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'swp_';

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
