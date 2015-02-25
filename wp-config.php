<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * di creazione di wp-config.php. Non � necessario utilizzarlo solo via
 * doggy,� anche possibile copiare questo file in "wp-config.php" e
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'pulce');

/** Nome utente del database MySQL */
define('DB_USER', 'simoneLazzaro');

/** Password del database MySQL */
define('DB_PASSWORD', 'UAfVAj3zcAtNasAG');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * E' possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ci� forzer� tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CJHrr_O`I10iPT i1gnE)[`ljXY5_W#9pY! Ge)>ox~0CWHzqmL DxZFn[LC ta*');
define('SECURE_AUTH_KEY',  '84XKaLv ;]BUF9YU}M7c-rYV)`]Tr}4C8Ue^E3R^so)#OJ|Fl(3{aTM<HBX+s]eG');
define('LOGGED_IN_KEY',    'IjN!BItj|&~ZGCF_OjA@DwNP.4YAHRu6@~#SkOx~dvN/C{}}ExDl-**onZ$eS9uN');
define('NONCE_KEY',        '+JTzHG`LR=SZ4K#5&uU^#,.IqV#JB(g%aAx&M6hkj<;_iUsa.@`Mfo]Gn[4kP)j!');
define('AUTH_SALT',        ':<#;R5]kDx%QSBDp!5%Vb(>@EU{=Hm&V-{ e$Y{54JeM6mqSYS4Yq~SG=1u{7[#t');
define('SECURE_AUTH_SALT', '$(0PRotM[AQR;w,?Ql7pl(-t?%?CbYI2J#c_R6aM}Ykd{W;blmQr~/Gg5Jme$b7.');
define('LOGGED_IN_SALT',   '}HuLR m]#g>?3!(;ME&rGGW1{gK/c{ncp^O_3Js]z:kT)Fr1GsRrvMGeKSaBG3fn');
define('NONCE_SALT',       '#jWx*lCgxZlBT~]u+5cs)-{>TR,OPk))-^_A1t8&FK=<w=A29LZJ#f/^}:Y)=b!1');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalit� di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
