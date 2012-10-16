<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'tiagogalleone');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Uf$m9z(^ks=-q GD:lTZx/ MSu4zs)N]Vy/|*B^0<8~s6E52=eDt&>=%vH q,Em-');
define('SECURE_AUTH_KEY',  'qLSfiXoy1DkZ#(XNMAZ-c,[cB1WRxmOcB|=u&Vbo]Q>5.t9G0mPsNQv,TLAHf/%H');
define('LOGGED_IN_KEY',    ')g~I!,9cCGrde*cYCwp-uFAt=g.cZ:Q_g@%X}m@JN6qJ8<zp!p`]Z!.QSI`k1f38');
define('NONCE_KEY',        '+uYLTTZ<4akik*D:TBz.o8&RgxIpa|qL!+34Dhy{C||iAT#i:v~<NCLx)j?zEgNO');
define('AUTH_SALT',        'QEYP2J;:K-Zwmjx%#n7Cs~M*DjFM<=qiDQV:^+@bnF#+}|7LgX8|+U,5bSvfT#LE');
define('SECURE_AUTH_SALT', '~_wY$75-wuA%n%938YbJ4qM+10fcl[vST4T%;8=Tws4-pJo~`d9 =ba8){91d[nm');
define('LOGGED_IN_SALT',   '2+*%z?CXH=9`V]^ z+&) Pj+51(_x1+];an5t#lXf@yn!WSRGC=kR{hd00C,`Eb*');
define('NONCE_SALT',       '%JXmw3l4bmZtlQr^:J}f@H%+$>Fh6R<Z;6gH<*)cA{#2H(C#=}p@WvT-I8KtH*xO');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

