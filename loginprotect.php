<?php
/*
Plugin Name: Login Protect
Description: Security for logging in
Version: 2016.5.27.1
Author: Kevin Pichette
Author URI: http://www.kevinpichette.com
License: GPL
Copyright: Kevin Pichettte
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


// stylesheet
// function add_my_stylesheet() 
// {
//     wp_enqueue_style( 'myCSS', plugins_url( '/css/style.css', __FILE__ ) );
// }

// add_action('admin_print_styles', 'add_my_stylesheet');

// ------

add_action('login_form_login', 'my_login_protect');

function my_login_protect()
{
	if($_SERVER["SCRIPT_NAME"]=='/wp-login.php')
	{
		$min = Date('i');
		if(!isset($_GET['wdw' . $min]))
		{
			header("Location: http://msn.com");
		}
	}
}