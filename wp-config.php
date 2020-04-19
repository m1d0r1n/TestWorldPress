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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'F+}Fj=Fa`eS}yYBp&cUrPb73~w(c8@ESlw^x7w;W7y9lgW6t]a7yp jq~!IZ/voM' );
define( 'SECURE_AUTH_KEY',  '9LmwpOhjd0%khy)ZKd_0dl&xyHZxC/UWT|r::JEd`l#Q`dE7hKnf2]Mrza<3=I.s' );
define( 'LOGGED_IN_KEY',    '/!tp91z<.hunEMsEaaNWzN~it3Z54H&P7%S;Tk(so0P<.c[>>p}#I0H!+Z|v4iX1' );
define( 'NONCE_KEY',        'T}toSor7H[9FGeWp=p5ZaX_4vdN>X?J#gtvjfcJKGmQHA9=S~],p[z;D]T!SKB/z' );
define( 'AUTH_SALT',        'wo&}<L:q:O)Sw+(5RU>G/<cWUc,TyGo<y{NSCZrpN7+6 oT$;3=Bb~a@ZQ2$qlya' );
define( 'SECURE_AUTH_SALT', 'I8C@XLbBwL]560MHq(YjG2yW$dTqT?iyH|$(4qvM9ZX`.<UZG_PzH4Rw!#P477Em' );
define( 'LOGGED_IN_SALT',   'eERh;iJBmcm[)$|7v^or./I-&*k(!V~M5.P_0OYb6U;XI.^#R5GL*da=%wl_U1S0' );
define( 'NONCE_SALT',       '1Z_9`cNdu%WbsTHcmMMO@;&uy0{H*51zam><@#%C|n+v~<5A<{,%>Z&0g<=t_Z1I' );

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
