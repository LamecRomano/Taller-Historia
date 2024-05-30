<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Wk=T-S@RH#IpVe_=}$o~H0u_.b@{8Q{1h?8_~T;>bAT@0G/8).g4]N ok^NCN]h=' );
define( 'SECURE_AUTH_KEY',   'w0yEyJ~.I%Tk|!+hJN}R-~urGc|#g)m~VAl!?=<WiW2S$B(}_/qxR{(D;PEUwhQ1' );
define( 'LOGGED_IN_KEY',     '2}z1U9j?5FaZ{1YPQae>ii9[~~=a6TVsV};HgIPHwFMP$O$g=DU]932Q:_W9vsDy' );
define( 'NONCE_KEY',         'Q(!AMe=mle!BEvt#p[Eyy4w|HKwy1x42q1^Hr82#_%Ie^)FFrVp[OKI2`/@pM9lF' );
define( 'AUTH_SALT',         'Rb<vX5FIW2<}-R-7p+/d@w=N i6TdRG*|9VDd!Ay?{u=Az9HS;/mBF3Equvc&MA/' );
define( 'SECURE_AUTH_SALT',  'eTN;N53O`>|Fh4FPiSsP&43X{(3q{boRL%&Z^IqPjbXY5yJAgh:>dJyUpr]j-ht5' );
define( 'LOGGED_IN_SALT',    ']sG~Kv}s&0EGG4TQaV^z*Jga6XM1mKX>gig3ce.%2IA jSM696R8`i_Q3)2fTBpS' );
define( 'NONCE_SALT',        'A~g[,]7O=7BWIgO{<kb1Nef#(1<3.}jeG-<V%.47R-7T)Gawa:`I>lc@ >iFuoHX' );
define( 'WP_CACHE_KEY_SALT', 'W:h{ nlm4p>xyVt3MTVoz~ok>)~|wut%ma7UIcZtFW1,,:bo)Pu.$,OL:]Y5)#=h' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
