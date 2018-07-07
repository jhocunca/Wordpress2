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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'nextu');

/** MySQL database password */
define('DB_PASSWORD', 'Carvajal2019');

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
define('AUTH_KEY',         'g`WW)[F3^tcpb&Ov)Fu|GP|Tvn.e0@ookm(BM0)f+RJo>0>m^gbn~BL88SW B_*8');
define('SECURE_AUTH_KEY',  '+y1{R.b7R]UFQ4]Ps5co&B{%|}<XcdJ+o)D9ZS#<AN#?8dQ.:,{GDiVIbrr2s*`X');
define('LOGGED_IN_KEY',    '<<@XtfjpxI.swLNbXbB]?M9J56=cha3*cj?02~@Ns|yjWgl}bL.ViXu_n*M2_,J9');
define('NONCE_KEY',        'Fl8z2(bbZ^Gs_X+KS_vC`OA~-5P8Ue=pp]c1oKCjs?_&c;&s=txNj:)?`}L;bbi4');
define('AUTH_SALT',        'r4655Tv}Jiv2L@y2% i8T6u4mYjQrj_a86h;M_m9L6lRgg8Ge;&fM.#N #fjd3lw');
define('SECURE_AUTH_SALT', '5=*#eNsJ]=@UYRotSb9r5_NVF!Ng&/*lMq.UoqjN!twLOVH73H#S<e*<H]s9vx7|');
define('LOGGED_IN_SALT',   ':$-FhQUm8<$cDop!.UY,L_r*eyb[#/yno/6cjVw5ZNHT@,.$[!G7}[6=V}lLvs-9');
define('NONCE_SALT',       ':1LkLJa gvPEFwkR_HHaKEFZ/d!$wEKnfAnsc;PXU]j(Iqq0;DjJ^1y]<eNH*VW:');

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
