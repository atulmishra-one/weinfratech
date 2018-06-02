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
define('DB_NAME', 'weinfratech');

/** MySQL database username */
define('DB_USER', 'i3670540_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'weinfratech123');

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
define('AUTH_KEY',         'cmwro=n}K}r.OU,Zl}^9oPfUIy2R?9C<9.*?}NJ?Ou>,jPEeo?[VkcC|R4?}d6(9');
define('SECURE_AUTH_KEY',  'O67~<2}|v3;$SR|Os,3Kg#2}FN#LTb?;TK#JZp~K=0|(-I=I.<Y:)$6`mH):T#,j');
define('LOGGED_IN_KEY',    '(IV=X^VU K~@Ej`i>goT7}4h=@YSVLc ~:+SN?Y62g%Bf]tFI]S{E]SsVZ;L]o_q');
define('NONCE_KEY',        'b( #!phb(?4bglK.T]{jAsI,P`&mp43{UP)cpI>2fqj3b|-J-6rHs<E)mi_j&/JC');
define('AUTH_SALT',        '>gSoo?Mq;Y=M@ =4!,sjs5gzC-iA&XKO|O)Ur)x@z]A*rW?s}lErHw7k?7GOb,k ');
define('SECURE_AUTH_SALT', 'L26^m_y=x@7#A8@ fD3!1&vU~F?TC4Ij2=86<nBkU[MCuAD4GQRf;?[n*NBF`;8s');
define('LOGGED_IN_SALT',   'U^U0P`+4DVPDXC;z^FgK|e3QZ`D1EG_LBORz#mLaC$E.q`]>fkng-Fr$feE~NFUT');
define('NONCE_SALT',       'Bib1Z[i~XDN+jcq7pWHo9x(ws0g<JBXK<l&}Ia;t`]i}zU<VF/ySGW@~Vpyy*lU.');

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
