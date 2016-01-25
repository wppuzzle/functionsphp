<?php
/* ====================================
 * Plugin Name: Functions.PHP
 * Description: Мой новый functions.php. Отредактируйте плагин, чтобы добавить в него код, который обычно требуется вставить в файл function.php активной темы. 
 * Plugin URI: http://avovkdesign.com/function-php-chem-zamenit.html
 * Author: Alexandra Vovk
 * Author URI: http://avovkdesign.com/
 * Version: 1.0
 * ==================================== */

function functionsphp_head_info(){
	echo "\n<!-- Плагин Functions.PHP активен -->\n";
}
add_action('wp_head', 'functionsphp_head_info');

