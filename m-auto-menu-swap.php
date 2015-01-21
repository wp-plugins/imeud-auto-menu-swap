<?php
/******************************************************************/
/*
	Plugin Name: iMeud Auto-menu swap
	Plugin URI:  http://main53.com/wordpress/auto-menu-swap/
	Author:      Kittichai
	Author URI:  http://main53.com
	Version:     1.0
	Description: Just scrolling menu is auto-swap to top and bottom. * Effective with Theme with <nav>…</nav>, <footer>…</footer>
*/ 
/******************************************************************/
	add_action( 'init', 'm_auto_menu_swap' ); 

/******************************************************************/
	function m_auto_menu_swap() {
		wp_enqueue_style( 'm_auto_menu_swap_style', plugins_url( '', __FILE__) . '/m-auto-menu-swap.css' );
		wp_enqueue_script('m_auto_menu_swap_script', plugin_dir_url( __FILE__ ) . '/m-auto-menu-swap.js', array('jquery'));	 
	}

/******************************************************************/ 

