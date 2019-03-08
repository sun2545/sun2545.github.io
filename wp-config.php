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
define('DB_NAME', 'first');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:10000');

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
define('AUTH_KEY',         '}0~CF7k}Bd.k)*xdbdB>QL{OBVRu`9nO[vR`59!+8:SH!:ij!DjvW4*v)C(#2<?%');
define('SECURE_AUTH_KEY',  '}0=Sf9Nr0-#9e9i<G7>#c)@QGE3g|F6vk2_tKE=fPIl2+0ea_ju^BVZJ`}*fMIqw');
define('LOGGED_IN_KEY',    'O5H2iT)mcA3GnsRN$QM$5fP+tb7ML0joNVkrT8&N;L}VY&)ch.@(rTEq[wO`9e,P');
define('NONCE_KEY',        '6$/]{a-LaY=crO10vjcNwYos^N$JVKar3n=T6hR4qt-aw;NaNFQz(0twJIXU~*GT');
define('AUTH_SALT',        '#@k0D4.()An@OX)P3>7.,g6ByL&6!k=@<tJ d!BycG.BQ!5qi`0] KRu@X9,s;;k');
define('SECURE_AUTH_SALT', '6w{s=?xx r?[Nj+3tR|p0mQNCqs/~yr`Oa8%(xXY(3_fR842}5qrDjg&T2Ujsyk]');
define('LOGGED_IN_SALT',   ',&l*8fM/`nwM`ieq!/NS95Hn/Ol9FU2YsUoPc-q<9Pt,Jq7y}EFqJCM s_2|#.,W');
define('NONCE_SALT',       'keV,9!wt,|linK&fU7z7r9^zfYvl/.qX70(cx&|30:=Jh/*1p&}zql;9UeCkxx-5');

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
