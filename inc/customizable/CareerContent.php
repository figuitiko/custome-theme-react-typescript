<?php
namespace Casautomotive\customizable;
use Casautomotive\customizable\util\CustomizableInterface;
use Casautomotive\customizable\util\ElementCustomizable;

use Casautomotive\customizable\util\TextCustomizable;
use WP_Customize_Manager;

class CareerContent
{
    


    public function __construct()
    {
        add_action('customize_register', array( $this, 'customizeRegister'));
        add_action('customize_register', array( $this, 'customizeRegisterCareerWidget'));
        
    }
    public  function customizeRegister( WP_Customize_Manager $wp_customize){
        $customizable_element= new ElementCustomizable($wp_customize, 'ca-career-widget-section','career_page_sections');
        $customizable_element->add_panel('career Page Section', 'Adjust your career.');

    }
    
    public function customizeRegisterCareerWidget(WP_Customize_Manager $wp_customize){

        $customizable_element_career= new ElementCustomizable($wp_customize, 'ca-career-widget-section','career_page_sections');
        $customizable_element_career->add_section('career widget Section');
      
        $widget_title = new TextCustomizable('Widget Title 1','career-page-widget-subtitle-control',$customizable_element_career->getSectionId(),'career-page-widget-subtitle',$wp_customize);
        $widget_subtitle = new TextCustomizable('Widget Text 1','career-page-widget-text-control',  $customizable_element_career->getSectionId(),'career-page-widget-text',$wp_customize,'textarea');
        
        $this->paintingElements( $widget_title, $widget_subtitle);
    }
   
    public function paintingSection (CustomizableInterface $element){
        $element->addSetting();
        $element->addControl();
    }
    public function paintingElements(... $elements){
        foreach ($elements as $element){
            $this->paintingSection($element);
        }
    }
}
