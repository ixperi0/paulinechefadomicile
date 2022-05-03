<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'paulinechefadomicile_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '<|z@g6N1Mx.$Yp}&U>6`o6hy?}6:B0dp+%NbyyJ<pZviuY[mJP0o@a6n-2M_8Z-i' );
define( 'SECURE_AUTH_KEY',  'v&HwFF4Gt*hlHcTS5k%&x!1#iZ*X%`B2_<b],gMLLW&L;-r%kq@8#4Y1WRYcGx>H' );
define( 'LOGGED_IN_KEY',    '$%Fbt>QaJP7/t=N|(`OuVtR9Ot j,Syhl(RA>kBwMwPXg>B+d6Wp9EB~K.<>+=g[' );
define( 'NONCE_KEY',        'OIU2-3!-K94(jB]Dmso$::Y}zRAljvC_s!2s5`~F0QM9|%m?n G$zy(ez+-,1Eh)' );
define( 'AUTH_SALT',        'KM+Hsg:L!Qvi&Ic Ihw3<DSi:h(+W4YBy)&96 }E6<E z5kVvgxsQ{YlX679G)KI' );
define( 'SECURE_AUTH_SALT', 'kz~ZJaQ30~+LlyaJa( u`I% vW/I#_b^kyEqCt {|!2<&vuPsyfe_q]o0uA<heot' );
define( 'LOGGED_IN_SALT',   'IdQgY+lT<*c0sB[{,.MJKr&< rpGv5m*_H@/?Wu<wUKz v*iW=A}@q@PujbXJNJ?' );
define( 'NONCE_SALT',       'p(;@y-R:.[VV?K!n]O>O@Aw;!j0c%w<r/{&S6u!6W%@kcj1|g? #=-9S[r8UKW.?' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
