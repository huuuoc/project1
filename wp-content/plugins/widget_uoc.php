<?php
/*
Plugin Name: Test Widget
Plugin URI: http://thachpham.com
Description: Thực hành tạo widget item.
Author: Thach Pham
Version: 1.0
Author URI: http://google.com
*/

/*
* Khởi tạo widget item
*/
	add_action( 'widgets_init', 'create_thachpham_widget' );
	function create_thachpham_widget() {
		register_widget('Thachpham_Widget');
	}
	
/**
 * Tạo class Thachpham_Widget
 */
class Thachpham_Widget extends WP_Widget {
 
	/**
	 * Thiết lập widget: đặt tên, base ID
	 */
	function __construct() {
		parent::__construct (
		  'thachpham_widget', // id của widget
		  'ThachPham Widget', // tên của widget
	 
		  array(
			  'description' => 'Mô tả của widget' // mô tả
		  )
		);
	}

	/**
	 * Tạo form option cho widget
	 */
	function form( $instance ) {

	}

	/**
	 * save widget form
	 */

	function update( $new_instance, $old_instance ) {

	}

	/**
	 * Show widget
	 */

	function widget( $args, $instance ) {

	}
 
}