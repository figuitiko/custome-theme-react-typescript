<?php
namespace Casautomotive\customizable;
use Casautomotive\customizable\util\CustomizableInterface;
use Casautomotive\customizable\util\ElementCustomizable;
use Casautomotive\customizable\util\ImgCustomizable;
use WP_Customize_Manager;

class HeaderContent
{
    


    public function __construct()
    {
        add_action('customize_register', array( $this, 'customizeRegister'));
    }    
 public  function customizeRegister( WP_Customize_Manager $wp_customize){


     $customizable_element= new ElementCustomizable($wp_customize, 'ar-header-section');
     $customizable_element->add_section('Header Section');
     $logo_img = new ImgCustomizable('Image for logo', 'cs-header-image-logo-control', 'cs-header-logo-image',$customizable_element->getSectionId(), $wp_customize);
     $elements = [$logo_img];
     $this->paintingElements($elements);

    }
     public function paintingSection (CustomizableInterface $element){
         $element->addSetting();
         $element->addControl();
     }
     public function paintingElements(array $elements){
             foreach ($elements as $element){
                 $this->paintingSection($element);
             }
     }
}
