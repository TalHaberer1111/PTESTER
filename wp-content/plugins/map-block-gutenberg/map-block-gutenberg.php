<?php
/*
Plugin Name: Maps Block for Gutenberg
Description: Simple, no-nonsense map block powered by Google Maps for Gutenberg editor.
Author: Web Factory Ltd
Version: 1.0
Author URI: http://www.webfactoryltd.com/

  Copyright 2018  Web factory Ltd  (email : support@webfactoryltd.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


// this is an include only WP file
if (!defined('ABSPATH')) {
  die;
}


class wf_map_block {
  static $version;


  // get plugin version from header
  static function get_plugin_version() {
    $plugin_data = get_file_data(__FILE__, array('version' => 'Version'), 'plugin');
    self::$version = $plugin_data['version'];

    return $plugin_data['version'];
  } // get_plugin_version


  // hook things up
  static function init() {
    if (is_admin()) {
      if (false === self::check_gutenberg()) {
        return false;
      }
      
      add_filter('plugin_action_links_' . basename(dirname(__FILE__)) . '/' . basename(__FILE__),
                 array(__CLASS__, 'plugin_action_links'));
      add_filter('plugin_row_meta', array(__CLASS__, 'plugin_meta_links'), 10, 2);

      add_action('enqueue_block_editor_assets', array(__CLASS__, 'enqueue_block_editor_assets'));
    }
  } // init


  // some things have to be loaded earlier
  static function plugins_loaded() {
    self::$version = self::get_plugin_version();
  } // plugins_loaded
  
  
  // add links to plugins page
  static function plugin_action_links($links) {
    $gutenberg_link = '<a href="' . admin_url('admin.php?page=gutenberg') . '" title="' . __('Create a new post using the Gutenberg editor', 'map-block-gutenberg') . '">' . __('Create with Gutenberg', 'map-block-gutenberg') . '</a>';

    array_unshift($links, $gutenberg_link);

    return $links;
  } // plugin_action_links


  // add links to plugin's description in plugins table
  static function plugin_meta_links($links, $file) {
    $support_link = '<a target="_blank" href="http://wordpress.org/support/plugin/map-block-gutenberg" title="' . __('Problems? We are here to help!', 'map-block-gutenberg') . '">' . __('Support', 'map-block-gutenberg') . '</a>';
    $review_link = '<a target="_blank" href="https://wordpress.org/support/view/plugin-reviews/map-block-gutenberg?filter=5#pages" title="' . __('If you like it, please review the plugin', 'map-block-gutenberg') . '">' . __('Review the plugin', 'map-block-gutenberg') . '</a>';

    $links[] = $support_link;
    $links[] = $review_link;

    return $links;
  } // plugin_meta_links
  
  
  // enqueue block files
  static function enqueue_block_editor_assets() {
    wp_enqueue_script('wf-map-block',
      plugins_url('js/block.js', __FILE__),
      array('wp-blocks','wp-i18n','wp-element'),
      self::$version);
    wp_enqueue_style('wf-map-block',
      plugins_url('css/editor.css', __FILE__),
      array('wp-edit-blocks'),
      self::$version);
  } // enqueue_block_editor_assets

  
  // check if Gutenberg is available
  static function check_gutenberg() {
    if (false === defined('GUTENBERG_VERSION')) {
        add_action('admin_notices', array(__CLASS__, 'notice_gutenberg_missing'));
        return false;
    }
  } // check_gutenberg
  
  
  // complain if Gutenberg is not available
  static function notice_gutenberg_missing() {
    echo '<div class="error"><p><b>Map Block</b> plugin requires the Gutenberg plugin to work. It is afterall a block for Gutenberg ;)<br>Install the <a href="https://wordpress.org/plugins/gutenberg/" target="_blank">Gutenberg plugin</a> and this notice will go away.</p></div>';
  } // notice_gutenberg_missing
} // class  


// get the party started
add_action('init', array('wf_map_block', 'init'));
add_action('plugins_loaded', array('wf_map_block', 'plugins_loaded'));
