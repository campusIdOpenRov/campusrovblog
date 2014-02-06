<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'OpenROV');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pM/OkpK(?nEX!|.4aFtA)O2<xMQ!jt{*!TWRqGJc~$3>i?)%a5jz&#lsD$2bNJ{ ');
define('SECURE_AUTH_KEY',  '[^AZ_*2o?@]DnWT^LOAs6D!L2hHphpu;T.9w@FKFJxynWdQ`Z<;7>OR]ewIp)z0~');
define('LOGGED_IN_KEY',    '>x<k.U$R_!Kx+Q%`H))+]Pf}j5/<bMz4/uR*CRyeJOqo(ww_qFufM7JJyLolZ. J');
define('NONCE_KEY',        'W]weD6hAdU7Hi,h7)$V, TTUzJmb@ZH+<p6,|qAhtnG$ =NB%b}V!}|U=|G#CN)m');
define('AUTH_SALT',        '`*Jeiix~W=@L=.YJr<b@lSEBbcE@C_xZ|QdZjY7i!YaX+vD_pu.G`Aq@xSrMbY7H');
define('SECURE_AUTH_SALT', 'u_XJ-Z6eb #fb&6)*P`|2)By?>h#B=dw&K#;L{6U:O e6z/8]y=sGBesv%X9*?4>');
define('LOGGED_IN_SALT',   '%(}(D?x^FFhP~d)|*MSjq ^mT()!R]!@4bUQq?l#,!#GORQv|U9N@^,Q+PbxZ)bK');
define('NONCE_SALT',       'C#2OwhMrfeE_(^*F^`U!i_h:sGcCR#S`Zn*^Fur0GkrBT30mGz&fe;T<i@$NUD*a');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');