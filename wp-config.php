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
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'J$5qa8WiJu13MFTbA`z``H7]T&!nF0~c&x}PGBR>,lkb tQ-qL??Hgu|hiR:@6Rj' );
define( 'SECURE_AUTH_KEY',  'thzd~`V!Wu!{;8VcKdbtH;;x_:.C[O!A~RAKjs5MAhcLveU,YFqXU,*3WQGVEW/s' );
define( 'LOGGED_IN_KEY',    'WVKR8MC,jk0(6)vS4y)sJ{{`bF.tHcZUBJ{1O>ugmRdrNZ-m89,S-lKmd}Hsh.V_' );
define( 'NONCE_KEY',        'M5;|]](0X?:#^?}GF_|>360s/O)fr-|OH:<Tbw7$n|]^Y;`p?L6KkppzX?kX?$!<' );
define( 'AUTH_SALT',        'ca$||@k/eB!gV>0#V/QU{{>mRfv^*Jt;rl&57 ,$-4.UgKK%{!FKwC6}RzVEmGRo' );
define( 'SECURE_AUTH_SALT', '%BNyjHlbC)@QLAL,iHw3,8PukMO=b^A)ZYu;5C2^4gW#msLE?;3pmWT/z(=ddSm@' );
define( 'LOGGED_IN_SALT',   'm5S{{|E)$-__`YfAAS{Ia0*An) EYB;?{wTn%LlR2NTH.K+^Wfg*=$>H4#+hFW-`' );
define( 'NONCE_SALT',       'JcWfX9r]YKpv[2q/_$2);/h_%mP4$P~ie7d5CttF0s:8 Pq>0+5qduXAEl;P,KFW' );

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
 define( 'WP_MEMORY_LIMIT', '256M' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
