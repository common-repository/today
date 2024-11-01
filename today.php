<?php
/**
 * @package Today
 * @version 1.0
 */
/*
Plugin Name: Today
Description: This is just a test plugin, it simply print "what's the day?" at the upper right of your admin screen on every page.
Author: Samir Shaikh
Version: 1.0
Text Domain: Today
*/


function today(){
		echo "<p id='today'>Today is <strong>" . date("l") . "</strong></p>";
}


add_action( 'admin_notices', 'today' );

function today_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#today {
		color : #000000;
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'today_css' );




?>