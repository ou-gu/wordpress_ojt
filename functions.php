<?php
// サムネイル（アイキャッチ）設定ができるようにする追加機能
add_theme_support('post-thumbnails');

// メニューのカスタマイズ
function register_my_menus() {
  register_nav_menus( array(
    'main-menu' => 'Main Menu',
    'footer-menu'  => 'Footer Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );
