<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CfQrUHFyG!ROV YAyNm;*rcdR[7Mua*$SA|0QVHz_a{cU1C2V,EQ!2SU@+*mJxfT' );
define( 'SECURE_AUTH_KEY',  'Tj4[{|^gL$TATn&^@b[=J2qFM%Po29N3CoWmpG2*<M laFo]00uvxrF9nXOet+Ee' );
define( 'LOGGED_IN_KEY',    ']OY~0a;wfTFZLnx).0=gRsLu1Y3_a><{M2vquh0-V{TECFwqPM!lJ%4!];u#N-!u' );
define( 'NONCE_KEY',        'aC*k/K7+@{MvVy%o&Iv9iU7Bd}F3GtU=fXH{09Er4Rt8nkO(LcmDqN]S]IO8U?Rr' );
define( 'AUTH_SALT',        '30rt!P*w4<fZ|e^DnZgLZ)3|#+.;/^OG{Ela6k)aR9t-__BGgX0?(souS#*.yhEx' );
define( 'SECURE_AUTH_SALT', 'cLCGaC-z9xR6=V)Wm=D6(&BlnOrk!fm/ea:(X[uG)-@e%vo]YA6P{=yzg;Do2Nvw' );
define( 'LOGGED_IN_SALT',   'I4s~2=E<FpN4bBjp9+Tbi[.sEO<ST0gMKrpha>r#v01U]7S,V$uT/a%ct;$S6gq>' );
define( 'NONCE_SALT',       'Ec$]>hjBRlL.]qzadP;gdi$[7Y[avOB!(@j*w2R=3U^9wc%f$H4!^sUz&OcfUJA#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
