<?php 


namespace Casautomotive;

use Casautomotive\careerCpt\CareerCpt;
use Casautomotive\contactCpt\ContactCpt;
use Casautomotive\customizable\AboutContent;
use Casautomotive\customizable\BrandsContent;
use Casautomotive\customizable\CareerContent;
use Casautomotive\customizable\FooterContent;
use Casautomotive\customizable\HeaderContent;
use Casautomotive\customizable\HomeContent;
use Casautomotive\customizable\TopBarContent;
use Casautomotive\endpoints\ContactEndpoint;
use Casautomotive\Scripts;


// use SeteppiTheme\endPoint\EndPoint;


class Main{
    private static $instance = null;

    private function __construct()
    {
        $this->defineConstants();
        // $this->includeFiles();
        $this->register();
        
    }

    public static function getInstance()
    {
        if ( self::$instance == null )
        {
            self::$instance = new Main();
        }

        return self::$instance;
    }

    private function defineConstants()
    {
        $active_theme = wp_get_theme();
        define( 'WP_HOME', 'https://'.$_SERVER['HTTP_HOST'] );
        define( 'WP_SITEURL', 'https://'.$_SERVER['HTTP_HOST'] );
        define( 'THEME_NAME', $active_theme->get( 'Name' ) );
        define( 'THEME_VERSION', $active_theme->get( 'Version' ) );
        define( 'ST_THEME_LOCAL_MODE', true );
        define( 'CS_STYLE_DIR', get_stylesheet_uri() );
        define( 'CS_THEME_DIR', get_template_directory() );
        define( 'CS_THEME_URL', get_template_directory_uri() );
        define( 'CS_THEME_CSS_URL', CS_THEME_URL.'/build/css' );
        define( 'CS_THEME_JS_URL', CS_THEME_URL.'/build/js' );
        define( 'CS_THEME_IMG_URL', CS_THEME_URL.'/assets/img' );
        
          
    }
    private function register(){
        $scripts = new Scripts();
        $headerContent = new HeaderContent();
        $topBarContent = new TopBarContent();
        $footerContent = new FooterContent();
        $homeContent = new HomeContent();
        $aboutContent = new AboutContent();
        $brandContent = new BrandsContent();
        $careerContent = new CareerContent();
        $careerCpt = new CareerCpt();
        $contactEndpoint = new ContactEndpoint();
        $contactCpt = new ContactCpt();
      
    }
}