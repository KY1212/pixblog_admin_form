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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'WP-02' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'l!*>K:ySyUjB3w_<az_1rBFuRS;6&TRyRG`>GJ@1 VvP~cT9?rB1RB9AB@7>WxL6' );
define( 'SECURE_AUTH_KEY',  'e3ya:JZn!*&zOxlgqFU`<4#qbuvTk[YSb:[LVY[r.o1Cx+Ok5$<4]{pEG{X2/F?f' );
define( 'LOGGED_IN_KEY',    't,ieOE:1Y<G4ihAb.HUBP#B!x]w9 $my[d=&Vo*^bX8,^YWaBp]%XF~S92K0HO#F' );
define( 'NONCE_KEY',        '=4^ag.W{`Us[a]LFamLE2)R>6o=Q=P9u?h~)7eaY;*<RdpWJH/@vt1`>8fu X*@:' );
define( 'AUTH_SALT',        '2}.|ZN%CYm*x+Pbd[@b)odEKAQOo5DT%4`3Va@xo%E#%/:8DALb^ `WyXT3bkg S' );
define( 'SECURE_AUTH_SALT', '.n!+jjx=_&0YYk92{^!D{U@UVw(25b#UwdEIh6(4>bif$Ci-3dS{|SoIz/Z@:};Q' );
define( 'LOGGED_IN_SALT',   'y5kt$4q?LE;Ceyc#BR73k==*f*G~.1/xR5 +4kUH|!_B.-~vOYirx)QbU^NFGp7t' );
define( 'NONCE_SALT',       ',|`i75>vFo`nEKNooo<dd2]oRWbqw%XpXq EsMaC=o/^xb!PxOPE)C6}e}a)-:SG' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';