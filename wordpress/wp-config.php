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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ad_learn' );

/** Database username */
define( 'DB_USER', 'ad_learn' );

/** Database password */
define( 'DB_PASSWORD', 'ad_learn' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '(ScuMG;/n`|*P)(NHhK9.~!?n|{,N^uaS9oL>B /jQre,1pJ[`frl(p/68/FNJ{_' );
define( 'SECURE_AUTH_KEY',  'gyLX3eAHLLo7KskKee-Bvr3+_vC%b9}?nI3Cp~.lwwt@m2ihNz*9+TmMXo]XI2p/' );
define( 'LOGGED_IN_KEY',    '^(7xV4]PM &,{*pS_+Vu/*T2 M[$F|*@ehjTVi[:R*4ZX3n<jS@t[&S1[c?ZbHPm' );
define( 'NONCE_KEY',        'w4v pT]-31|XL-0]ONaNxg.IcDD5@RoD%h03V5BKetp6Nt;w<ew&>|USWn|7/8.3' );
define( 'AUTH_SALT',        '|bt3P+D^:o+rm2OPsgj/A-ihaXl6j ^fuaFu@{.fqcf#>vtZ YiOqYp5uTG`2;h*' );
define( 'SECURE_AUTH_SALT', '22!5SU`wT@)AF1F}2EU6[1>nlD`>[wMwu_K@a<uPDZZ7f.~k&LL4/E|vyo1/oS#=' );
define( 'LOGGED_IN_SALT',   'C5$q5F?0Hx.XyZ|QNfl!?b, %8rq%=lkku[?2^[`2*YyT~ 9@(//Ypx>J|gY~S(U' );
define( 'NONCE_SALT',       'KxSB)~P{z[Y$NZvl&[p{t<z0HmQZ*Xu4g!=c-31^Lyn&lX?n#/g8&(881wCZ~Piy' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
