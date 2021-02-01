<?php

function mytheme_setup() {
//（C）のCSSを有効か
add_theme_support( 'wp-block-styles');

add_theme_support( 'responsive-embeds');

//Editorにcssを有効化
add_theme_support( 'editor-styles');
//上記cssはこれを使うよ
add_editor_style( 'editor-style.css');

//<title>タグ出力
add_theme_support( 'title-tag' );

//link, style, scriptタグのHTML5でtype書かなくてよい仕様有効化
add_theme_support( 'html5', array( 'style', 'script' ));

//アイキャッチ画像を有効化
add_theme_support( 'post-thumbnails' );

add_theme_support( 'align-wide' );

register_nav_menus( array(
  'primary' => 'ナビゲーション'
));

//2段組みを有効化
add_theme_support( 'mycols' );
}

add_action('after_setup_theme', 'mytheme_setup');


function mytheme_enqueue() {

    //GoogleFonts読み込み
    wp_enqueue_style(
      'myfonts',
      'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;700&display=swap',
      array(),
      null
    );

    //Dashiconsを読み込み
    wp_enqueue_style(
        'dashicons'
    );

    //theme.min.css,style.min.cssに比べて優先度高いstyle.cssを読み込み
    wp_enqueue_style(
    'mytheme_style',
    get_stylesheet_uri(),
    array(),
    filemtime(get_theme_file_path('style.css'))
);

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

function mytheme_widgets() {
	//ウィジェットエリアを登録
	register_sidebar( array(
	  'id' => 'sidebar-1',
	  'name' => 'サイドメニュー',
	  'before_widget' => '<section id="%1$s" class="widget %2$s">',
	  'after_widget' => '</section>'
	) );
  }
  
  add_action('widgets_init', 'mytheme_widgets');