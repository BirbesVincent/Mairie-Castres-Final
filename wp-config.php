<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
//define('WP_CACHE', true); //Added by WP-Cache Manager
//define( 'WPCACHEHOME', 'C:\wamp64\www\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'db667671999');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo667671999');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Kili@ndre1');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db667671999.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+K=5Kj?|k7sD hwTQ%dg_d/JOGc3wEx;NR4g>|Z9^BiCGl5:+eYB~ &B_[5zHd8Y');
define('SECURE_AUTH_KEY',  'DVT7l2pwg}PU4ks_mcx/X2Ni[%waMKVWo;GbiC#!zJ{GlL~2>w5W%d.,6:TX9vOz');
define('LOGGED_IN_KEY',    'KI9HShDP+w34:bPgb=/@x`WrAW!X&qwCyV^o2EEfWO3Pe3=JF$OZj|nL|A9$DEOa');
define('NONCE_KEY',        'kYd1Ut%FTw6S(sV1D5X0jlO7Pf}sj2?bai$2G>P*`ZZJ*j*=RAK47v^uT)f@mDQ6');
define('AUTH_SALT',        'lBa.fY=H[f0vV*>GDUsD7@&D&notfb%;T1-]n*wplVqLy1a<RbI1Qj.su0}3BV<i');
define('SECURE_AUTH_SALT', 'H2h*OT)se4Y|gH7U8fXQoa<CZxadX8Vh4m51m--[&cI_N|b8i,{O!3S9-ZCp>mTE');
define('LOGGED_IN_SALT',   '<.|4RyRheN7Mes8Upw/Tk ba[`# 3aR3_^<1PW$lS6WTKb3gl-x+D>Rfi mHzB.U');
define('NONCE_SALT',       '6p)UOzEF*q+CA8v41vLW1v?*=:%nM~0yZ$Y*pDu2n6|T#=TXg{|c3Sp~D3._8:e|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'mairie_castres';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');