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
define('DB_NAME', 'manifestwebsite');

/** MySQL database username */
define('DB_USER', 'mf1123');

/** MySQL database password */
define('DB_PASSWORD', 'EjZMTAsYFXwVLAm9');

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
define('AUTH_KEY',         '/v-urwQ-9!NL|OOjOGz9)#1-%?*(U(R@*h?eh+p-+${0.7J:0zDyc,2gA,Lv!K_w');
define('SECURE_AUTH_KEY',  ':~M{nYhZ)t9q[0B?F@Re2Oo!lj(_CEtlk)Tk@Jn+iw+)$nB.ty0ng-]$ePW|)~Bn');
define('LOGGED_IN_KEY',    'Lm&1nX5p6u+YMJm(&kH>e)24cV][Uw8+e-(08uwCMt={B,/T>NLDkI_Z^m@c<~+g');
define('NONCE_KEY',        'dy9w5&@CSf+(!3m}v7+Z|Zxe}-j7HI9?E[-!C,`.AJ;17-Kw%|T<LlSdiBU^6QKV');
define('AUTH_SALT',        'S$-*S|3e_H#ZBZ:qz1bClRaFi/w^m#XT>B]]wI3c*]:H+69hQJ99<jga<|h0p24]');
define('SECURE_AUTH_SALT', '~uw8WoL+F{8:DoznIjt-TN9U<BZq|U+n|Q28S@gEA*d8$oi&=DeG5o+1|W8A$-15');
define('LOGGED_IN_SALT',   'rmwN95!1sz`k0 8C0#$`-3DCuYRg}[Ox17E3@Fm.#sQzyUF{LqbUUZfpV3RG4-@L');
define('NONCE_SALT',       'BKFP?dteWd(3jW<Y[+~G-/rS]J-#VR6@T>( K~{WYO[NTZx?w]Z,,bZ&i`*Yn!i(');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mf_';

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
