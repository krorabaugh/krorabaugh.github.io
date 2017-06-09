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
define('DB_NAME', 'wordpress_kmr');

/** MySQL database username */
define('DB_USER', 'wordpress_kmr');

/** MySQL database password */
define('DB_PASSWORD', '210kmr');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         's)_ydnG(uRZ&+{3Z[5a2_$}Is,qhc{,+nH]-fICu*K=/-831) n=!|8v2M))d@%i');
define('SECURE_AUTH_KEY',  'u_A1/|u{J*sy#TaAZ|.[&fc8?Op3+;*}{FqkdxQ>s3=!H- j1bxgKbXw55,n6&`D');
define('LOGGED_IN_KEY',    '=HE6Xf2%ut-E&b@Q%+)He*1&C-bl#`xT-POdH)VDL[HUMzjflS}OeA|~rTuH|!`u');
define('NONCE_KEY',        'Osj`<uZ>|LJJ4qSJ1n*koh48XNu7-~rOG.#t.Xd+cQ-*(Q/Y_[m$q9TM;}|2Pn+8');
define('AUTH_SALT',        '.h+7K)pN%H1z[bY=|2Fb)E]uGchhVI{j.+|FOjZ>`DVB>%f2c--f#}-Rb`Ap<5~t');
define('SECURE_AUTH_SALT', 'kVv`@Eb@~%{`p*lbRC0!KxLcD$cKK_19/cN4-Dn;b7A3wKuQ;@Cc~%ka.vsW^|:S');
define('LOGGED_IN_SALT',   '|g+PoS2Ghiy!&|7%p|AcN=D=HA!9Ceb7SkF_D9hl_n@*C0|joPBf6J}=kI.Bm})C');
define('NONCE_SALT',       'gnM,qk#.A|<kVwcpe?^>Aiz0r3(5H+wl+aT Z4<2)-+-~J-w<P;N*.NmC@yS# eQ');

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
