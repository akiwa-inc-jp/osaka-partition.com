<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'sddb0040048047');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'sd_dba_NDQzMzc3');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'NM4so#9r');

/** MySQL のホスト名 */
define('DB_HOST', 'sddb0040048047.cgidb');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H[_:{h${b|1;kO?DG:(GIk:s#zNEUW0lr``)^,/[8A3 & ?H#5_^M$=>Ru_K3@(]');
define('SECURE_AUTH_KEY',  'r-`- n`G7;eO2gOON3%a5;5ZL1S2VJ>`NrcXB,gwOU5jVHd(cBw~Ew&n({UPveid');
define('LOGGED_IN_KEY',    '`HT+{Qj8/3/}66#w>(.}Y/};=:OFE0JsUFGIi`QFR:c$b:YG-(Az~jCX{*cex{En');
define('NONCE_KEY',        ']qL%Rat--&!yp-+XT`m&N0LGjzk;mn$O~)3+z87|V5*fEozdS84)kbXRp%rydQ7G');
define('AUTH_SALT',        'N{bmAt6xPba^!=4?x<[dtro_5ucWi7kq`q|>}Xa=k!4#=f9*yv$X+4n,96kTw<:*');
define('SECURE_AUTH_SALT', '`Mh5%:mVW`gZy#^>j.67:2&C>.=<9Ss&^VRPy/wI~;)[l{]Iaf6ODjL6FUqU:dyS');
define('LOGGED_IN_SALT',   'KY/RJdrdQa5Ir&>o^{_E>`>C,.DVml,PdWIH6L`meL&GvUI)Tuj@?4r!U:>^db+y');
define('NONCE_SALT',       '-cgVK7g,3[!_Z:Zx,8,JZ-b(hNO6wIlAx<l+#V7#mO[@q{yT5ep9u5&W%<]:8/}{');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
