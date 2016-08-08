<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'actsmexico');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost:8889');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'A<]AIIT8;)gM2 mN3h0s^A$n&Shwp<VzJL3<~n`SBfgNn$EuM!8tp=vAMc4u(xgP');
define('SECURE_AUTH_KEY', 'q5@HzxI8!={:PVL&BOwn$g`@[_A#O#Lr]?X}~_):Y9N_g7x..E_{@%HDs;o&]~Al');
define('LOGGED_IN_KEY', 'gMtTk[OYVH?O.5 kAvK@6.~tte^KWy|DQ^=epo3tNb7;I$O89DJt5<d]*C<ln{`l');
define('NONCE_KEY', '}$S(,/U}c?uJ7WI1J0v^V eA>Jnd}3Xm]AKy/68^vY:lMj:[tTC/rsXcS:fb,[lT');
define('AUTH_SALT', 'yeg3ztrZ9X!@Up|Ds6%-u|X;--q)Z.kpEr}?oB!K%3$%^o|:Q}_7gH-yOPrpMi-G');
define('SECURE_AUTH_SALT', 'h%]N8k.R^e%+Yxrbgk8K5o-;9XSWl@IC:tgqKs(SA O|NRvb#;mqW(i`%{^k&F01');
define('LOGGED_IN_SALT', '7$=Kg=HJYG8Fk>GLc-S)8cwXa{*5PYXB=c4X#iF&def=z#2dE3~buTE?/W<VY<(Z');
define('NONCE_SALT', '#3o/T`zoqd-%LS]e[`2X<koa}E2|)j/H>_0_GbaZ4I;5M%>Q]gaPCvzXLgS|DW@d');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

