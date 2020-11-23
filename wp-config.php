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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uQv+jES42SwdCoUZnsoavg5YnbTxWDn3kx/e1Dg0HRwlnVo2Ga5nFp/ZTsfg5B97FZC+Pnpd7iymXElD1akMFw==');
define('SECURE_AUTH_KEY',  'rV0kp/48y+7JDo8MZMaH1KtxlTMRJpzdKguD92tlm64dao6KIRbXTU5S9JnIB6iV+BuRf6rh1/7A6V3vAh7sTg==');
define('LOGGED_IN_KEY',    'rQx88Fb7ncFVmphZC2fZM7Ow9LiljxzguTa+rJGtVAXJ/o5526FLeX8aNqQHkG3XBM0Z/yM/UsMmUqRPZzSXtw==');
define('NONCE_KEY',        '7ugrC1SKOYxly3MnM/4NGIQrlCv78wmc4FPOCPMUnsjciHG48qqyBbOMZURDjhpxooXkfGH3ZVjI6uQCPD9vCA==');
define('AUTH_SALT',        'VxIVharsK3/juILvEiGiy4Wpbww5O8WzVRTcphzJG8N7U7MBWbFIsog1qSeWc5FDEeZQZ7B1HvomTPX8F5LnmA==');
define('SECURE_AUTH_SALT', 'kPJDoCAWo3UjMEWxhSFTuORpJuoAmWLkwOEk0IIJicwLy23n5kqAft/rxv+Vckks7Toh2Q6r7oE3f2QXKPsloA==');
define('LOGGED_IN_SALT',   'ftrApjhaMUsGWJwROk2cZZAaosIXVJKnzPT3My8DGM3AdAp7xoHpMIPIGvIcpSeNUHPlWh74cF107LWt+U4bFw==');
define('NONCE_SALT',       'euNyxXD4yQiNKXNzMrbl10nZa4rBfn/VbOI/QeQQntxAKApd2hBngqaqITJ2p6UMX09Ao2QK/h7DG2JV2ZTtQA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
