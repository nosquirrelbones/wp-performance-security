<?php
// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

$option_name = 'wpps_options';

delete_option( $option_name );
delete_site_option( $option_name );
