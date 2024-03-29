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
define( 'DB_NAME', 'bricotips' );

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
define( 'AUTH_KEY',         'G^If>Y2n4y}?I(QOn>Bl/+T+jF>-up7xQ*DD/EVq?uESbaGxe8 im_b5x]*QpnB9' );
define( 'SECURE_AUTH_KEY',  'H$uvkSK}!jc`c>K!)EZe9$95X3z;z)MH`6L?x<{V~6M?w9|N0ThW(/v4M&Pv,`]x' );
define( 'LOGGED_IN_KEY',    '%m5;ULUZV]ZH0 L.3VXS3{P~Fxt]>}h=;US>S1HbIi}K/AECbLcf&X0,[mTIROVx' );
define( 'NONCE_KEY',        'WmOS^rrvRhTD!X.O:-)f,?DLJPEzq#2I_0{n[)Amw;hVB$$?p5|w,p#M;t}?[|mM' );
define( 'AUTH_SALT',        'DtgHG9N-W:=yaEPYH8{xVnN8>VQ4)c>@C}?LA_Bw4(;78purTG%A%b|s Yc7I,?r' );
define( 'SECURE_AUTH_SALT', '?kCEFaHBgG_Q58!|8`ESco2I!9LLjsaO+]9J3w36x-* Y~wWXxs6O[RO^L8yKzWM' );
define( 'LOGGED_IN_SALT',   '[vZ/.W#Dvq_,Esc%;Qu{r~]&R/ID62(p2.|:4c4tZ[*l_1^@mv uuhYg3TE%3ho ' );
define( 'NONCE_SALT',       'QrT;sG!ZZ5~ui?z8h_|NY`FV6oT7&pW}R/$L)39/nB{<}0+@w{gc{j$9h7n(yZ7X' );
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
