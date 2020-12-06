<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'juniimsi' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'juno4848' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:8889' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IJ~i/VpqbXB}N75HYN,bKS 4I>sd4)i~Cc3DpdM8?z64T@OptElBTA@by>#<W}5&' );
define( 'SECURE_AUTH_KEY',  '@v/WdDypwwe8Lkq?DPEo6qJT%Y0b[i:^a*VY]!m{l7v4}/6q}@IvQvlG#WFh/jvP' );
define( 'LOGGED_IN_KEY',    'tg._0bB$y5._MBqQD(Pj:u@MvG:ut*^`6_&>LYkn6{$]8[F{!1j)at(Sc{:&N6Ye' );
define( 'NONCE_KEY',        ';c:<Du)iZnY-.q[XKT#H$TYgebUt@*l*o%KlwDnQD7UkHnVB@SN]rmGI_ ?4reVM' );
define( 'AUTH_SALT',        '^n5J _aV+J.>*v@%J-=U#6z_IQ+:l5A_3Oo^yl.=kC&G)cK1A^aW!|3|-vYW3+_<' );
define( 'SECURE_AUTH_SALT', 'EF5:K%o4(2STcQi~#y{JWDd>J+&66d?(``C&bjsB?GLJELEgz{gx`Gx{14(`hy#.' );
define( 'LOGGED_IN_SALT',   'gkku3Tx5VpFTH:Ua6P#g+9bb<(/JkRZ[E !&9-H-r,/{8W_k,X&GLUmZ<|S}YJp)' );
define( 'NONCE_SALT',       '~pkD/K{|3XMfZ?+2pWShjgVm!=tdC4.sH?M5G+:VlIH&Z&KZT-+4]O|7eeA^8-s,' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
