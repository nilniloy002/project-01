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
define('DB_NAME', 'project');

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
define('AUTH_KEY',         '=>h~8ItTvrb)VZCIxfc}q,nG+P5JiAN!!xpj$^bonKm-gd{7*VB8?*|3yh%X;{9J');
define('SECURE_AUTH_KEY',  'Xzx.><_/1BCetQhB+d3Di.5n9*38i_EhgSh2-kdUET-^/7UPOYQ*%+EQR?ER9dzs');
define('LOGGED_IN_KEY',    'P9~>.hX6a1a-u(K:Yk*;*RX+n*W+^nS4DH}#=,z~Y&OEaV+Oa%d?OX.4y XS;uhz');
define('NONCE_KEY',        'A|czJO=VTKox-R+=RROwLMjM<UYn,?yK,P<666g9bP~@0;9Ps/UxkAh5V`W V6Y^');
define('AUTH_SALT',        ',{0LbV7n~@5U=5]0M9>^$Hy5|N2/=ggG^ac8B`.`x}%ix-MPlMe34}8gIdzxbR}9');
define('SECURE_AUTH_SALT', 'LpN#zKWN4yz*!s2dRqIbO9I| Lb)>zZ? N+Xm[ _<13UA>}jB,O&/(dPqe-k*Y-^');
define('LOGGED_IN_SALT',   'k]t-`zOgQbq,0+^]|)l(T;#G^3F.SyDgtBo_aU:7HmUzgcH)(Prd=G4rEUeMuv2-');
define('NONCE_SALT',       '+s0{vo$g+wYD1ez|Wx&|EMBw<>Q~:eV_6t2QIAYa2EUd-V_(R[-0-.hsYU)1=!~*');

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
