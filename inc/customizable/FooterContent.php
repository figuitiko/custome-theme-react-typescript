<?php
namespace Casautomotive\customizable;
use Casautomotive\customizable\util\CustomizableInterface;
use Casautomotive\customizable\util\ElementCustomizable;
use Casautomotive\customizable\util\ImgCustomizable;
use Casautomotive\customizable\util\TextCustomizable;
use WP_Customize_Manager;

class FooterContent
{
    

    /**
     * AgileRatesHeaderCustomizeClass constructor.
     */
    public function __construct()
    {
        add_action('customize_register', array( $this, 'customizeRegister'));
    }    
 public  function customizeRegister( WP_Customize_Manager $wp_customize){

     /**
      * Header Section
      */

     $customizable_element= new ElementCustomizable($wp_customize, 'cs-footer-section');
     $customizable_element->add_section('Footer Section');
     $logo_img = new ImgCustomizable('Image for logo', 'cs-footer-image-logo-control', 'cs-footer-logo-image',$customizable_element->getSectionId(), $wp_customize);
     $footerCp = new TextCustomizable('Copy text','cp-text-control', $customizable_element->getSectionId(),'cp-text',$wp_customize);
     $elements = [$logo_img,$footerCp];
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
