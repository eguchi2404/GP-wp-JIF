<?php

//Googleフォント(Noto Sans JP)読み込み
wp_enqueue_style('Noto_Sans_Japanese', 'https://fonts.googleapis.com/earlyaccess/notosansjapanese.css');

//固定ページのpタグ自動挿入解除
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content)
{
    global $post;
    $remove_filter = false;

    $arr_types = array('page'); //自動整形を無効にする投稿タイプを記述 ＝固定ページ
    $post_type = get_post_type($post->ID);
    if (in_array($post_type, $arr_types)) {
        $remove_filter = true;
    }

    if ($remove_filter) {
        remove_filter('the_content', 'wpautop');
        remove_filter('the_excerpt', 'wpautop');
    }

    return $content;
}

//CSS,JS読み込み
function add_files()
{
    $locale = get_locale();

    $child_theme_uri = get_stylesheet_directory_uri();

    // WordPress提供のjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', "", "20160608", false);
    // サイト共通JS
    wp_enqueue_script('_common', $child_theme_uri . '/js/common.js', ['jquery']);
    //英語版共通CSS
    if ($locale == 'en_US') {
        wp_enqueue_style('style_en', $child_theme_uri . '/css/en/style_en.css');
    }
    // 検索フォームCSS
    wp_enqueue_style('searchform', $child_theme_uri . '/css/searchform.css');
    // PolylangメニューカスタマイズCSS    
    wp_enqueue_style('polylang', $child_theme_uri . '/css/polylang.css');
    // 検索結果CSS
    if (is_search()) {
        wp_enqueue_style('search', $child_theme_uri . '/css/search.css');
    }  // 固定ページ
    else if (is_page()) {
        $slug = get_post(get_the_ID())->post_name;
        if (is_front_page()) {
            // トップページ
            wp_enqueue_style('home', $child_theme_uri . '/css/home.css');
            wp_enqueue_script('home', $child_theme_uri . '/js/home.js', ['jquery']);
        } else {
            // その他固定ページ
            $name = preg_replace('/_en$/', '', $slug);
            wp_enqueue_style($name, $child_theme_uri . '/css/' . $name . '.css');
            wp_enqueue_script($name, $child_theme_uri . '/js/' . $name . '.js', ['jquery']);
        }
        // 英語ページ
        // if (preg_match('/_en$/', $slug)) {
        if ($locale == 'en_US') {
            wp_enqueue_style($slug, $child_theme_uri . '/css/en/' . $slug . '.css');
        }
    }
}
add_action('wp_enqueue_scripts', 'add_files');

/*-------------------------------------------*/
/*  カスタム投稿タイプ「イベント情報」を追加
/*-------------------------------------------*/
// add_action( 'init', 'add_post_type_event', 0 );
// function add_post_type_event() {
//     register_post_type( 'event', /* カスタム投稿タイプのスラッグ */
//         array(
//             'labels' => array(
//                 'name' => 'イベント情報',
//                 'singular_name' => 'イベント情報'
//             ),
//         'public' => true,
//         'menu_position' =>5,
//         'has_archive' => true,
//         'supports' => array('title','editor','excerpt','thumbnail','author')
//         )
//     );
// }

/*-------------------------------------------*/
/*  カスタム分類「イベント情報カテゴリー」を追加
/*-------------------------------------------*/
// add_action( 'init', 'add_custom_taxonomy_event', 0 );
// function add_custom_taxonomy_event() {
//     register_taxonomy(
//         'event-cat', /* カテゴリーの識別子 */
//         'event', /* 対象の投稿タイプ */
//         array(
//             'hierarchical' => true,
//             'update_count_callback' => '_update_post_term_count',
//             'label' => 'イベントカテゴリー',
//             'singular_label' => 'イベント情報カテゴリー',
//             'public' => true,
//             'show_ui' => true,
//         )
//     );
// }

/********* 備考1 **********
Lightningはカスタム投稿タイプを追加すると、
作成したカスタム投稿タイプのサイドバー用のウィジェットエリアが自動的に追加されます。
プラグイン VK All in One Expansion Unit のウィジェット機能が有効化してあると、
VK_カテゴリー/カスタム分類ウィジェット が使えるので、このウィジェットで、
今回作成した投稿タイプ用のカスタム分類を設定したり、
VK_アーカイブウィジェット で、今回作成したカスタム投稿タイプを指定する事もできます。

/********* 備考2 **********
カスタム投稿タイプのループ部分やサイドバーをカスタマイズしたい場合は、
下記の命名ルールでファイルを作成してアップしてください。
module_loop_★ポストタイプ名★.php
 */

/*-------------------------------------------*/
/*  フッターのウィジェットエリアの数を増やす
/*-------------------------------------------*/
// add_filter('lightning_footer_widget_area_count','lightning_footer_widget_area_count_custom');
// function lightning_footer_widget_area_count_custom($footer_widget_area_count){
//     $footer_widget_area_count = 4; // ← 1~4の半角数字で設定してください。
//     return $footer_widget_area_count;
// }

/*-------------------------------------------*/
/*  <head>タグ内に自分の追加したいタグを追加する
/*-------------------------------------------*/
function add_wp_head_custom()
{ ?>
    <!-- head内に書きたいコード -->
<?php }
// add_action( 'wp_head', 'add_wp_head_custom',1);

function add_wp_footer_custom()
{ ?>
    <!-- footerに書きたいコード -->
<?php }
// add_action( 'wp_footer', 'add_wp_footer_custom', 1 );