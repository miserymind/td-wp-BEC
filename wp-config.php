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
define('DB_NAME', 'bec');

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
define('AUTH_KEY',         '3;QPH+!<|Vlzh|8,e1wI(yH|Y_#SIq#gI-)OEC>W#&G&k;pTmreeS-9K6SAqcMg|');
define('SECURE_AUTH_KEY',  '>[x:N;AnOKk|k)sYl+tgg!{<l!QbE(N5!+6;TFv@mfi|D|jg45Ih<^e3n.8x@zZJ');
define('LOGGED_IN_KEY',    '{nv|S%Abt-pGloal#8:*Gw0e-_$.Qjzd[aY-GZO>lYF<pXC$Qql2>-i~gslo|q4*');
define('NONCE_KEY',        'qEf}b7F,oe+TEG%[=Td*i9GzX$XQb#B%3|/.Q+nxpbi-Q!5W1-[|A|au|EUh)pz6');
define('AUTH_SALT',        'v:8|~H|+mv3a*>S-QHv~C?2]V94BA*NQLB&,?,T<vBuY8(IfR|hSN+Mb@:B;Hee|');
define('SECURE_AUTH_SALT', 'tL<|HYYSy[wsvtx$PcEHkK$5r`l$;I*nOyq7&B6E<~bfJq?`jKn`yQ9I~!c>zH+7');
define('LOGGED_IN_SALT',   '1cGlEBkSG)QW;qY5lAi+r@o-cBPo($RTFwLR-}aM:.+Q9T}Gh+x2MPMldJ>y|Sn|');
define('NONCE_SALT',       'Nc<>@0_D%@ u~o:#t<$LbKI{6n`WdSHp~@!?n0S`YI;?||nha#f}a(n>lmEBti#]');
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