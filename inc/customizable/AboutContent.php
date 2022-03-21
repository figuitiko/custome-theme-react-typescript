<?php
namespace Casautomotive\customizable;
use Casautomotive\customizable\util\CustomizableInterface;
use Casautomotive\customizable\util\ElementCustomizable;
use Casautomotive\customizable\util\ImgCustomizable;
use Casautomotive\customizable\util\TextCustomizable;
use WP_Customize_Manager;

class AboutContent
{
    


    public function __construct()
    {
        add_action('customize_register', array( $this, 'customizeRegister'));
        add_action('customize_register', array( $this, 'customizeRegisterMainWidget'));
        add_action('customize_register', array( $this, 'customizeRegisterMissionWidget'));
        // add_action('customize_register', array( $this, 'customizeRegisterBrandWidget'));
        // add_action('customize_register', array( $this, 'customizeRegisterAbout'));
    }
    public  function customizeRegister( WP_Customize_Manager $wp_customize){
        $customizable_element= new ElementCustomizable($wp_customize, 'ca-about-widget-section','about_page_sections');
        $customizable_element->add_panel('About Page Section', 'Adjust your about.');

    }
    public function customizeRegisterMainWidget(WP_Customize_Manager $wp_customize){

        $customizable_element_main= new ElementCustomizable($wp_customize, 'ca-about-widget-section','about_page_sections');
        $customizable_element_main->add_section('Main About widget Section');
        $main_widget_title = new TextCustomizable('Widget Title','ca-about-widget-title-control',
        $customizable_element_main->getSectionId(),'ca-about-widget-title',$wp_customize);
        $main_widget_subtitle = new TextCustomizable('Widget Subtitle','ca-about-widget-subtitle-control',
        $customizable_element_main->getSectionId(),'ca-about-widget-subtitle',$wp_customize, 'textarea');
        $data_img_1 = new ImgCustomizable('Image for Data 1', 'cs-data-image-1-control', 'cs-data-1-image',$customizable_element_main->getSectionId(), $wp_customize);
        $data_img_2 = new ImgCustomizable('Image for Data 2', 'cs-data-image-2-control', 'cs-data-2-image',$customizable_element_main->getSectionId(), $wp_customize);
        $data_img_3 = new ImgCustomizable('Image for Data 3', 'cs-data-image-3-control', 'cs-data-3-image',$customizable_element_main->getSectionId(), $wp_customize);
        $data_img_4 = new ImgCustomizable('Image for Data 4', 'cs-data-image-4-control', 'cs-data-4-image',$customizable_element_main->getSectionId(), $wp_customize);
       

        $this->paintingElements($main_widget_title, $main_widget_subtitle, $data_img_1, $data_img_2, $data_img_3, $data_img_4);
    }
    public function customizeRegisterMissionWidget(WP_Customize_Manager $wp_customize){

        $customizable_element_main= new ElementCustomizable($wp_customize, 'ca-about-widget-mission-section','about_page_sections');
        $customizable_element_main->add_section('Mission About widget Section');
        $main_widget_title = new TextCustomizable('Widget Title','ca-mission-about-widget-title-control',
        $customizable_element_main->getSectionId(),'ca-mission-about-widget-title',$wp_customize);
        $main_widget_subtitle = new TextCustomizable('Widget subTitle','ca-mission-about-widget-subtitle-control',
        $customizable_element_main->getSectionId(),'ca-mission-about-widget-subtitle',$wp_customize, 'textarea');
        $main_widget_subtitle_1 = new TextCustomizable('Widget subTitle 2','ca-mission-about-widget-subtitle-2-control',
        $customizable_element_main->getSectionId(),'ca-mission-about-widget-subtitle-2',$wp_customize, 'textarea');
        $main_widget_btn_1_text = new TextCustomizable('Widget button  text  1','ca-mission-about-widget-btn-text-1-control',
        $customizable_element_main->getSectionId(),'ca-mission-about-widget-btn-text-1',$wp_customize);
        $main_widget_btn_1_link = new TextCustomizable('Widget button  link  1','ca-mission-about-widget-btn-link-1-control',
        $customizable_element_main->getSectionId(),'ca-mission-about-widget-btn-link-1',$wp_customize);
        $main_widget_btn_2_text = new TextCustomizable('Widget button  text  2','ca-mission-about-widget-btn-text-2-control',
        $customizable_element_main->getSectionId(),'ca-mission-about-widget-btn-text-2',$wp_customize);
        $main_widget_btn_2_link = new TextCustomizable('Widget button  link  1','ca-mission-about-widget-btn-link-2-control',
        $customizable_element_main->getSectionId(),'ca-mission-about-widget-btn-link-2',$wp_customize);
        $feature_img = new ImgCustomizable('Feature image', 'cs-feature-image-1-control', 'cs-feature-1-image',$customizable_element_main->getSectionId(), $wp_customize);


        $this->paintingElements($main_widget_title, $main_widget_subtitle, $main_widget_subtitle_1,  
        $main_widget_btn_1_text, $main_widget_btn_1_link, $main_widget_btn_2_text, $main_widget_btn_2_link, $feature_img);
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
