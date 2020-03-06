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
define('DB_NAME', 'wpstarter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          '$l5HS@t$AsaNm/.jk3p9<WK*4cNByyOd2`ccs/1MDd)pFQVk%mS%89H5&|Buki]1');
define('SECURE_AUTH_KEY',   ' U<V&(!+Jg/uw92E?Z[;i;kLSC?@O]`oCFaw<I!^1AANJE@3xigk~Y9HCOB,MdS ');
define('LOGGED_IN_KEY',     'pT|9dqbs>>zRWtEt(RovL.=Lmdd:(;aM9Iz_.ug+n/Z47?36Y_F2$>O&ef)!b86j');
define('NONCE_KEY',         'l)o@Qyz/x*_Uf5]02^[[w++bm]0F1:0>b&L$&>DVlU6PK_EE|QfiN-bYS&u%b Yr');
define('AUTH_SALT',         '8(~<6eQ{T0khdtOQ_ucuXOra%oc ;[6($p|v$+|>Hxc0OF//]e|yoW)UcXUC+xB=');
define('SECURE_AUTH_SALT',  '[CG%q^&:Wj@kNl8/HS[Y/=Cfm-l3(Pj{KZu26REExWf&>/t6wB6{t1~Y51@{m`[p');
define('LOGGED_IN_SALT',    'dt&!<](^:l#*!g<F{0I]EG;]G[ !{`E.?ZO;8IC?qI}NW-ml~%IKcG)_/${FS3V>');
define('NONCE_SALT',        'q)Z54w4VDLXI(M<M9GL85^Lg)Au18*+K5|Wb[+tAPT[oY&2y{$+ZcMa$6`U?h#,]');
define('WP_CACHE_KEY_SALT', '@vbo}|rJh{M__L%0TNF;>Ng/M!8Q?PL0!m7j]AIvUBv!K<^76Y{8)C<cX;(fkTxO');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
