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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'z%.k}|IMSolsZE9u~CIt8[={(.hd8Q{d=])uN=Z@_}/:y6,*U#x=h.pE)3M:V3nF' );
define( 'SECURE_AUTH_KEY',  'gRNcQDM+A=1{gf^UJer2^>]muR&u(CX?ZneKgre[NO?-[G-~$U)/&uX(.gOjQ0Gq' );
define( 'LOGGED_IN_KEY',    '^O!)v4xxahybBorDyZhq{&dK`q+Wn^zLM%[foff:dR6Z?Os!n d~=>=i9~zqR#a8' );
define( 'NONCE_KEY',        '5Awe7cD;xysgH:={:G}#k!b)P[,rbDFIA76{B(M{Kf)H2)^[0[xI//~J,E*/)0&C' );
define( 'AUTH_SALT',        's_o1!n>![8ag[$F0L-V0-ZU07+oN`-),5`ia^EK OKttr;mf/Vym#cy.cJ(,^{Od' );
define( 'SECURE_AUTH_SALT', 'j5FBgKN,u2;}SALNFj[Euu$R1(B79C*Di@R7ij<|%P)3>m+O{<j}VbFvW;`1Ki]3' );
define( 'LOGGED_IN_SALT',   '[[SqNthU/`p~;ou`Pp7fT%B_ %Xw)C-%1`n>_7k>v3haT8u50X^5ARmgJbUjz0vk' );
define( 'NONCE_SALT',       '#7,:{zaWquV$wcNq0tmLrKa5C(Y^r[e=x3l@xh]`CodjBL+!Tq-XFlvv/W_bAYmN' );

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
