<?php

// ファンクション
add_action('wp_enqueue_scripts', 'add_slider_files');
require_once('lib/admin/init.php');
require_once('lib/admin/manual.php');

require_once('lib/functions/asset.php');

require_once('lib/functions/head.php');
require_once('lib/functions/custom-header.php');
require_once('lib/functions/custom-post.php');
require_once('lib/functions/bzb-functions.php');
require_once('lib/functions/setting.php');
require_once('lib/functions/custom-fields.php');
require_once('lib/functions/category-custom-fields.php');
require_once('lib/functions/widget.php');
require_once('lib/functions/postviews.php');

require_once('lib/admin/extension.php');
require_once('lib/functions/shortcodes.php');
require_once('lib/functions/social_btn.php');
require_once('lib/functions/show_avatar.php');

require_once('lib/functions/rss.php');

require_once('lib/functions/category-custom-fields-ex.php');

function add_slider_files() {
  //スタイルシートの読み込み
  wp_enqueue_style( 'swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');

  //JavaScript の読み込み
  wp_enqueue_script( 'swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', '', '', true);
}