<?php
if (get_bloginfo("language") == 'fa-IR') {
/*
Plugin Name: تغییر فونت ادمین وردپرس
Plugin URI:  https://github.com/hosseincodes/WordPressAdminFontChanger
Author:      حسین اکبری
Author URI:  https://hosseincodes.github.io/my-personal-website/
Version: 	 1.0
Description: ساده‌ترین راه برای تغییر سریع فونت ادمین وردپرس.
*/
}else {
/*
Plugin Name: WP-Admin FontChanger (Persian font)
Plugin URI:  https://github.com/hosseincodes/WordPressAdminFontChanger
Author:      Hossien Akbari
Author URI:  https://hosseincodes.github.io/my-personal-website/
Version: 	 1.0
Description: The easiest way to quickly change the WordPress admin font. 
*/
}
//
if (!function_exists( 'WordPressAdminFontChanger' )) {
  require_once plugin_dir_path(__FILE__) . DIRECTORY_SEPARATOR . 'font-changer.php';
}