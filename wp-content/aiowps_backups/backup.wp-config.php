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
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'shuntem_gorin2022-m4-practice1' );

/** データベースのユーザー名 */
define( 'DB_USER', 'shuntem_gorin2022-m4-practice1' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'l3TlQIwf28' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b5KY 5%bU@i@]^9V!DrW825z7/r3|X![@3HqGf0Q^G%PGb<8D:VT&9z4z@L%4${R' );
define( 'SECURE_AUTH_KEY',  '!NL}xzCMvF&L^d:Aq*pfc~V7~(E>{zwO|M:@X~T9GB!bRot<$!>d2slscr9*,5]7' );
define( 'LOGGED_IN_KEY',    'BW6s!?]$MXIZq$Wb]W?(2!H:)&&&Npk~?Utm,9GdF,H2?F.iR^z1-!Mn@kx]6O=O' );
define( 'NONCE_KEY',        'n^`N4*U`zIN[?4|B^k*CJ|A3u4!P2XhP{1Ua{jE~h`$lK]z.fV96#~Y*?:.ncvyt' );
define( 'AUTH_SALT',        'XtkkL`Jt_l*SHfrOBYz}hlW{ xH5.y4$*i=A=v*:FDY*cInSm?Cr`%D#nmuet$Y#' );
define( 'SECURE_AUTH_SALT', '4LqluJ;(,lDZN9kWJ*<s@m:$S$*5r^2fij:@*u1HB OCAfpPAC[WdPd*7_!>wfmz' );
define( 'LOGGED_IN_SALT',   'HrRw,f=TprW4urT8g,%#YR`vefVSjNAJ`}:iO`$xw;9Ibh&FUW3{-|15Rb-Y,D%W' );
define( 'NONCE_SALT',       '3Huz{!%*Bg~Y00]2Y,Z!{N%fn{-{u}%J2Z~CQ=RJso@YwhU-l_/hWs9%6if#<+cq' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'nhlxn_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';