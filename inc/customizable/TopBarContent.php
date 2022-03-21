<?php
namespace Casautomotive\customizable;
use Casautomotive\customizable\util\CustomizableInterface;
use Casautomotive\customizable\util\ElementCustomizable;
use Casautomotive\customizable\util\ImgCustomizable;
use Casautomotive\customizable\util\TextCustomizable;
use WP_Customize_Manager;

class TopBarContent
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

     $customizable_element= new ElementCustomizable($wp_customize, 'cs-topbar-section');
     $customizable_element->add_section('Top Bar Section');
     $fbImg = new ImgCustomizable('Icon for FB', 'cs-header-image-fb-topbar-control', 'cs-facebook-topbar',$customizable_element->getSectionId(), $wp_customize);
     $fBLink = new TextCustomizable('Fb link','fb-link-control',
            $customizable_element->getSectionId(),'fb-link',$wp_customize);
     $igImg = new ImgCustomizable('Icon for IG', 'cs-header-image-ig-topbar-control', 'cs-header-image-ig-topbar',$customizable_element->getSectionId(), $wp_customize);
     $igLink = new TextCustomizable('IG link','ig-link-control', $customizable_element->getSectionId(),'ig-link',$wp_customize);
     $twImg = new ImgCustomizable('Icon for Twitter', 'cs-header-image-tw-topbar-control', 'cs-header-image-tw-topbar',$customizable_element->getSectionId(), $wp_customize);
     $twLink = new TextCustomizable('Twitter link','tw-link-control',      $customizable_element->getSectionId(),'tw-link',$wp_customize);
    $lnImg = new ImgCustomizable('Icon for Linkedin', 'cs-header-image-ln-topbar-control', 'cs-header-image-ln-topbar',$customizable_element->getSectionId(), $wp_customize);
     $lnLink = new TextCustomizable('Linkedin link','ln-link-control',
            $customizable_element->getSectionId(),'ln-link',$wp_customize);
     $elements = [$fbImg,$fBLink, $igImg,$igLink, $twImg, $twLink, $lnImg, $lnLink];
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
