<?php
/** 
 * As configura›es b‡sicas do WordPress.
 *
 * Esse arquivo contŽm as seguintes configura›es: configura›es de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Voc pode encontrar mais informa›es
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Voc pode obter as configura›es de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo Ž usado pelo script ed cria‹o wp-config.php durante a
 * instala‹o. Voc n‹o precisa usar o site, voc pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configura›es do MySQL - Voc pode pegar essas informa›es com o servio de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'totuus_db');

/** Usu‡rio do banco de dados MySQL */
define('DB_USER', 'totuus_user');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Sefaz2012');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na cria‹o das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. N‹o altere isso se tiver dœvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves œnicas de autentica‹o e salts.
 *
 * Altere cada chave para um frase œnica!
 * Voc pode ger‡-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Voc pode alter‡-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto ir‡ forar todos os usu‡rios a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+&MINp.s(+JS6-Wt?!SX~5CGA>qv5`lgyaE?jdfv{S1DSgGPB.cNJg?_`l`8k}U4');
define('SECURE_AUTH_KEY',  'f@2.AYEPEb`IS_(7FBTqGz8gPn-O5]B2g$/.$.s(8WI6B|RdbMnMlj5-p,RkP8*W');
define('LOGGED_IN_KEY',    '34Lx ~z+3T=<gYRo~CT<|4y)#@-_6P),Cj|U.P>,*/&8JnvM%4`p_qvn%;`7e|qx');
define('NONCE_KEY',        '[<j#3xz@*9,&qEEdw,0 ~b1/5mbDKnrx}d$,<$EB^5{B3}%irm7qv|NW%3D<b;H0');
define('AUTH_SALT',        'JjwJ|IvN/o?Z-08~8H>3`mIz,t-1Q@E-ZlWR.3]d#5m;neObD]L%/sBd.BVkjw)>');
define('SECURE_AUTH_SALT', 'Gy/Zuls`GLOuc$-GE1jj^bWhB++^JI*!I-/V~K]+tQ/C@{kRt[o~L4c/4Y%I?)WH');
define('LOGGED_IN_SALT',   '+6o{ i_<++NL$<$ F8nxKA7/SW9S[IFk_`f,3md9Cy`^5/e6+fMn-5D~MD8L4:z`');
define('NONCE_SALT',       'LJu3=A%3&Wh g(8v3=lhjD8:Z9W[g9_SAFa,{G4)kw=31vHtS-^ISnv-O+Y1JJCg');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Voc pode ter v‡rias instala›es em um œnico banco de dados se voc der para cada um um œnico
 * prefixo. Somente nœmeros, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress Ž o ingls por padr‹o.
 *
 * Altere esta defini‹o para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao portugus do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibi‹o de avisos durante o desenvolvimento.
 * Ž altamente recomend‡vel que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto Ž tudo, pode parar de editar! :) */

/** Caminho absoluto para o diret—rio WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as vari‡veis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
