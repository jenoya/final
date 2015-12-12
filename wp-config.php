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
define('DB_NAME', 'finalstock');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Ac8<6Ff?sk.+ws  OrCt:#MZlU]}[pKsw6g~:Kyq{bs-.B{r4ryb|{G.HiyI!$nL');
define('SECURE_AUTH_KEY',  'YTm3bR}i W5fe*U}%u|4x5bGL`ZM2N|/dt+cT8rr.xg5?CMv=SPlKSNwWqT=.%-V');
define('LOGGED_IN_KEY',    'urQB$pS*>D71{E*[u7Q^N-J-y2<0H>T_ID`?>!rWp:)HK}U2<K^4X;}N;C`%KC`m');
define('NONCE_KEY',        'a${;8OMf#skcz73aIm_EN[04rUehS[qw!Jpygbz+J.,K0dcfTnM<-_&cdmAU[9$Y');
define('AUTH_SALT',        'pZjJnUuL=Vq*aZ~yvxwi!T[vfx0Tyl:KhZ@6&A2u7zdA~|#kszb-)c8wL&jo;:&#');
define('SECURE_AUTH_SALT', 'UqWfF3E)u1(NpwssY!`esSSipiy^79v[5zzWOlz2;V 1>%F0gb*^-!IA^a*P7 2@');
define('LOGGED_IN_SALT',   'OW[)!NyH1x5K3TFlk08k^sr>@9z%Sa^=06O/]Sg)5~8Skppvaq(w}@L[b?2T-=9V');
define('NONCE_SALT',       '7-|bkRq muak`0It -B[-N|NF/|H*)=F?7+c^q<yW`eS}qA@NF]`hku|EYs2aijn');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
