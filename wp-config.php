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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '`D#M:xtE_0.8A`F6wpL`-rO=/H<P5xtZJ|*Bl7%+Dp#^j]cid{<Wfw38T{B-1Nx1' );
define( 'SECURE_AUTH_KEY',  'Tg$9HppmnN= .pt%#n-,x`eWw:3Sz^bt<v}c^@s4xxeMo<1QiJxRz4Yz/Z$K~>-C' );
define( 'LOGGED_IN_KEY',    'iR;Nt#Dm6(J>UA[07/:gA^jYD1_t:r^<5k?OxdE(Q~7el:-63Y}[/MeId);_W6<V' );
define( 'NONCE_KEY',        '^#glvtYM+R9o,hXB ^4@51S;A|HoH*`m4LI4GvB8Z<vlJ_ei,]@FmQAdm`HR2vAf' );
define( 'AUTH_SALT',        'BShm|d#2j$k*W.%+46f,i2q^x95/-z3?ky;TGBmRHKlU}/v2<)+jx9Hj@2c=Z{:L' );
define( 'SECURE_AUTH_SALT', 'n*Ph$!L7oAS6])pOb^RjJGc5|t(@q7+w;Q_-^3Zy]Iva7Z;+O_8qLg%w;NMP|?RY' );
define( 'LOGGED_IN_SALT',   '3YLI[;H`Alpu3[$_Eq]SO(g(9JuFIp5wQ~R7sN5sZH )xwQzg:-yXYOh|5]?I^hC' );
define( 'NONCE_SALT',       '7O&}wR87aE0>jZDKVQ1ZPR^FtD1;N?mJIM}Y7:1or.oRo#?au@;HK|@FJ-Y%ko3{' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
