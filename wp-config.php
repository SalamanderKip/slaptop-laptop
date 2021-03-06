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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xvwolkne_ecommerce' );


/** MySQL database username */
define( 'DB_USER', 'xvwolkne_ecommerce' );


/** MySQL database password */
define( 'DB_PASSWORD', 'Admin123!' );


/** MySQL hostname */
define( 'DB_HOST', 'localhost' );


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*LI_wP$=pV(LIGj2JZ1;Kl0&~>0+<Jd790SOpR@duqYurF3c$*KkpO>3BHp8UrMh' );

define( 'SECURE_AUTH_KEY',  'sN(EJwW3bZpRjpWkEld!HGo=8!KYt~3ef>GnvnLC*vo)NCT[h(V96?T[$_(1x,>P' );

define( 'LOGGED_IN_KEY',    'u/~(!U0!Ih/.(/[I.+h|lj 0_8HN:w{5N:yn70r-a/>Y!O*~e?d _|Ptbb>G)]}0' );

define( 'NONCE_KEY',        'z_M}5 |IN[N4*v;nooe&9Jt#W@a2pBQxZ3+(t&aXGg+;o4h<dEYCj=^ tv#1RSC7' );

define( 'AUTH_SALT',        ';%fb%ty_^3oeQ7Ds|J1%,-{6M@4hjH-/Qlh9y({u~9_k`(|Z&#u7h`f4~59TPD}a' );

define( 'SECURE_AUTH_SALT', 'I~17#%_LV{-*$O+>*=@tMb9p RB:oEhl<w8(o;D[TqBP@vmT4et_bX+FdJl7s[=s' );

define( 'LOGGED_IN_SALT',   ']v 6^e(^0[yHT 4FSKN` ?ood?viHK%YE~WAqKGk5}u]GlG{>mA`N+^e1UQo^/O5' );

define( 'NONCE_SALT',       'XVM(<E^zyc){ULd}rq@>V(5d}6K lI?]WD=A7CCsWzRUK.zoqL[CN($p~aL6ePmf' );


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
