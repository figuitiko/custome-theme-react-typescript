<?php 

namespace Casautomotive;

class Scripts{

    private $cssPath = '';
    
    private  $jsPath = '';
  

    public function __construct()
    {
      
      
        $this->cssPath = CS_THEME_CSS_URL;
       
        $this->jsPath = CS_THEME_JS_URL;
    

        add_action('wp_enqueue_scripts', array($this, 'addFrontEndAssets') );
    }

    /**
     * Register and enqueue styles
     * @param array $styles
     * @return void
     */
    private  function addStyles( $styles )
    {
        foreach ( $styles as $handle => $args )
        {
            if ( $args === true )
            {
                wp_enqueue_style( $handle );
            }
            elseif ( is_array( $args ) )
            {
                wp_register_style(
                    $handle,
                    $args['src'],
                    isset( $args['deps'] ) ? $args['deps'] : array (),
                    isset( $args['ver'] ) ? $args['ver'] : THEME_VERSION,
                    isset( $args['media'] ) ? $args['ver'] : 'all'
                );

                if ( !isset( $args['enqueue'] ) || (isset( $args['enqueue'] ) && $args['enqueue'] === true) )
                {
                    wp_enqueue_style( $handle );
                }
            }
        }
    }


     /**
     * Register and enqueue scripts
     * @param array $scripts
     * @return void
     */
    private function addScripts( $scripts )
    {
        foreach ( $scripts as $handle => $args )
        {
            if ( $args === true )
            {
                wp_enqueue_script( $handle );
            }
            elseif ( is_array( $scripts ) )
            {
                wp_register_script(
                    $handle,
                    $args['src'],
                    isset( $args['deps'] ) ? $args['deps'] : array (),
                    isset( $args['ver'] ) ? $args['ver'] : THEME_VERSION,
                    isset( $args['in_footer'] ) ? $args['in_footer'] : true
                );

                if ( !isset( $args['enqueue'] ) || (isset( $args['enqueue'] ) && $args['enqueue'] === true) )
                {
                    wp_enqueue_script( $handle );
                }

                if ( isset( $args['localize'] ) && is_array( $args['localize'] ) && !empty( $args['localize'] ) )
                {
                    wp_localize_script(
                        $handle,
                        str_replace( '-', '_', $handle ).'_params',
                        $args['localize']
                    );
                }

                if ( isset( $args['data'] ) && is_array( $args['data'] ) && !empty( $args['data'] ) )
                {
                    $data_args = $args['data'];

                    if ( isset( $data_args['key'] ) && isset( $data_args['value'] ) )
                    {
                        wp_script_add_data(
                            $handle,
                            $data_args['key'],
                            $data_args['value']
                        );
                    }
                }
            }
        }
    }
    
    public function addFrontEndAssets(){
        
     
        $this->addStyles($this->addFrontEndStyles());
        $this->addScripts($this->addFrontEndScripts());
    }
    public function addFrontEndStyles(){
        
        $styles['main-style'] = [
            'src' => CS_STYLE_DIR,
            'ver' => THEME_VERSION
        ];
        $styles['style-theme'] = [
            'src' => $this->cssPath.'/main.css',
            'deps' => array (),
            'ver' => THEME_VERSION
        ];
       
       
        
        return $styles;
    }

    public function addFrontEndScripts(){
      

       
        $scripts['main-js'] = array (
            'src' => $this->jsPath.'/index.js',
            'ver' => THEME_VERSION,
            'in_footer' => true,
                    
        );

        
        return $scripts;
    }
}