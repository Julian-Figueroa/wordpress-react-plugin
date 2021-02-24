<?php
/*
*
* Plugin Name: Cookie Plugin
* Author: Julian Figueroa
* Version: 1.0.0
* Description: This plugin will display Cookie acceptance/decline bar
*
*/

// add_shortcode('cookie-plugin-shortcode', 'fnExecutedByCookieShortCode');

// function fnExecutedByCookieShortCode(){
//   echo("<div>Hello cookie-plugin</div>");
// }

// Cookies
wp_enqueue_script('js-cookies', 'https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js');

// styles
wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');

// React & Babel
wp_enqueue_script('react', 'https://unpkg.com/react@17/umd/react.production.min.js');
wp_enqueue_script('react-dom', 'https://unpkg.com/react-dom@17/umd/react-dom.production.min.js');
wp_enqueue_script('babel', 'https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js');

echo file_get_contents('wp-content/plugins/cookie-plugin/templates/CookieBanner.html');

?>