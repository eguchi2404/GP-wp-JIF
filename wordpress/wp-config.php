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
define( 'DB_NAME', 'wp-JIF-Corporate_db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'wp-JIF' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'q3TQSq0WwoR4lx98' );

/** MySQL のホスト名 */
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
define( 'AUTH_KEY',         'z>b.vt=..nXH>u:s0SbF)!2Iy5@M`?: ^;~aR14!&VN=?,#9Zl*EahFG3nHkhO}7' );
define( 'SECURE_AUTH_KEY',  ',:W5hLPZ/jh,MvkeY{nVgKhP00)XvJu%U0/Q>fMjJ`nqn4;`*&1P3PZ@y9pO85T7' );
define( 'LOGGED_IN_KEY',    '^3ai)J 8#n&(!KcVQ29FCCGg@_ua9M:OI_d(AmINL=t`_G(RU3~,K#d@5h4W])wI' );
define( 'NONCE_KEY',        'S$>rCwn#!Y98[9Jd LudX(oZRmSh21M*P:EO2FIR{gix3Ua(T KOvbZdByMo]eiq' );
define( 'AUTH_SALT',        'D:Y@TI01-RKR]T@}#9cC_I&PVUmngqd#L$}8>&KHvUiwV7RGEj1ss)Gk`Jgw_OfC' );
define( 'SECURE_AUTH_SALT', 'h`Jf<XrGu,HWnk2=KiK|_q1>:muA5(;A&a>|.WGyr5at!,-YMDId#y5OpU-49gC{' );
define( 'LOGGED_IN_SALT',   'VL,UmedcWMY;t(AlBOQKeYzEfaO?$Lm6%<TQ8suXCg`FCkDNuhl?f~6H7]L]r8v|' );
define( 'NONCE_SALT',       '5s>4hGF=z^,{s,tb;KB/evW^VRkEoEeORvEc407@{~8s1Zd@.=.Uki7W3{0dA#${' );

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
