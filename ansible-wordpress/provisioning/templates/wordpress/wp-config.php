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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bananas');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ' XYOV#uX8QQHya{@1peRY:^IbHHQ1F+*(_qqEUO.J=a$j/T,S+U,u:-VR?/ikj5N');
define('SECURE_AUTH_KEY',  '&*sb`[kiM|5]TjF.%d2:6eUJ4uS5RqE>}C~+UHF~3L%3vqb&<Vsv~bb*AH|QC7JM');
define('LOGGED_IN_KEY',    'Zfh+R@RQAimw1BofjI^x6H..0=-ZJHXr EO+85:lja(7#nDcyJjH*p734a;q_SB!');
define('NONCE_KEY',        'n!J7)N=nCeX++R#[Q.Rufe)If&WpzuT$i/0D_3~jp{nD0hs@`aefmE57OlfdF;]+');
define('AUTH_SALT',        'gl_@9WCz8eMXLm1}y=hP9&a:y[cG484hJsl#bi;ef+6aZh[OrtsL)@M3Ly<K1^L(');
define('SECURE_AUTH_SALT', 'CN5o3]&:Bs|G@CAG&&joitRZ%`S|I!y#VFic.f2Pp(E[Bi|/k^#(lG[3=[F8=/zQ');
define('LOGGED_IN_SALT',   'Qu;<E(5^+q|I?q@][@EQ!OfbY[&iV}!Z@NUJRpWGhoFW(|AN[P:Fw7y IuyQp@fO');
define('NONCE_SALT',       'o)8]lE&?iA%BCdy+:-L$[=B>eI%./Qh/ZJ;JeAUpF..`)Kv*[U>qYxY8EKu*Nv%4');

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

