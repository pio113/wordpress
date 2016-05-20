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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'zaq1@WSX');

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
define('AUTH_KEY',         '#m(Zmz5<U}qB_tM@]!49][kksqe4:Th2j:4XIwT&*{ILJQ)BS^@A eQ|5*|nyZ-I');
define('SECURE_AUTH_KEY',  '_dd&%EK5q+BF=u].>+|1n[l@)(/h;DFw&B?;*j0y?z,%I:Coi$zt}VyuzN?ZVJAu');
define('LOGGED_IN_KEY',    '}>$tu`N`8,Shu|SXbiL)gjWO3;jw]9`t>/+[Htl;p$+AI#aF#4-;bHu`|lHKP~=8');
define('NONCE_KEY',        'i.demtyM-*>2+$?vKDQxY|+zn3PX kn-Tr[m/OuG8b>|O*5n6TgS<sY-w:X*}x<)');
define('AUTH_SALT',        'rCZvqv#4W!0;9PhrecHx96e+=opfZP1;#|t35gqOwnM+bzX6bE-rX9ERj+ d(9 <');
define('SECURE_AUTH_SALT', 'dy[Ji-$-W{e+g|L9{(Ke9TdM)9cAUEc+D3=E2&u2e#@BS1HpVD-wCY8NkhXwpJ*u');
define('LOGGED_IN_SALT',   '[3=tBFCF{7,7$>D0qOq^;L-}E=wv}b9!W}1Vb +$e!Pa-@^6]n0#TW+ Z~$jT@2x');
define('NONCE_SALT',       'q g4pLb9g9H^SpD: Ua<T@sTem(|S7VJdPRU9q^] hG2-KtBCM=l++~=0/j^A])k');

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
