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
define('DB_NAME', 'dansmacuisine_live');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'mobideal');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'g2{s>GRER`b,$b:CoKv[zRbHeN$)tpZ:TZ&rCCge/[R_olme2a+3?i)O&GgOXC}Z');
define('SECURE_AUTH_KEY',  'mg.HQp$B!CtUYbM}m )mbk$faI@#@9B|=$X;,}!5RF[}Z4:Nu-hn9x{JtCJ5/!>{');
define('LOGGED_IN_KEY',    'fc+eV4 NZSsBoFf4>0Bnp>.R=P;(GD&,DkWOx}Wt2aME3Q NS!8h<)A&#lp+!A6t');
define('NONCE_KEY',        'GfM$TYS==X.pC$RWhbI.]K6*iW`Ig(v8tsEp=~@nnAtz! y%>`}m+c <Hl)D_d4)');
define('AUTH_SALT',        'i^E%.~(`=e{GWcCrP-YC^@oR.i#4u91fZ7<t(GJF}=8E,:~sM|NRRKj~o<qnw-9K');
define('SECURE_AUTH_SALT', '#p<0AoGY#E6xauGMtODK0 3[2rKUH29x;i]L+&:aZ=P{b0-!H8A)we*b_f#;)!kV');
define('LOGGED_IN_SALT',   'tvjHCSl[oT&2(L`4|[+.<!`+bV,v&ymh$e9;AZ)#>CiB #bYe:J6j3p}at&&bVYM');
define('NONCE_SALT',       '$W4R-;;;=l9 j<D8o5/kf~K?2%zVz|}]oThUe3QvqYIrWLa;ykiLG(!${X%n#mRO');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
