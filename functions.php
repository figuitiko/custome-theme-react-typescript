<?php

defined ('ABSPATH') or die ('Hey, you can\t access this file');

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

use Casautomotive\Data;
use Casautomotive\Main;

Main::getInstance();


function casautomotive_get_theme_data(){
	$dataClass = new Data();
	return $dataClass->getData();
}

register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    'secondary-menu' => __( 'Secondary Menu' )
    )
);