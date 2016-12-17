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
define('DB_NAME', 'a5742298_db');

/** MySQL database username */
define('DB_USER', 'a5742298_admin');

/** MySQL database password */
define('DB_PASSWORD', 'viewshare123');

/** MySQL hostname */
define('DB_HOST', 'mysql6.000webhost.com');

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
define('AUTH_KEY',         '!EG(v7:K=urG ##$xL)dm*wQF5%Q^%iPQNaR/idIRy+t{AKg-l2<-k9?t71L+<Md');
define('SECURE_AUTH_KEY',  '[#flN,HHgyQoX@|0Ya O6D,NYK KWY={;e/SyR[(d+ &3;{sYX5lckBoyXGk|A$M');
define('LOGGED_IN_KEY',    'Qo<:@+f&SiksoQ!q&r~xiD&jRz5&h4j+VsM/j`G|FXKpqa+3e?qQ+dd%|?PTicBe');
define('NONCE_KEY',        'WMg6.O^MFA#n&}XJTVB>8 ;X&9zplz^#tJPmN`l+m>`|M)-yG-ghKOPbFB6/RTNZ');
define('AUTH_SALT',        'ur#8:Dt,ylkQz^ZvLb<7-A~kf(}9=eSq6+5}R!/IZ`7$<6^,)tppFT%b}]N0b`{i');
define('SECURE_AUTH_SALT', '+0.!OR{2-~I-aB)pE(Xo.{LRO>Ni$nKl-m;SH:iKfzO`5+TlqKpa4;jKR1B|+q:_');
define('LOGGED_IN_SALT',   '3R$#F3*Yp6zQ|juGQS+:T7<ro{5=AJi _,]$C|lR.OZshX>WojtQR9|Ap+#YZ&x;');
define('NONCE_SALT',       '#uh8#&JdE|X17]&|W-a(n|qr4a8}_}FCzh_!Mr]a*[.U~(Aj}@y5_3M$nXxHnck*');

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
