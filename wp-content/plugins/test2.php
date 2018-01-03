<?php
/*
Plugin Name: Good Example
Plugin URI: https://wordpress.org/#
Description: Lol it's another test
Author: Psyduck
Version: 0.0
Author URI: http://google.com
*/
// Worst plugin ever
header("Content-type: text/plain");

function print_stuff() {
	print " -------- I think I'm getting a clue!";
}
add_action("admin_footer", "hello_dolly");
add_action("admin_head", "dolly_css");
/* End of File */