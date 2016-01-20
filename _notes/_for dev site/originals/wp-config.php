<?php
//The entry below were created by iThemes Security to disable the file editor
define( 'DISALLOW_FILE_EDIT', true );

//Do not delete these. Doing so WILL break your site.
define( 'WP_CONTENT_URL', 'http://localhost/Commodore-new/site-content' );
define( 'WP_CONTENT_DIR', '/Users/PacWeb/htdocs/Commodore-new/site-content' );

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'commodore_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'KuLF0xR2p.Q|#5=&6f+>jj*p;^KL$m&QNudWR*ggn,u:[du8)P)5?U|p_fV9vg6`');
define('SECURE_AUTH_KEY',  ']SG.[Y/8$K|sB9=tq=+fiA:`XSBESTF&CkI5`r/!YX{Ls$_0&7n`LAdc1a&VJ.Pa');
define('LOGGED_IN_KEY',    '$5Vo(a[Ke[( fL5-jpvBQt.l[=3_LFyStyd}pw:hGr^[-W9.+.OSE+qk5Xs->0u!');
define('NONCE_KEY',        'iZ|l@aDY-p-6hI$7OS-^u+LtJz!SHhYFe&~5r31ST-W6&}EUqj-H06TPRk}i>iuY');
define('AUTH_SALT',        'Ewzvr1EqF^kUEbQd:a]p:v|y  5g@j!`Xb%nYR=,&tG5Tx-.9uVy+9?fIIsxwgLX');
define('SECURE_AUTH_SALT', 'C3Hs5p#le1rEyird,z!Axx]5@_lHHsxI7Q5Nlp9ii#Cnjfb}Oru1i1xUl[liM+TF');
define('LOGGED_IN_SALT',   '(aM_nCaE^Cj64/2|+yx`F=,[55qwM1v8Ih]%Rfd7m]KH_:SP&-]Pp9fo`SBcq+i@');
define('NONCE_SALT',       'u0@Fz5],-T)-  F0qhfL~zQNT/%Rn!bkfY)hQ9Q|>OFhX(lS(3iB}I~CW`eo.C/=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'comm_new_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
