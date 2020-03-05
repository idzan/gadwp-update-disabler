<?php
/*
Plugin Name: GADWP Update Disabler
Plugin URI: https://hrweb.digital
Description: Disable updating of GADWP Pluggin from 6.x versions and newer
Version: 1.0
Author: HR Web.D
Author URI: https://hrweb.digital
License: GPLv3
*/
function xxx_plugin_updates( $value ) {
    if( isset( $value->response['google-analytics-dashboard-for-wp/gadwp.php'] ) ) {
    unset( $value->response['google-analytics-dashboard-for-wp/gadwp.php'] );
    }
    return $value;
    }
add_filter( 'site_transient_update_plugins', 'xxx_plugin_updates' );